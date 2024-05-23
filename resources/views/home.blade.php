@extends('layouts.plantilla')

@section('title', 'home')

@section('head')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection


@section('content')
<div class="login-container">
    <h2>Ingresa</h2>
    {{-- {{ route('login') }} --}}
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required autofocus>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn">Ingresar</button>
    </form>
</div>
@endsection