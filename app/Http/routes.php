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

// Routes with subdomains
Route::group( ['domain' => 'expecting.' .env('DOMAIN')], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::group( ['domain' => 'findoutmore.' .env('DOMAIN')], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::group( ['domain' => 'fedupofbeingasked.' .env('DOMAIN')], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::group( ['domain' => 'fedupwithbeingasked.' .env('DOMAIN')], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::group( ['domain' => '{subdomain}.' . env('DOMAIN')], function () {
    Route::get('/', [
        'as' => 'user.profile.index',
        'uses' => 'UserController@profile']
    );
    Route::get('/note', [
        'as' => 'user.profile.note',
        'uses' => 'UserController@editNote']
    );
} );

// Use this later
Route::group( ['middleware' => 'permissions'], function () {
    Route::resource('user', 'UserController' );
});

Route::post('user/toggle-state', 'UserController@toggleState');
Route::post('/note', 'UserController@updateNote');

// Profile route with no subdomain
//Route::get('profile', 'UserController@edit');

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// General page routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('how-it-works', function () {
    return view('how-it-works');
});
Route::get('help-others', function () {
    return view('help-others');
});
Route::get('terms', function () {
    return view('terms');
});
