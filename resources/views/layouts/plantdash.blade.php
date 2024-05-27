<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('head')
    <!---Favicon---->
    <!---estilos---->
</head>
<body>
    <!---header---->
    <!---nav---->

    @section('content')
    <div class="dashboard-container">
        <!-- Barra de perfil visible solo después de iniciar sesión -->
        @auth
            <div class="profile-bar">
                <span>{{ Auth::user()->name }}</span>
                <a href="{{ route('perfil') }}">Perfil</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout">Cerrar sesión</button>
                </form>
            </div>
        @endauth

        <!-- Contenido del dashboard -->
        <h1>Bienvenido, {{ Auth::user()->name }}</h1>
        <p>Esta es tu página de inicio después de iniciar sesión.</p>
    </div>
    @endsection

    <!---Footer---->
    <!---scripts---->
</body>
</html>