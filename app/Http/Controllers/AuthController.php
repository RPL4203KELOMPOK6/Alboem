<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('registrasi');
    }

    // public function submit(Request $request){
    //     $firstname = $request['First_Name'];
    //     $lastname = $request['Last_Name'];
    //     return view('welcome', compact('firstname','lastname'));
    // }
    public function login(){
        return view('login');
    }

}
