<!doctype html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=860">

        <title>@yield('pageTitle')</title>

        <!-- Cargo links externos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel='stylesheet' href='/css/estiloClasico.css'>
        <link rel='stylesheet' href='/css/estilosBarra.css'>
        @section('estilos')
        @show

        <!-- Cargo scripts externos -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @section('javascripts')
        @show

    </head>
    <body>

        <!-- Creo barra de busquedas -->
        <div class="topnav">

            <!-- Centered link -->
            <div class="topnav-centered">
            </div>

            <!-- Left-aligned links (default) -->
            <a id="linkInicio" href="/" class="active">Inicio</a>

            <!-- Right-aligned links -->
            <div class="topnav-right">

                <!-- Authentication Links -->
                @guest

                    <!-- Boton para iniciar sesion -->

                @else

                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>

                @endguest

            </div>

        </div>

        @section('body')
        @show

          <!-- Creo Footer -->
          <footer>
            <div id="panelFooter">
                Página web creada por García Matias y González Matias. © 2018 Service Maps.
            </div>
          </footer>


    </body>
</html>
