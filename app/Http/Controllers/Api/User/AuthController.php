<?php

namespace App\Http\Controllers\Api\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'firstname' => $fields['firstname'],
            'lastname' => $fields['lastname'],
            'email' => $fields['email'],
            'role_id' => 1,
            'password' => bcrypt($fields['password'])

        ]);
        $user->profile()->create(['user_id' => $user->id]);

        $token = $user->createToken('myapptoken')->plainTextToken; 

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response ($response, 201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //check email 
        $user = User::where('email', $fields['email'])->first();

        //check password
        if(!$user ||  !Hash::check($fields['password'], $user->password))
            return response([
                'message' => 'Invalid login, please try again'
            ], 401);
        //check if a Patient 
        if($user->role_id != 1)
        return response([
            'message' => 'Invalid login, This is the Patient App',
            'status' => false,
        ], 401);

        $token = $user->createToken('myapptoken')->plainTextToken; 

        $response = [
            'status' => true,
            'user' => $user,
            'token' => $token
        ];

        return response ($response, 200);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out',
            'status' => true,
        ];
    }

}
