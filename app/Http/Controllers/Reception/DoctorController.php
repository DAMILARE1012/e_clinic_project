<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{

    public function index()
    {
        $doctors = User::where('role_id', 4)->get();
        return view('receptionist.doctor', compact('doctors'));
    }
}
