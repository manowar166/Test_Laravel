<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/signup',[
    'uses' => 'UserController@signup'
]);




  Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');  


Route::get('/test', function () {
    return response()->json([
        'user' => [
            'first_name' => 'Aleksandr',
            'last_name' => 'manowar166'
        ]
        ]);
   });


Route::resource('register', 'Auth\RegisterController');   

Route::group(['middleware' => 'auth:api'], function () {
     Route::resource('products', 'ProductsController');
     Route::resource('profile', 'UserController');
});

