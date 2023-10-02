<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" type="image/jpg" href="{{ asset('yoloma.ico') }}">
    <title> YOLOMA | Expediente Clinico </title>
</head>

<body>
    @guest
    <a href="{{ route('login') }}" class="button-link">¡Iniciar Sesión!</a>
    @endguest
    @auth
    <a href="{{ route('inicio') }}" class="button-link">Menu</a>
    @endauth
</body>

</html>
