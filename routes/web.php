<?php

//Get home
Route::get('/', 'ControladorServicios@index') -> middleware('auth');

//Get agregar
Route::get('/agregar', 'ControladorServicios@agregar') -> middleware('auth');

//Get editar
Route::get('/editar', 'ControladorServicios@editar') -> middleware('auth');

//Get editar/id
Route::get('/editar/{id}', 'ControladorServicios@editarServicio') -> middleware('auth');

//Get eliminar
Route::get('/eliminar', 'ControladorServicios@eliminar') -> middleware('auth');

//Get eliminar/id
Route::get('/eliminar/{id}', 'ControladorServicios@eliminarServicio') -> middleware('auth');

//Post agregar
Route::post('agregar', 'ControladorAgregar@agregar') -> middleware('auth');

//Post editar
Route::post('editar', 'ControladorEditar@editar') -> middleware('auth');

//Post eliminar
Route::post('eliminar', 'ControladorEliminar@eliminar') -> middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index') -> name('home');
