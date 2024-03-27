<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function uslogin(){
    return view ("auth.login");
    }
   public function userlogin(Request $request){
    $credentials = [
        'email' => $request->email, 
        'password' => $request->password,
    ];
    if(auth()->attempt($credentials)){
        return view('dashboard');}
        else{
            return view('auth.login');
        }
    }
}
