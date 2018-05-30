<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ControladorAPI extends Controller
{
    public function obtenerServicios()
    {
        return Servicio::all();
    }

    public function crearServicio()
    {
        Servicio::create([
            'id' => 'prueba',
            'nombre' => 'prueba',
            'tipo' => 'Gomería',
            'telefono' => '(0291) 4555555',
            'direccion' => 'Prueba 123',
            'sitioweb' => 'www.prueba.com',
            'horario' => 'De 08:00hs a 20:00hs',
            'imagen' => 'gomeria.jpg',
            'latitud' => '-38.707232',
            'longitud' => '-62.245082'
        ]);
    }
}
