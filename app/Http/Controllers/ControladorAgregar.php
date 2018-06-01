<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ControladorAgregar extends Controller
{
    public function agregar(Request $request)
    {
        $this->validate(request(), [

            'nombre' => 'required',
            'telefono' => 'required',
            'sitioweb' => 'required',
            'direccion' => 'required'

        ]);

        $servicio = new Servicio();

        $servicio->id = strtolower(preg_replace("/\s+/", "", $request->nombre));
        $servicio->nombre = $request->nombre;
        $servicio->tipo = $request->tipo;
        $servicio->telefono = $request->telefono;
        $servicio->direccion = $request->direccion;
        $servicio->sitioweb = $request->sitioweb;
        $servicio->horario = $request->horario;

        //Cargar imagen por defecto (cambiar!)
        if ($servicio->tipo == "Gomería")
        {
            $servicio->imagen = "gomeria.jpg";
        }
        else
        {
            if ($servicio->tipo == "Estación de Servicio")
            {
                $servicio->imagen = "estacionServicio.jpg";
            }
            else
            {
                $servicio->imagen = "tallerMecanico.png";
            }
        }

        $servicio->latitud = $request->latitud;
        $servicio->longitud = $request->longitud;

        $servicio->save();
        return redirect('/');
    }
}
