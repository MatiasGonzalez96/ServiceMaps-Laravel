@extends('layout')

@section('pageTitle', 'Editar Servicio')

@section('estilos')
<link rel='stylesheet' href='/css/estilosAgregarServicio.css'>
@stop

@section('javascripts')
    <script src="/js/funcionesMapa.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAEttQKWZVwwmLu9Rn9IV37PTCxFIdMNKs&libraries=geometry&callback=initMap' async defer></script>
@stop

@section('body')

    <!-- Creo descripcion -->
    <div id="panelDescripcion">

        <span id="textoInformacion">Modifique los datos de "{{ $servicio[0] -> nombre }}"</span>

    </div>

    <div id="panelAgregarServicio">

        <form method="POST" action="/editar">

            {{ csrf_field() }}

            <div class="form-row">

                <div class="form-group col-md-7">
                    <label class="etiqueta" for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Servicio" name="nombre" value="{{ $servicio[0] -> nombre }}" required>
                </div>

                <div class="form-group col-md-5">
                    <label class="etiqueta" for="tipo">Tipo</label>
                    <select class="form-control" id="tipo" name="tipo">

                        @if ($servicio[0] -> tipo == "Gomería")

                            <option selected value="Gomería">Gomería</option>
                            <option value="Estación de Servicio">Estación de Servicio</option>
                            <option value="Taller Mecánico">Taller Mecánico</option>

                        @elseif ($servicio[0] -> tipo == "Estación de Servicio")

                            <option value="Gomería">Gomería</option>
                            <option selected value="Estación de Servicio">Estación de Servicio</option>
                            <option value="Taller Mecánico">Taller Mecánico</option>

                        @else

                            <option value="Gomería">Gomería</option>
                            <option value="Estación de Servicio">Estación de Servicio</option>
                            <option selected value="Taller Mecánico">Taller Mecánico</option>

                        @endif

                    </select>
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label class="etiqueta" for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="(0291) 455-5555" name="telefono" value="{{ $servicio[0] -> telefono }}" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="horario">Horario</label>
                    <select class="form-control" id="horario" name="horario">

                        @if ($servicio[0] -> horario == "De 08:00hs a 20:00hs")

                            <option selected value="De 08:00hs a 20:00hs">De 08:00hs a 20:00hs</option>
                            <option value="Abierto las 24hs">Abierto las 24hs</option>

                        @else

                            <option value="De 08:00hs a 20:00hs">De 08:00hs a 20:00hs</option>
                            <option selected value="Abierto las 24hs">Abierto las 24hs</option>

                        @endif

                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label class="etiqueta" for="paginaweb">Sitio Web</label>
                    <input type="text" class="form-control" id="pagina" placeholder="www.servicio.com" name="sitioweb" value="{{ $servicio[0] -> sitioweb }}" required>
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Prueba 123" readonly name="direccion" value="{{ $servicio[0] -> direccion }}" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="latitud">Latitud</label>
                    <input type="text" class="form-control" id="latitud" placeholder="Latitud" readonly name="latitud" value="{{ $servicio[0] -> latitud }}" required>
                </div>

                <div class="form-group col-md-4">
                    <label class="etiqueta" for="longitud">Longitud</label>
                    <input type="text" class="form-control" id="longitud" placeholder="Longitud" readonly name="longitud" value="{{ $servicio[0] -> longitud }}" required>
                </div>

            </div>

            <div id="panelDescripcion">
                <span id="textoMapa">Click en el mapa para modificar la ubicación</span>
            </div>

            <div id="panelMapa">
              <div id="map"></div>
            </div>

            <div id="panelBotonera">
                <button class="botonAgregar" type="submit">Modificar Servicio</button>
                <a href="/editar"><button class="botonAgregar" type="button">Volver</button></a>
            </div>

            <input type="hidden" id="idServicio" name="idServicio" value="{{ $servicio[0] -> _id }}">

            @include ('error')

        </form>

    </div>

@stop
