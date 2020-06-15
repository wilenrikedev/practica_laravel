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

Route::get('/personas', 'personasController@mostrarPersonas');
//Route::get('/mostrarUsuario/{id}', 'personasController@mostrarUsuario');
Route::get('/nuevaPersona', 'personasController@nuevaPersona');
Route::get('/editarPersona/{id}', 'personasController@editarPersona');
Route::post('/update/{id}', 'personasController@update');
Route::post('/registrar', 'personasController@registrar');
Route::get('/borrarPersona/{id}', 'personasController@borrarPersona');