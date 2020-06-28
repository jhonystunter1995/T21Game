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

//ACTIVAR LA RUTA DE VERIFICACION...//
Auth::routes(['verify' => true]);

//MIDDLEWARE DE VERIFICACION...///
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// Router Auth
Route::get('/logout', 'ConnectController@getLogout')->name('logout');
