<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
        //bloquea el acceso sin autenticación
        public function __construct() 
        {
          $this->middleware('auth');
        }
    
        public function index(){
            return view('XXX');
        }
}
