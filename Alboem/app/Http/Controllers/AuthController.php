<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registrasi(){
        return view('registrasi');
    }

    public function login(){
        return view('login');
    }
}
