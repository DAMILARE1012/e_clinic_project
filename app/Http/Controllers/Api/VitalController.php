<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vital;
use App\Models\Device;

class VitalController extends Controller
{
    
    public function getToken(Request $request)
    {
    
        // $user = User::where('email', $request->email)->first();  
        $vital = Vital::where('device_id', $request->device_id)->first();
        $user = $vital->user;

        if($user){

            $token = $user->createToken($user->email)->plainTextToken;

            return response($token, 201);

        }else{
            return "Device not found";
        }
    }

    public function getVitals($deviceid=null)
    {

        $vitals = Vital::where('device_id', $deviceid)->first();

        if ($vitals) {
            $user = $vitals->user;

            if($user){

                $response = [
                    'vitals' => $vitals,
                    'user' => $user,
                ];

                return response($response, 200);  
            }else{
                return response('Vital not found', 404);
            }
        } else {
            return response('User not found', 404);
        }
        
    }

    public function vitals($id=null)
    {
        
        $user = User::where('id', $id)->first();  
        return $user->tokens;
        if($user){

            $response = [
                // 'user' => $user,
                'vitals' => $user->vitals,
            ];

            return response($response, 201); 
        
        }else{

            return response("User not found", 401);
        }
        
        

    }

    public function updateVitals(Request $request)
    {
        
        $vitals = Vital::where('device_id', $request->deviceid)->first();
        if ($vitals) {

            $vitals->temperature = $request->temperature;
            $vitals->blood_pressure = $request->blood_pressure;
            $vitals->heart_rate = $request->heart_rate;
            $vitals->battery_level = $request->battery_level;

            $vitals->save();
            // $response = [
            //     'status' => 201,
            //     'message' => 'record updated'
            // ];
            return response('AckOk');
            
        } else {

            $response = [
                'status' => 500,
                'message' => 'Not successful'
            ];
            return response($response);
        }
        
    }   	
}
