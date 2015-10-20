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
Route::get('/practice2', 'RandUserController@testuser');

Route::get('/practice', function () {
  $faker = Faker\Factory::create();

  for ($i=0; $i < 10; $i++) {
    echo '</br>'.$faker->paragraph(3, false).'</br>';

  }
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'RandUserController@getUser');

Route::post('/user', 'RandUserController@postUser');
