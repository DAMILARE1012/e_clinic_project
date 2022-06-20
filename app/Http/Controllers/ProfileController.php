<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialization;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $role = auth()->user()->role;
        $specializations = Specialization::all();
        
        if ($role = 1) {
            return view('user.profiles.edit', compact('specializations'));
        }elseif($role = 3){
            return view('receptionist.profiles.edit', compact('specializations'));
        }elseif($role = 4){
            return view('specialist.profiles.edit', compact('specializations'));
        }
    }
}
