<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicio;

class ControladorEliminar extends Controller
{
    public function eliminar(Request $request)
    {
        $id = utf8_encode(strtolower(preg_replace("/\s+/", "", $request->nombre)));
        $servicio = Servicio::where('id', $id)->get();

        $servicio[0] -> delete();

        return redirect('/eliminar');
    }
}
