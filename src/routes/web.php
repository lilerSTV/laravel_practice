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

use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('reservations', 'ReservationController@index');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('reservations', 'ReservationController@index');
//Route::get('reservations/{reservation}', 'ReservationController@show')->name('reservations.show');

//Route::get('reservaitons/{reservation}', 'ReservationController@show')->name('reservations.show');
//Route::resource('reservaitons', 'ReservationController');

//Route::post('reservations', 'ReservationController@sotore');

