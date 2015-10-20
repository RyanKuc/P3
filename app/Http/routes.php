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

Route::get('/', function() {
  return view('index');
});

Route::get('/user', 'RandUserController@getUser');

Route::post('/user', 'RandUserController@postUser');

Route::get('/lorem', 'LoremController@getLorem');

Route::post('/lorem', 'LoremController@postLorem');
