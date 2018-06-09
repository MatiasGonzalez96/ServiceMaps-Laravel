<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=860">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('pageTitle')</title>

        <!-- Estilos -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel='stylesheet' href='/css/estiloClasico.css'>
        <link rel='stylesheet' href='/css/estilosLogin.css'>
        <link rel='stylesheet' href='/css/estilosBarra.css'>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>

    <body>

        @section('content')
        @show

        <!-- Creo Footer -->
        <footer>
          <div id="panelFooter">
              Página web creada por García Matias y González Matias. © 2018 Service Maps.
          </div>
        </footer>

    </body>

</html>
