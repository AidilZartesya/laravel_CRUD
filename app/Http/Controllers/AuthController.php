<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('form');
    }

    public function welcome(){
    	return view('welcome');
    }

    public function welcome_post(Request $request){
    	$firstname = $request['firstname'];
    	$lastname = $request['lastname'];
    	return view('welcome', ["firstname"=>$firstname,"lastname"=>$lastname]);
    }
}
