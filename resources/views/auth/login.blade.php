@extends('layouts.app')

@section('pageTitle', 'Iniciar Sesión')

@section('content')

    <div id="panelLogin">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">

                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

            </div>

            <div class="form-group">

                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

            </div>

            <div id="panelBotonera">

                <button type="submit" class="boton">Iniciar Sesión</button>

            </div>

            @include ('error')

        </form>

    </div>

@stop
