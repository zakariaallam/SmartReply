<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect($provider){
       return Socialite::driver($provider)->stateless()->redirect();
    }

    public function callback($provider){
       $socialUser = Socialite::driver($provider)->stateless()->user();
       $fullName = explode(" ",$socialUser->getName());
        
       $user = User::where('email',$socialUser->getEmail())->first();
       if(!$user){
        $role = Role::where('name','owner')->first();
         $user =  User::create([
            'first_name' => $fullName[0],
            'last_name' => $fullName[1],
            'email' => $socialUser->getEmail(),
            'password' => Hash::make(Str::random(16)),
            'role_id' => $role->id
          ]);
       }
       $token = $user->createToken('token')->plainTextToken;

       return redirect('http://localhost:5173');
   //     return response()->json([
   //      'status' => true,
   //      'message' => 'login successfully',
   //      'user' => $user,
   //      'token' => $token
   //     ]);
   //  }
}
