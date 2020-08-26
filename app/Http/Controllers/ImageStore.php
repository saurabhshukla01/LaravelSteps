<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageStore extends Controller
{
    public function store(Request $req){
    	// echo "Hello From Controller";
    	$path = $req->file('img')->store('ImageFolder');
    	return ['path'=>$path , 'upload'=>"Image Upload Successfully"];
    }
}
