<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.pages.login');
    }
    public function Dologin(Request $request)
    {
    //   dd($request->all());
         $credentials=$request->except("_token");
    //      dd($credentials);
         $check=Auth::attempt($credentials);
            // dd($check);

            if($check)
            {
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back();
            }
    }    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
 }
