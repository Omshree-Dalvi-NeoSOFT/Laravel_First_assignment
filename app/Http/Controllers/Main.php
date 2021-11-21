<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Main extends Controller
{
    public function login(){
        return view('login');
    }

    public function welcome(Request $req){
        $uname=$req->name;
        return view('welcome')->with('uname',$uname);
    }

    public function register(){
        return view('register');
    }

    public function changepass(){
        
        return view('pages/changepass');
    }

    public function gallary(){
        return view('pages/gallary');
    }

    public function home(){
        return view('pages/home');
    }

    public function editprofile(){
        return view('pages/editprofile');
    }

    public function product(){
        return view('pages/product');
    }

    public function category(){
        return view('pages/category');
    }

    public function order(){
        return view('pages/order');
    }

    public function profile(){
        return view('pages/profile');
    }

    public function about(){
        return view('pages/about');
    }

    public function fdbck(){
        return view('pages/fdbck');
    }
}
