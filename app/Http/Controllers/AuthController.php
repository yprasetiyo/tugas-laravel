<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request){
        $first = $request["first"];
        $last = $request["last"];
        return view ('welcome')->with ('first',$first); 
    }
}
