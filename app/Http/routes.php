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

Route::get('/', 'WelcomeController@index');

Route::get('/photo/create', 'PhotoController@create');

Route::get('/test/edit/{id}', 'TestController@edit');
Route::get('/test/update/{id}', 'TestController@update');
Route::get('/test/once/{id}', 'TestController@once');
Route::get('/test/destroy/{id}', 'TestController@destroy');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

$router->resource('test','TestController');
