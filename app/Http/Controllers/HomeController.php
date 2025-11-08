<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.index');   
    }

    public function about(){
        return view('frontend.pages.about');   
    }

    public function contactus(){
        return view('frontend.contactus');   
    }

    public function collegeplanning(){
        return view('frontend.collegeplanning');   
    }

    public function ouracceptence(){
        return view('frontend.ouracceptence');   
    }

    public function appointement(){
        return view('frontend.appointement');   
    }

    public function termconditions(){
        return view('frontend.termconditions');   
    }
}
