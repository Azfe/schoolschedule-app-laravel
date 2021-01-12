<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function log(Request $request){
        //dd($request->all());

        $email=$request->email;
        $pass=$request->pass;

        $query=User::where('email','=',$email)->where('pass','=',$pass)->get();

        if($query->count()>=1){

            dd('estás logueado como estudiante');
            session('email', $email);
            session('rol', 'Estudiante');
            //return redirect(route('home'));

        }else{

            $query=Admin::where('email','=',$email)->where('password','=',$pass)->get();

            if($query->count()>=1){
                //dd('estás logueado como Administrador');

                // Specifying a default value...
                session('email', $email);
                session('rol', 'Admin');

                return redirect(route('admin.index'));
            }else{

                /*$query=Teacher::where('email','=',$email)->where('password','=',$pass)->get();

                if($query->count()>=1){

                    dd('estás logueado como profesor');

                }*/
            }

            return Redirect::back()->withErrors(['msg', 'Datos incorrectos']);
        }
        
    }
}
