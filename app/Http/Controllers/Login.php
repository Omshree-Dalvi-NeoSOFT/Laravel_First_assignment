<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Login extends Controller
{
    public function loginCeck(Request $res){
        $validateData=$res->validate([
            'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'pass'=>'required|regex:/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/ '
        ],[
            'email.required'=>'Email - ID required !',
            'pass.required'=>'Password required !'
        ]);
        if($validateData){
            $check=$res->email.".txt";
            if(Storage::disk('public')->exists($check)){
                $file = fopen(storage_path('app/public/'.$check),"r");
                $uname=fgets($file);fgets($file);
                $pass=trim(fgets($file));
                $cpass=sha1($res->pass);
                if($pass == $cpass){
                    return view('pages.master')->with('username',$uname);
                }
                else{
                    return back()->with('error',"Login Fail");
                }                
            }
            else{
                return back()->with('error',"User not Found");
            }
        }
    }
}
