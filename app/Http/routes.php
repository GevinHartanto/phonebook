<?php

use App\User;

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

//Route::get('/contact', 'PostController@contact');

//Route::get('/user/{id}/role', function($id){
//	$user = User::find($id);
//	foreach($user->roles as $role){
//		return $role->name;
//	}
//});

Route::resource('/users', 'PostController');

Route::resource('/home', 'HomeController');


