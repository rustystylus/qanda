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
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::controller('users', 'UsersController');

Route::resource('tags', 'TagsController');

Route::resource('documents', 'DocumentsController');
Route::get('documents/quote/{id}', array('as' => 'quote', 'uses' => 'DocumentsController@quote'));

Route::resource('translations', 'TranslationsController');
Route::get('translations/{id}/create', array('as' => 'create', 'uses' => 'TranslationsController@create'));
Route::post('translations/{id}/store', array('as' => 'store', 'uses' => 'TranslationsController@store'));
Route::get('translations/{id}/show', array('as' => 'show', 'uses' => 'TranslationsController@show'));

