@extends('layout')

@section('pageTitle', 'Editar Servicio')

@section('estilos')
    <link rel='stylesheet' href='css/estilosEditarServicio.css'>
@stop

@section('body')

    <div id="panelABM">

        @foreach ($servicios as $servicio)

            {{ $servicio -> nombre }}

            <hr>

        @endforeach

    </div>

@stop
