<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // dd("habijaibi");
        return view('welcome');
    }
    public function aboutUs()
    {
        return view ('pages.about-us');
    }
    
}
