@extends('layout')

@section('pageTitle', 'Editar Servicio')

@section('estilos')
    <link rel='stylesheet' href='css/estilosEditar.css'>
@stop

@section('body')

    <!-- Creo descripcion -->
    <div id="panelDescripcion">

        <span id="textoInformacion">Elija un servicio para modificar</span>

    </div>

    <div id="panelABM">

        @foreach ($servicios as $servicio)

            <a class="botonServicio" type="button" href="/editar/{{ $servicio -> id }}">{{ $servicio -> nombre }}</a>

        @endforeach

    </div>

    <div id="panelVolver">

        <a href="/"><button class="botonVolver" type="button">Volver</button></a>

    </div>

@stop
