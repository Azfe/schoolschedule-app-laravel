<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeStudent extends Controller
{

    //
    public function index(){
    	//llamos a la vista de home sutdent
    	return view('student.homeStudent');
    }
}
