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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function(){
    return view('registro');
});

Route::get('/dashboard', 'RegistroController@iniciar');
Route::get('/opciones-inversion', 'RegistroController@investment');
Route::get('/movimientos', 'RegistroController@movements');
Route::get('/transferencias', 'RegistroController@transfers');

Route::post('/dashboard', 'RegistroController@iniciar');