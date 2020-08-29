<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/salon', 'SalonController');

Route::get('/salon', 'SalonController@index')->name('salon.index');
Route::get('/salon/create', 'SalonController@create')->name('salon.create');
Route::post('/salon', 'SalonController@store')->name('salon.store');
Route::get('/salon/{grado}/{seccion}', 'SalonController@show')->name('salon.show');
Route::get('/salon/{grado}/{seccion}/edit', 'SalonController@edit')->name('salon.edit');
Route::put('/salon/{grado}/{seccion}', 'SalonController@update')->name('salon.update');
Route::delete('/salon/{grado}/{seccion}', 'SalonController@destroy')->name('salon.destroy');
