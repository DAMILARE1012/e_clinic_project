<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['profile.updated', 'check.medical.history']);
    }

    public function index() 
    {
        return view('user.home');
    }
}
