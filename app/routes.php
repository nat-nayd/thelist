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

Route::get('/', 'HomeController@getIndex');
Route::get('login', 'HomeController@getLogin');
Route::get('logout', 'HomeController@logout');
Route::post('login', 'HomeController@postLogin');

Route::group(array('before' => 'auth'), function(){

	Route::get('admin', 'AdminController@getIndex');
	Route::resource('characters', 'CharacterController');
	Route::resource('houses', 'HouseController');
});

Route::group(array('prefix' => 'api/1.0', 'namespace' => 'Api'), function(){

	Route::resource('houses', 'HouseController');
	Route::resource('characters', 'CharacterController');
});