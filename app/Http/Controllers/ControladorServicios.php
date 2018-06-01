<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicio;

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
		$servicios = Servicio::all();

		return view('editarServicio', ['servicios' => $servicios]);
	}

	public function eliminar()
	{
		return view('eliminarServicio');
	}
}
