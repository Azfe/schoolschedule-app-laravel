<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Course;

class HomeAdmin extends Controller
{
    /**
    * Ruta home
    */
    public function index(){
    	//llamos a la vista de home sutdent
    	return view('admin.homeAdmin');
    }

    /**
    * Listado de profesores
    */
    public function listTeachers(){
    	$list = User::where('rol','Teacher')->get();

    	return view('admin.teachersList',[
    		'list' => $list,
    		'canEdit' => true,
    		'title' => 'Lista de Profesores'
    	]); //$list);
    }

    public function listStudents(){
    	$list = User::where('rol','Student')->get();

    	return view('admin.teachersList',[
    		'list' => $list,
    		'canEdit' => false,
    		'title' => 'Lista de Alumnos'
    	]);
    }
    /**
    * Mostramos el formulario de creación de profesor
    */
    public function createTeacher(){
    	return view('admin.formTeacher',["method"=>"POST"]);
    }
    /**
    * Mostramos el formulario de edición de profesor
    * @param $id Integer Id del profesor
    * @return view Retorna la vista con los datos de la edición
    */
    public function editTeacher($id){
    	$teacher = User::where('id',$id)->where('rol','Teacher')->first()->toArray();
    	//dd($teacher);
    	return view('admin.formTeacher',[
    		"method"=>"PUT",
    		'teacher' => $teacher
    	]);
    }
    /**
    * Realizamos la actualización de datos sobre el profesor
    * @param $request Request Los valores del formulario
    * @return redirect a la pagina correspondiente
    */
    public function updateTeacher(Request $request){
    	//TODO: validate para evitar errores en la inserción

    	//TODO: creamos una messageBag para poder comunicarle al usuario lo que pase

    	//crear objeto para insertar
    	$teacher = User::where('id',$request->id)->where('rol','Teacher');
    	//TODO: si no existe "$teacher" hacemos un redirect back con mensaje de error
    	if($teacher->count() === 0){
    		return redirect()->back(); 
    	}else{
    		$teacher = User::where('id',$request->id)->where('rol','Teacher')->first();
    	}
    	//datos del request
    	$teacher->name = $request->name;
    	$teacher->surname = $request->surname;
    	$teacher->telephone = $request->telephone;
    	$teacher->nif = $request->nif;

        //guardar
        if($teacher->save()){
            //TODO: añadimos mensaje de ok en el messageBag
            return redirect(route('admin.listTeachers')); 
        }else{
            //TODO: añadimos el mensaje de fail en el messageBag
            return redirect()->back(); 
        }
    }
    /**
    * Realizamos la inserción de datos sobre el profesor
    * @param $request Request Los valores del formulario
    * @return redirect a la pagina correspondiente
    */
    public function saveTeacher(Request $request){
    	//TODO: validate para evitar errores en la inserción

    	//crear objeto para insertar
    	$teacher = new User();
    	$teacher->rol = "Teacher";
    	//datos del request
    	$teacher->name = $request->name;
    	$teacher->surname = $request->surname;
    	$teacher->email = $request->email;
    	$teacher->telephone = $request->telephone;
    	$teacher->password = Hash::make($request->password);
    	$teacher->nif = $request->nif;

    	//TODO: creamos una messageBag para poder comunicarle al usuario lo que pase

        //guardar
        if($teacher->save()){
            //TODO: añadimos mensaje de ok en el messageBag
            return redirect(route('admin.listTeachers')); 
        }else{
            //TODO: añadimos el mensaje de fail en el messageBag
            return redirect()->back(); 
        }
    }
    /**
    * Lista de los cursos existentes
    */
    public function listCursos(){

    	$course = new Course;
    	$list = $course->all();

    	return view('admin.cursosList',[
    		'list' => $list,
    		'canEdit' => true,
    		'title' => 'Lista de Cursos'
    	]);
    }
    /**
    * Mostrar formulario de creación de cursos
    */
    public function createCourse(){
    	return view('admin.formCourse',[
    		"method"=>"POST"
    	]);
    }
    /**
    * Mostrar formulario de edición de curso
    * @param $id Integer El id del curso
    */
    public function editCourse($id){
    	$course = Course::findOrFail($id);
    	//dd($teacher);
    	return view('admin.formCourse',[
    		"method"=>"PUT",
    		'course' => $course
    	]);
    }
    /**
    * Almacenamos los datos de creación de curso
    * @param $request Request datos del formulario
    */
    public function saveCourse(Request $request){
    	//TODO: validate para evitar errores en la inserción

    	//crear objeto para insertar
    	$course = new Course();
    	//datos del request
    	$course->name = $request->name;
    	$course->description = $request->description;
    	$course->date_start = $request->date_start;
    	$course->date_end = $request->date_end;

    	//TODO: creamos una messageBag para poder comunicarle al usuario lo que pase

        //guardar
        if($course->save()){
            //TODO: añadimos mensaje de ok en el messageBag
            return redirect(route('admin.listCursos')); 
        }else{
            //TODO: añadimos el mensaje de fail en el messageBag
            return redirect()->back(); 
        }
    }
    /**
    * Actualizamos los datos de un curso existente
    * @param $request Request Datos del form
    */
    public function updateCourse(Request $request){
    	//TODO: validate para evitar errores en la inserción

    	//TODO: creamos una messageBag para poder comunicarle al usuario lo que pase

    	//crear objeto para insertar
    	$course = Course::findOrFail($request->id);	
    	//datos del request
    	$course->name = $request->name;
    	$course->description = $request->description;
    	$course->date_start = $request->date_start;
    	$course->date_end = $request->date_end;

        //guardar
        if($course->save()){
            //TODO: añadimos mensaje de ok en el messageBag
            return redirect(route('admin.listCursos')); 
        }else{
            //TODO: añadimos el mensaje de fail en el messageBag
            return redirect()->back(); 
        }
    }
}
