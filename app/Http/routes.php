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

Route::get('/', 'ProductController@create');

Route::get('create', 'ProductController@create');

Route::post('product/create', 'ProductController@store');

Route::get('update/{id}', 'ProductController@updateView');

Route::put('update', 'ProductController@update');

Route::get('product/{id}', 'ProductController@view');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
