<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=860">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('pageTitle')</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel='stylesheet' href='/css/estiloClasico.css'>
        <link rel='stylesheet' href='/css/estilosLogin.css'>
        <link rel='stylesheet' href='/css/estilosBarra.css'>

        <!-- Scripts -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

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
