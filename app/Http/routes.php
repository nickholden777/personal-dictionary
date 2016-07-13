<?php

Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);

/*=================AUTH==========================*/

Route::get('/reg', ['as' => 'reg', 'uses' => 'AuthController@reg']);
Route::post('/reg', 'AuthController@regPost');

Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/login', 'AuthController@loginPost');

Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);


/*=================AUTH==========================*/

Route::group(['middleware' => 'auth'], function() {

	Route::get('/{slug}', ['as' => 'lang', 'uses' => 'LangController@lang']);
	Route::post('/{slug}', 'LangController@langPost');

	Route::post('/{slug}/delete', ['as' => 'lang.delete', 'uses' => 'LangController@langDelete']);

	Route::post('/{slug}/edit', ['as' => 'lang.edit', 'uses' => 'LangController@langEdit']);

});