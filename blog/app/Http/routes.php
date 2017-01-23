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

Route::get('/', 'FrontController@index');// Главная
Route::get('/show/{article}','FrontController@show');

Route::group(['prefix' => 'adminzone','middleware'=>'auth'], function(){
	
		Route::get('/',function (){
			return view('admin.dashboard');
		});
		
		Route::resource('articles','ArticlesController');
		Route::resource('pages','PagesController');
		Route::resource('categories','CategoriesController');
		
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');