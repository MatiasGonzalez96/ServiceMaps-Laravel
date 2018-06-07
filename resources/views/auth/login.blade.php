@extends('layouts.app')

@section('pageTitle', 'Iniciar Sesión')

@section('content')

    <div id="panelLogin">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">

                <label for="email" class="etiqueta">Email</label>
                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            </div>

            <div class="form-group">

                <label for="password" class="etiqueta">Contraseña</label>
                <input id="password" type="password" class="form-control" name="password" required>

            </div>

            <div id="panelBotonera">

                <button type="submit" class="boton">Iniciar Sesión</button>

            </div>

            @include ('error')

        </form>

    </div>

@stop
