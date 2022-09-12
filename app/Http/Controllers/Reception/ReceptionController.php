<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    public function index()
    {
        return view('receptionist.home');
    }

    public function specialist()
    {
        $specialists = User::where('role_id', 4)->get();
        return view('receptionist.specialist', compact('specialists'));
    }
}
