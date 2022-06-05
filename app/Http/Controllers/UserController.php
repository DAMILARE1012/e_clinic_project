<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function signIn()
    {
        return view('pages.users.authentication.login');
    }

    public function signUp()
    {
        return view('pages.users.authentication.signup');
    }

    public function user_dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function user_profile()
    {
        return view('pages.users.user_profile');
    }
}
