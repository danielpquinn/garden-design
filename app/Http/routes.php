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

use Illuminate\Http\Request;


// Single page app
Route::get('/', function (Request $request) {
    $ua = $request->header('User-Agent');

    return view('home', array( 'ua' => $ua ));
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//API
Route::get('/api/gardens', 'API\GardensController@all');
Route::get('/api/gardens/{slug}', 'API\GardensController@find');

Route::get('/api/pages/{name}', 'API\PagesController@find');

Route::get('/api/press-items', 'API\PressItemsController@all');

Route::get('/api/press-links', 'API\PressLinksController@all');