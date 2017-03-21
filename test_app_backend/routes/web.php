<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('message/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'message.edit'])
        ->where(['id' => '[0-9]+']);

Route::get('/articles/create', 'HomeController@create');
Route::get('/contact', 'HomeController@contact');
*/
/*ГОСТЕВАЯ КНИГА */

Route::get('/', 'MessagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
