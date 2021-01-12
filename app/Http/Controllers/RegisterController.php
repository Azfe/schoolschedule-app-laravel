<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function save(Request $request){
        //dd($request->all());

        
        $user = new User();

        $user->username=$request->username;
        $user->pass=$request->pass;
        $user->email=$request->email;
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->telephone=$request->telephone;
        $user->nif=$request->nif;

        $result=$user->save();

        if($result){
            return redirect(route('login.index'));
        }
        
    }
}
