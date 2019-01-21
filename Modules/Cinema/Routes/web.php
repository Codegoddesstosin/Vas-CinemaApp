<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('cinema')->group(function() {
    Route::get('/', 'CinemaController@index');
    Route::get('/{$id}', 'CinemaController@show');

});


Route::prefix('cinema')->group(function() {
    //Route::get('/{$cinema}', 'CinemaController@show');
});

Route::prefix('admin')->group(function() {
    Route::get('/', 'CinemaController@create');
   
});

Route::prefix('cinemas')->group(function() {
   Route::post('/', 'CinemaController@store');
  
});

Route::get('cinemas/{cinemaid}/showtimes', 'CinemaController@showtimes');

Route::resource('cinema', 'CinemaController');