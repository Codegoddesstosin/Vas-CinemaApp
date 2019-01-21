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

Route::prefix('showtime')->group(function() {
    Route::get('/', 'ShowtimeController@index');
});


Route::prefix('admin')->group(function() {
    Route::get('/', 'ShowtimeController@create');
   
});


//oute::prefix('shows')->group(function() {
    //Route::post('/', 'ShowtimeController@store');
  
//});

Route::get('showtimes/{showtimeid}/movies', 'ShowtimeController@movie');
//Route::get('showtimes/{showtimeid}/cinemas', 'ShowtimeController@cinema');




Route::resource('shows', 'ShowtimeController');