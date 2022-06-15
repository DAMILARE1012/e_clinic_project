<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VitalController extends Controller
{
    public function vitals(Request $request)
    {

        $user = User::where('email', 'w3ZCuBo0GM@gmail.com')->first();        
        $token = $user->createToken('Wearable devices')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);

    }
}
