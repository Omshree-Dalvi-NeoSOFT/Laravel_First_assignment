<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Register extends Controller
{
    public function registerdtl(Request $detl){
        
        $validateData=$detl->validate([
            'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'uname'=>'required|regex:/^[a-zA-Z0-9\-\_]+$/',
            'pass'=>'required|regex:/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/',
            'name'=>'required|regex:/^[a-zA-Z ]{2,10}+$/',
            'age'=>'required|integer|min:18|max:70',
            'gender'=>'required',
            'file'=>'required|mimes:jpg,jpeg,png',
            'captcha'=>'required|same:captchasum',
            
        ],[
            'captcha.same'=>"Invalid Captcha.."
        ]);
        if($validateData){
            $uname=$detl->uname;
            $email=$detl->email;
            $pass=sha1($detl->pass);
            $name=$detl->name;
            $age=$detl->age;
            $gender=$detl->gender;
            $filename=$uname."-image.".$detl->file->extension();
            $details=$email.".txt";
            
            if($detl->file->move(public_path('uploads'),$filename))
            {
                Storage::disk('public')->put($details,"$uname \n $email \n $pass \n $name \n $age \n $gender \n $filename");
                return view('welcome')->with('username',$uname);
            }
            else {
              return back()->with('error',"Uploading error");
            }
        }
    }

    public function captcha(){
        $r1=range(0,9);
        $ran1=array_rand($r1);
        $r2=range(9,1);
        $ran2=array_rand($r2);
        $val = $ran1." + ".$ran2." = ?";
        $capsum = $ran1+$ran2;
        $data['captcha']=[$val,$capsum];
        return view('register',$data);
    }
}
