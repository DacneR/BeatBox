@extends('layouts.plantilla')

@section('title', 'página principal')

@section('head')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection


@section('content')
    @if(session()->has('user'))
        <div class="navbar">
            <div>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </div>
            <div>
                <a href="#">Perfil: {{ session('user')->name }}</a>
                <a href="{{ route('logout') }}">Cerrar sesión</a>
            </div>
        </div>
        <br>
        <br>
    @endif

    

    <h1>Bienvenido, {{ session('user')->name }}</h1>


@endsection