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
use EloquentORM\User;

Route::get('/create', function () {
   
	$user = User::create([
		'name' => 'David Perdomo',
		'email' =>'d@perdomo.com',
		'password'=> bcrypt('123456'),
		'gender'=>'m',
		'biography' =>'El mejor en el mundo'
	]);
	
	return "Usuario guardado";
});

Route::get('/update-user', function () {
   
	$user = User::find(1);
	$user->gender = 'm';
	$user->biography ='El mejor en el mundo';
	$user->save();
		
	return "Usuario actualizado";
});

/*Route::get('/', function () {
    return view('welcome');
});
*/