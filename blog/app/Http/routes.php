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

Route::group(['prefix' => 'adminzone'], function(){
	
		Route::get('/',function (){
			return view('admin.dashboard');
		});
		Route::get('/categories/create','CategoriesController@create');	
		Route::post('/categories/create','CategoriesController@store');
			
		Route::get('/categories','CategoriesController@index');	
		
		Route::delete('/categories/delete/{category}', 'CategoriesController@destroy');
		Route::get('/categories/edit/{category}', 'CategoriesController@edit');
		Route::post('/categories/edit/{category}', 'CategoriesController@save');		
});
Route::get('/', function(){
	return 'Заглушка для главной страницы';
});

//Route::get('/articles/create', 'ArticlesController@create');
Route::resource('adminzone/articles','ArticlesController');
