<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about_us(){
        return view('pages.about');
    }

    public function veterinarian(){
        return view('pages.vet');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function services(){
        return view('pages.services');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function contact(){
        return view('pages.contact');
    }
}
