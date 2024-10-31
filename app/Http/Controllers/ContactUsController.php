<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showContact()
    {
        // dd("This is my showContact Controller");
        return view ('contact-us');
    }
    
}
