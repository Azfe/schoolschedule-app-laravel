<?php

use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

//el home inicial esta redireccionando al home correspondiente
Route::get('/home', 'HomeController@index')->name('home');

//rutas de home de usuario
Route::get('/homeStudent','HomeStudent@index')->middleware('auth')->name('home.student');
Route::get('/homeAdmin','HomeAdmin@index')->middleware('auth')->name('home.admin');
Route::get('/homeTeacher','HomeTeacher@index')->middleware('auth')->name('home.teacher');

//Ruta de edición del perfil
Route::get('/editProfile','HomeController@editProfile')->name('home.editProfile');
Route::put('/saveProfile','HomeController@saveProfile')->name('home.saveProfile');

//Rutas edición de profesor
Route::middleware('auth')->group(function () {
	//gestion de usuarios
    Route::get('/listTeachers', 'HomeAdmin@listTeachers')->name('admin.listTeachers');
    Route::get('/listStudents', 'HomeAdmin@listStudents')->name('admin.listStudents');
    Route::get('/createTeacher', 'HomeAdmin@createTeacher')->name('admin.createTeacher');
    Route::post('/saveTeacher', 'HomeAdmin@saveTeacher')->name('admin.saveTeacher');
    Route::get('/editTeacher/{id}', 'HomeAdmin@editTeacher')->name('admin.editTeacher');
    Route::put('/updateTeacher', 'HomeAdmin@updateTeacher')->name('admin.updateTeacher');
    //Gestión de cursos
    Route::get('/listCursos', 'HomeAdmin@listCursos')->name('admin.listCursos');
    Route::get('/createCourse', 'HomeAdmin@createCourse')->name('admin.createCourse');
    Route::post('/saveCourse', 'HomeAdmin@saveCourse')->name('admin.saveCourse');
    Route::get('/editCourse/{id}', 'HomeAdmin@editCourse')->name('admin.editCourse');
    Route::put('/updateCourse', 'HomeAdmin@updateCourse')->name('admin.updateCourse');
});
