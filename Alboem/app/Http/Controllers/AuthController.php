<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    
    public function registrasi(){
        return view('registrasi');
    }

    public function forgot_password(){
        return view('forgot_password');
    }

    public function address(){
        return view('address');
    }
    public function cart(){
        return view('cart');
    }
    public function detail_produk(){
        return view('detail_produk');
    }

    public function dropdown_select(){
        return view('dropdown_select');
    }

    public function pemasok_editprofil(){
        return view('pemasok_editprofil');
    }

    public function pemasok_kelolaproduk(){
        return view('pemasok_kelolaproduk');
    }

    public function pemasok_profil(){
        return view('pemasok_profil');
    }

    public function pesanan(){
        return view('pesanan');
    }

    public function profile(){
        return view('profile');
    }

    public function transaksi(){
        return view('transaksi');
    }

    public function wishlist(){
        return view('wishlist');
    }

}
