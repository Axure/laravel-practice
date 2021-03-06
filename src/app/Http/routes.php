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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'IndexController@index');

//Route::get('/user/{id}', function($id) {
////    return view('user.profile', ['user' => User::findOrFail($id)]);
//
//});

Route::get('user/{id}', 'UserController@showProfile');
Route::get('user', 'UserController@showAllProfile');

//Route::post(/)

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
