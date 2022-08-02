<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VitalController extends Controller
{
    public function vitals($id=null)
    {
        
        $user = User::where('id', $id)->first();  
        
        if($user){

            $token = $user->createToken('Wearable devices')->plainTextToken;

            $response = [
                // 'user' => $user,
                'vitals' => $user->vitals,
                'token' => $token,
            ];

            return response($response, 201); 
        
        }else{

            return response("User not found", 401);
        }
        
        

    }
}
