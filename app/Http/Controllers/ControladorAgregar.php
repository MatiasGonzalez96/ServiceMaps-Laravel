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

        $servicio->id = utf8_encode(strtolower(preg_replace("/\s+/", "", $request->nombre)));
        $servicio->direccion = $request->direccion;

        $servicios = Servicio::all();

        foreach ($servicios as $s)
        {
            if ($s -> id == $servicio -> id || $s -> direccion == $servicio -> direccion)
            {
                return redirect('/');
            }
        }

        $servicio->nombre = $request->nombre;
        $servicio->tipo = $request->tipo;
        $servicio->telefono = $request->telefono;
        $servicio->sitioweb = $request->sitioweb;
        $servicio->horario = $request->horario;

        //Carga la imagen por defecto
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
