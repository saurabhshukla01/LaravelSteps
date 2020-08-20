<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $req){
    	// return $req->input();
    	// return view('login');
    	$req->session()->put('data',$req->input());
    	return redirect('profile');
    }

    public function profile(Request $req){
    	// return $req->input();
    	return view('profile');
    }

   	public function logout(){
   		session()->forget('data');
    	return redirect('login');
    }
}
