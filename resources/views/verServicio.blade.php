@extends('layout')

@section('pageTitle', 'Ver Servicio')

@section('estilos')
    <link rel='stylesheet' href='/css/estilosEliminarServicio.css'>
    <link rel='stylesheet' href='/css/estilosVerServicio.css'>
@stop

@section('javascripts')
    <script src="/js/funcionesVerServicio.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAEttQKWZVwwmLu9Rn9IV37PTCxFIdMNKs&libraries=geometry&callback=initMap' async defer></script>
@stop

@section('body')

    <!-- Creo descripcion -->
    <div id="panelDescripcion">

        <span id="textoInformacion">Servicio actual: "{{ $servicio[0] -> nombre }}"</span>

    </div>

    <div id="panelEliminarServicio">

        <form method="POST" action="/eliminar" name="deleteForm">

            {{ csrf_field() }}

            <div class="form-row">

                <div class="form-group col-md-7">
                    <label class="etiqueta" for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" readonly name="nombre" value="{{ $servicio[0] -> nombre }}">
                </div>

                <div class="form-group col-md-5">
                    <label class="etiqueta" for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" readonly name="tipo" value="{{ $servicio[0] -> tipo }}">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label class="etiqueta" for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" readonly name="telefono" value="{{ $servicio[0] -> telefono }}">
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="horario">Horario</label>
                    <input type="text" class="form-control" id="horario" readonly name="horario" value="{{ $servicio[0] -> horario }}">
                </div>

                <div class="form-group col-md-5">
                    <label class="etiqueta" for="paginaweb">Sitio Web</label>
                    <input type="text" class="form-control" id="pagina" readonly name="sitioweb" value="{{ $servicio[0] -> sitioweb }}">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" readonly name="direccion" value="{{ $servicio[0] -> direccion }}">
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="latitud">Latitud</label>
                    <input type="text" class="form-control" id="latitud" readonly name="latitud" value="{{ $servicio[0] -> latitud }}">
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="longitud">Longitud</label>
                    <input type="text" class="form-control" id="longitud" readonly name="longitud" value="{{ $servicio[0] -> longitud }}">
                </div>

            </div>

            <div id="panelMapa">
              <div id="map"></div>
            </div>

            <div id="panelBotonera">
                <a href="/ver"><button class="boton" type="button">Volver</button></a>
            </div>

        </form>

    </div>

@stop
