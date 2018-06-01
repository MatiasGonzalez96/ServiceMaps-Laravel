<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorServicios extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function agregar()
	{
		return view('agregarServicio');
	}

	public function editar()
	{
		return view('editarServicio');
	}

	public function eliminar()
	{
		return view('eliminarServicio');
	}
}
