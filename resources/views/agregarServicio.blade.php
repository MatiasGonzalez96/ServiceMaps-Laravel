@extends('layout')

@section('pageTitle', 'Agregar Servicio')

@section('estilos')
    <link rel='stylesheet' href='css/estilosAgregarServicio.css'>
@stop

@section('javascripts')
    <script src="/js/funcionesMapa.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAEttQKWZVwwmLu9Rn9IV37PTCxFIdMNKs&libraries=geometry&callback=initMap' async defer></script>
@stop

@section('body')

    <!-- Creo descripcion -->
    <div id="panelDescripcion">

        <span id="textoInformacion">Ingrese los datos del nuevo servicio</span>

    </div>

    <div id="panelAgregarServicio">

        <form method="POST" action="agregar">

            {{ csrf_field() }}

            <div class="form-row">

                <div class="form-group col-md-7">
                    <label class="etiqueta" for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Servicio" name="nombre" value="{{ old('nombre') }}"required>
                </div>

                <div class="form-group col-md-5">
                    <label class="etiqueta" for="tipo">Tipo</label>
                    <select class="form-control" id="tipo" name="tipo">

                        <option selected value="Gomería">Gomería</option>
                        <option value="Estación de Servicio">Estación de Servicio</option>
                        <option value="Taller Mecánico">Taller Mecánico</option>

                    </select>
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label class="etiqueta" for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="(0291) 455-5555" name="telefono" value="{{ old('telefono') }}" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="horario">Horario</label>
                    <select class="form-control" id="horario" name="horario">

                        <option value="De 08:00hs a 20:00hs">De 08:00hs a 20:00hs</option>
                        <option value="Abierto las 24hs">Abierto las 24hs</option>

                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label class="etiqueta" for="sitioweb">Sitio Web</label>
                    <input type="text" class="form-control" id="pagina" placeholder="www.servicio.com" name="sitioweb" value="{{ old('sitioweb') }}" required>
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Prueba 123" readonly name="direccion" value="{{ old('direccion') }}" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="latitud">Latitud</label>
                    <input type="text" class="form-control" id="latitud" placeholder="Latitud" readonly name="latitud" value="{{ old('latitud') }}" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="longitud">Longitud</label>
                    <input type="text" class="form-control" id="longitud" placeholder="Longitud" readonly name="longitud" value="{{ old('longitud') }}" required>
                </div>

            </div>

            <div id="panelDescripcion">
                <span id="textoMapa">Click en el mapa para elegir la ubicación</span>
            </div>

            <div id="panelMapa">
              <div id="map"></div>
            </div>

            <div id="panelBotonera">
                <button class="botonAgregar" type="submit">Agregar Servicio</button>
                <a href="/"><button class="botonAgregar" type="button">Volver</button></a>
            </div>

            @include ('error')

        </form>

    </div>

@stop
