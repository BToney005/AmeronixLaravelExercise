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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function() {
    return "test";
});

Route::get('/contacts/test_add/', 'ContactController@add');
Route::get('/contacts/test_update/{id}', 'ContactController@update');
Route::get('/contacts/test_delete/{id}', 'ContactController@delete');
Route::get('/contacts/{id}', 'ContactController@showContact');
