<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use app\User;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //redireccionamos al home correspondiente
        switch (auth()->user()->rol) {
            case 'Admin':
                return redirect(route('home.admin'));
                break;
            case 'Teacher':
                return redirect(route('home.teacher'));
                break;
            case 'Student':
            default:
                return redirect(route('home.student'));
                break;
        }
        
    }

    /**
    * Cargamos la pagina de edición de usuario
    */
    public function editProfile(){
        $user = User::find(auth()->user()->id);
        return view('general.editProfile', ['user' => $user]);
    }

    /**
    * Guardamos los datos de usuario
    * @param $request Request Campos enviados desde el form
    */
    public function saveProfile(Request $request){
        //encontra el usuario
        $user = User::findOrFail(auth()->user()->id);
        //TODO: validar el request

        //actualizar los datos
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->telephone = $request->telephone;
        $user->nif = $request->nif;

        //TODO: creamos una messageBag para poder comunicarle al usuario lo que pase

        //guardar
        if($user->save()){
            //TODO: añadimos mensaje de ok en el messageBag
            return redirect()->back(); 
        }else{
            //TODO: añadimos el mensaje de fail en el messageBag
            return redirect()->back(); 
        }
    }
}
