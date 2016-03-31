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

Route::get('/', [
	'as' => 'home',
	'uses' => 'Controller@home'
]);

Route::get('/people', [
	'as' => 'people',
	'uses' => 'PeopleController@readAll'
]);

Route::get('/people/{id}', 'PeopleController@read');

Route::post('/people', 'PeopleController@create');

Route::put('/people/{id}', 'PeopleController@update');

Route::delete('/people/{id}', 'PeopleController@delete');

Route::get('/people.json', 'PeopleController@readAllJson');