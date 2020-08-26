<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	// $data = DB::table('users')->get();
    	$data = User::get();
    	$data = json_decode(json_encode($data),true);
    	// echo "<pre>";print_r($data);die;
    	return $data;
    }

}
