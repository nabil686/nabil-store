<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // dd("habijaibi");
        return view('backend.master');
    }
       
}
