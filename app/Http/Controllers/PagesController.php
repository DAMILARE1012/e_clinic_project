<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about_us()
    {
        return view('pages.front.about');
    }

    public function veterinarian()
    {
        return view('pages.front.specialist_profile');
    }

    public function gallery()
    {
        return view('pages.front.gallery');
    }

    public function services()
    {
        return view('pages.front.services');
    }

    public function blog()
    {
        return view('pages.front.blog');
    }

    public function contact()
    {
        return view('pages.front.contact');
    }

    public function pricing()
    {
        return view('pages.front.pricing');
    }
}
