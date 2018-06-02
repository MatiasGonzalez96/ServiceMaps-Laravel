<?php

//Get home
Route::get('/', 'ControladorServicios@index');

//Get agregar
Route::get('/agregar', 'ControladorServicios@agregar');

//Get editar
Route::get('/editar', 'ControladorServicios@editar');

//Get editar/id
Route::get('/editar/{id}', 'ControladorServicios@editarServicio');

//Get eliminar
Route::get('/eliminar', 'ControladorServicios@eliminar');

//Post agregar
Route::post('agregar', 'ControladorAgregar@agregar');
