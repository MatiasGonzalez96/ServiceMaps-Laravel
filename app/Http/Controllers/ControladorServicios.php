<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicio;

class ControladorServicios extends Controller
{
	public function index()
	{
		return View('index', ['title' => 'Service Maps', 'hola' => 'asd']);
	}

	public function agregar()
	{
		return View('agregarServicio', ['title' => 'Agregar Servicio']);
	}

	public function editar()
	{
		return View('editarServicio', ['title' => 'Editar Servicio']);
	}

	public function eliminar()
	{
		return View('eliminarServicio', ['title' => 'Eliminar Servicio']);
	}

	public function getServicios()
	{
		return Servicio::all();
	}
}
