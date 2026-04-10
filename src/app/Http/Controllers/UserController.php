<?php

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use App\Models\Businesse;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function getUser(){
        $user = auth('api')->user();
        return response()->json([
            'status' => true,
            'user' => $user,
        ]);
    }

    public function register(Request $request)
    {
        
        $request->validate([
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $role = Role::where('name', 'client')->first();
        if (!$role)
            return response()->json(['message' => 'Role not found'], 500);
        
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $role->id,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'create success',
                'user' => $user
            ], 201);
        
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (!$token = auth('api')->attempt($validate) )
            return response()->json(['message' => 'email or password non correcte'], 401);

        return response()->json([
            'status' => true,
            'message' => 'login successfully',
            'user' => auth('api')->user(),
            'token' => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'logout Successfoly'
        ]);
    }
}
