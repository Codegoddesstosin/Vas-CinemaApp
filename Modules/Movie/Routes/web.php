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

Route::prefix('movie')->group(function() {
    Route::get('/', 'MovieController@index');
    Route::get('/m', 'MovieController@create');
   

    //Route::get('/movies', 'MovieController@store');
    //Route::get('/admin', 'MovieController@create');


    //Route::get('/mymovies', 'MovieController@Allmovies');
});


//Route::prefix('admin')->group(function() {
    //Route::get('/', 'MovieController@create');
   
//})->middleware('auth');

//Auth::routes();



Route::group(['middleware' => ['web', 'auth']], function()
{
    Route::get('/admin', 'MovieController@create');
});



Route::prefix('movies')->group(function() {
    Route::post('/', 'MovieController@store');
  
});


Route::get('movies/{movieid}/showtimes', 'MovieController@showtimes');

Route::resource('movie', 'MovieController');