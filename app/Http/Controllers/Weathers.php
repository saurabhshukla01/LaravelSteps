<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Http;

class Weathers extends Controller
{
    // Create how to call Api in controller use it
    public function list(){
    	// return Http::get('https://api.openweathermap.org/data/2.5/weather?q=New%20Delhi&units=imperial&appid=271d1234d3f497eed5b1d80a07b3fcd1')->body();
    	$data = Http::get('https://api.openweathermap.org/data/2.5/weather?q=New%20Delhi&units=imperial&appid=271d1234d3f497eed5b1d80a07b3fcd1')->json();
    	// echo "<pre>"; print_r($data);die;
    	return view('weathers',['data'=>$data]);
    }
}
