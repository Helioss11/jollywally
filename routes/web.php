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

Route::get('/domicilio', function(){
  return view('domicilio');
});

Route::get('/dashboard', 'RegistroController@iniciar');
Route::get('/opciones-inversion', 'RegistroController@investment');
Route::get('/movimientos', 'RegistroController@movements');
Route::get('/transferencias', 'RegistroController@transfers');

Route::post('/registro', 'RegistroController@registro');
Route::post('/dashboard', 'RegistroController@iniciar');
Route::post('/domicilio', 'RegistroController@domicilio');