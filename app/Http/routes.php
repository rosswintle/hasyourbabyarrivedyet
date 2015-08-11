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

Route::group( ['domain' => '{subdomain}.' . env('DOMAIN')], function () {
    Route::get('/', 'User@profile');
    Route::get('profile', 'User@profile');
} );


Route::get('/', function () {
    return view('welcome');
});

