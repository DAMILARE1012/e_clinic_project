<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function signIn()
    {
        return view('pages.admin.authentication.login');
    }

    public function signUp()
    {
        return view('pages.admin.authentication.signup');
    }
}
