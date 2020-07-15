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
Route::get('/', 'WebController@inicio');
Route::get('/registrar_cliente', 'WebController@from_cliente')->name('form_cliente');

//controlador para cliente cambiado
Route::post('/guardar_registro', 'PersonaController@store')->name('save_cliente');
// Route::resource('/persona','PersonaController@store');
