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

//Get home
Route::get('/', 'ControladorServicios@index');

//Get agregar
Route::get('/agregar', 'ControladorServicios@agregar');

//Get editar
Route::get('/editar', 'ControladorServicios@editar');

//Get eliminar
Route::get('/eliminar', 'ControladorServicios@eliminar');
