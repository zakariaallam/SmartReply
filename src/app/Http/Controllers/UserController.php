<?php

namespace App\Http\Controllers;

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
    public function register(Request $request)
    {
        
        $request->validate([
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'business_name' => 'required|string'
        ]);

        $role = Role::where('name', 'owner')->first();
        if (!$role)
            return response()->json(['message' => 'Role not found'], 500);
        DB::beginTransaction();
        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $role->id,
            ]);

            Businesse::create([
                'name' => $request->business_name,
                'user_id' => $user->id
            ]);

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'create success',
                'user' => $user
            ], 201);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'error create user'
            ], 500);
        }
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (!Auth::attempt($validate))
            return response()->json(['message' => 'email or password non correcte'], 401);

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'login successfully',
            'user' => $user->only(['id', 'first_name', 'last_name', 'email', 'role_id']),
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
