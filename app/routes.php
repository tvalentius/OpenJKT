<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

//Route::resource('user', 'Admin_UsersController');
//Route::resource('roles', 'Admin_RolesController');

//Backend
//Route::controller('admin', 'Admin_UsersController');


//Front-end
Route::get('/', 'HomeController@getIndex');
Route::controller('category', 'CategoryController');
