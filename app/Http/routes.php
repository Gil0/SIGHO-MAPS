<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

////////////////Admin
Route::get('Admin/Home', function(){
	return view('/Admin/AdminHome');
});
//Profesores

Route::get('/Admin/Profesores',  ['middleware' => 'admin', 'uses' => 'AdminController@profesores']);
Route::post('/admin/profesor/crear',  ['middleware' => 'admin', 'uses' => 'AdminController@crearprofesores']);
Route::post('/admin/profesores/{id}/eliminar',['middleware' => 'admin', 'uses' => 'AdminController@eliminarProfesor']);
Route::get('/admin/profesores/{id}/editar',['middleware' => 'admin', 'uses' => 'AdminController@editarProfesor']);
Route::post('/admin/profesor/{id}/guardarCambios',['middleware' => 'admin', 'uses' => 'AdminController@guardarCambiosProfesor']);




////////////////User

//Vista del index de usuario
Route::get('User/Home', function(){
	return view('/User/UserHome');
});
//Profesores
Route::get('User/Profesores', function(){
	return view('/User/UserProfesores');
});
/*Route::get('/homeu', function(){
	return view('/User/homeu');
});*/


Route::get('/User/Profesores',  ['middleware', 'uses' => 'UserController@profesores']);

Route::post('/user/comentario/crear',  ['middleware' , 'uses' => 'UserController@crearComentario']);

Route::get('/Admin/Comentarios',  ['middleware' => 'admin', 'uses' => 'AdminController@comentarios']);

Route::post('/admin/comentarios/{id}/cambiarStatus',['middleware' => 'admin', 'uses' => 'AdminController@cambiarStatus']);


Route::get('/admin/Profesores/{id}/editar',['middleware' => 'admin', 'uses' => 'AdminController@editarProfesor']);

Route::post('/admin/profesor/{id}/guardarCambios',['middleware' => 'admin','uses' => 'AdminController@guardarCambiosProfesor']);

Route::get('/admin/profesor/{id}/getInformacion',['middleware' => 'admin', 'uses' => 'AdminController@getInfoProfesor']);