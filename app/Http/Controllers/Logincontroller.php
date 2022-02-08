<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
class Logincontroller extends Controller
{
    public function halamanlogin(){
        return view('signin');
    }
    public function postlogin(Request $request){
       if(Auth::attempt($request->only('email','password'))){
           return redirect('/beranda');
       }
       return redirect('/');
    }
    public function logout(){
        Auth::logout();
            return redirect('/welcome');
        }
}