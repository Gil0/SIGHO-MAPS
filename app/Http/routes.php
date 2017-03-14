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
Route::get('/admin/Profesores',  ['middleware' => 'admin', 'uses' => 'AdminController@profesores']);
////////////////User

//Vista del index de usuario
<<<<<<< HEAD
Route::get('User/Home', function(){
	return view('/User/UserHome');
});
//Profesores
Route::get('User/Profesores', function(){
	return view('/User/UserProfesores');
});
=======
/*Route::get('/homeu', function(){
	return view('/User/homeu');
});*/
>>>>>>> d08f58210078f2c686d60f5ed2529b48abfb7a93



