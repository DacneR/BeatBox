@extends('layouts.plantilla')

@section('title', 'Registrate!')

@section('head')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection


@section('content')
<div class="login-container">
    <h1>Registro</h1>

    {{-- Formulario de registro --}}
    <form method="POST" action="{{ url('registro') }}">
        @csrf {{-- Directiva para protección contra ataques CSRF --}}

        {{-- CC --}}
        <div class="form-group">
            <label for="cc">CC</label>
            <input id="cc" type="text" name="cc" value="{{ old('cc') }}" required autocomplete="cc" autofocus>
            @error('cc')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        
        {{-- Nombre --}}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        {{-- Correo Electrónico --}}
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        {{-- Contraseña --}}
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        {{-- Confirmación de Contraseña --}}
        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        {{-- Botón de Registro --}}
        <button type="submit" class="btn">Registrarse</button>
        <br>
        <br>
    </form>
    <a href="{{ url('/') }}"><button type="submit" class="btn">Home</button></a>
</div>
@endsection