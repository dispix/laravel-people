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

Route::get('/',
[
	'as' 	=> 'home',
	'uses' 	=> 'Controller@home'
]);

Route::get('/people',
[
	'as' 	=> 'people',
	'uses' 	=> 'PeopleController@readAll'
]);

Route::get('/people/{id}',
[
	'as' 	=> 'someone',
	'uses' 	=> 'PeopleController@read'
]);

Route::post('/people',
[
	'as' 	=> 'create_someone',
	'uses' 	=> 'PeopleController@create'
]);

Route::post('/people/update',
[
	'as' 	=> 'update_someone',
	'uses'	=> 'PeopleController@update'
]);

Route::post('/people/delete',
[
	'as' 	=> 'delete_someone',
	'uses'	=> 'PeopleController@delete'
]);

Route::get('/people.json',
[
	'as' 	=> 'people.json',
	'uses' 	=> 'PeopleController@readAllJson'
]);