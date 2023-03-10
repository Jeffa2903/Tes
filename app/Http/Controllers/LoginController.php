<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/indextiket');
        }
        return view('login');
        // dd($request->all());
    }

    public function logout(){
        Auth::logout();
        return view('main');
    }
}
