<?php

namespace App\Http\Controllers;

use App\Models\HealthTip;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tips = HealthTip::where('status', 1)->get();
        return view('welcome', compact('tips'));
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function contact()
    {
        return view('contact');
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

    
    public function pricing()
    {
        return view('pages.front.pricing');
    }
}
