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

		return view('editar', ['servicios' => $servicios]);
	}

	public function editarServicio(Request $request)
	{
		$servicio = Servicio::where('id', $request -> id)->get();

		return view('editarServicio', ['servicio' => $servicio]);
	}

	public function eliminar()
	{
		return view('eliminarServicio');
	}
}
