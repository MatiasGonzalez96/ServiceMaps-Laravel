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
		$servicios = Servicio::all();

		return view('eliminar', ['servicios' => $servicios]);
	}

	public function eliminarServicio(Request $request)
	{
		$servicio = Servicio::where('id', $request -> id)->get();

		return view('eliminarServicio', ['servicio' => $servicio]);
	}

	public function ver()
	{
		$servicios = Servicio::all();

		return view('ver', ['servicios' => $servicios]);
	}

	public function verServicio(Request $request)
	{
		$servicio = Servicio::where('id', $request -> id)->get();

		return view('verServicio', ['servicio' => $servicio]);
	}
}
