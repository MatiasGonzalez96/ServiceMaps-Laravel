@extends('layout')

@section('pageTitle', 'Service Maps')

@section('estilos')
    <link rel='stylesheet' href='css/estilosIndex.css'>
@stop

@section('javascripts')
    <script src="js/funcionesIndex.js"></script>
@stop

@section('body')

    <!-- Creo descripcion -->
    <div id="panelDescripcion">
        <span id="textoInformacion">¿Qué operación desea efectuar?</span>
    </div>

    <div id="panelABM">
        <div id="panelBotoneraABM">
            <button id="agregarServicio" class="botonABM" type="submit">Agregar Servicio</button>
            <button id="editarServicio" class="botonABM" type="submit">Editar Servicio</button>
            <button id="eliminarServicio" class="botonABM" type="submit">Eliminar Servicio</button>
        </div>
    </div>

@stop
