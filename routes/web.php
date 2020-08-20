<?php

use Illuminate\Support\Facades\Route;

/*
How to Call Api in Laravel 7.0 using Client http  : First create api and set url here after that its call easly.


// use Illuminate\Support\Facades\Http;
// $resp = Http::post('api_url')
// $resp = Http::get('http://api.plos.org/search?q=title:DNA');
// $resp = Http::get('http://127.0.0.1:8000/api/product');
// print_r($resp->status());
// dd($resp->status());
// print_r($resp->body());
// print_r($resp->json());

*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // how to another way to redirect here
    // return redirect('sample');
});

/*
Route::get('/sample/{id}', function ($id) {
	echo $id;
    return view('sample');
});

Route::get('/sample', function () {
    return view('sample');
});
*/

// How to create short way of routing here then  
// Route::view('here','sample');

// How to Redirect Page in Laravel 
// Route::Redirect('/','sample');

Route::view('sample','sample');
Route::view('example','example');
Route::get('weathers','Weathers@list');
Route::view('login','login');
Route::post('login','Login@index');
// Route::view('profile','profile');

/*
Route::get('/profile', function () {
	//if(!session()->has('data')){
	//	return redirect('login');
	//}
    return view('profile');
});
*/

Route::get('logout','Login@logout');

Route::group(['middleware'=>['CustomAuth']],function(){
	Route::view('profile','profile');
	Route::get('/', function () {
    	return view('welcome');
	});

});
