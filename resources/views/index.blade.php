@extends('layout')

@section('pageTitle', 'Service Maps')

@section('estilos')
    <link rel='stylesheet' href='css/estilosIndex.css'>
@stop

@section('body')

    <!-- Creo descripcion -->
    <div id="panelDescripcion">
        <span id="textoInformacion">¿Qué operación desea efectuar?</span>
    </div>

    <div id="panelABM">
        <div id="panelBotoneraABM">
            <a class="botonABM" type="button" href="/agregar">Agregar Servicio</a>
            <a class="botonABM" type="button" href="/editar">Editar Servicio</a>
            <a class="botonABM" type="button" href="/eliminar">Eliminar Servicio</a>
        </div>
    </div>

@stop
