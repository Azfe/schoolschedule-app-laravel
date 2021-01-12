<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //bloquea el acceso sin autenticación
    public function __construct() 
    {
      $email = session('email');
      $rol = session('rol');
      if(!empty($email) && $rol === 'Admin') {

        dd('redireccionando');
        return redirect(route('login'));
      }
    }

    public function index(){
        return view('Admin.adminpanel');
    }

}
