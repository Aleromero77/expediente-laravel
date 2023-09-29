<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/jpg" href="{{ asset('yoloma.ico') }}">
        <title>Yoloma | Iniciar Sesión</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-login">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <a class="img-center" href="{{route('login')}}"><img    src="{{asset('../img/logo_yoloma.png')}}" alt=""></a>
                                    </div>
                                    
                                    <div class="card-body">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/jpg" href="{{ asset('yoloma.ico') }}">
    <title>YOLOMA - Inicio de sesion</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-login">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>

                @if (session('info'))
                    <x-sweetAlert2.info :title="'Usuario o contraseña Incorrecta'"/>
                @endif
                @if (session('fail'))
                   <x-sweetAlert2.danger :title="'El usuario no existe'" />
                @endif
               
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <a class="img-center" href="{{ route('login') }}"><img
                                            src="{{ asset('../img/logo_yoloma.png') }}" alt=""></a>
                                </div>

                                <div class="card-body">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/jpg" href="{{ asset('yoloma.ico') }}">
    <title>YOLOMA - Inicio de sesion</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-login">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>

                @if (session('info'))
                    <x-sweetAlert2.info :title="'Usuario o contraseña Incorrecta'"/>
                @endif
                @if (session('fail'))
                   <x-sweetAlert2.danger :title="'El usuario no existe'" />
                @endif
               
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <a class="img-center" href="{{ route('login') }}"><img
                                            src="{{ asset('../img/logo_yoloma.png') }}" alt=""></a>
                                </div>

                                <div class="card-body">

                                    <x-form.form action="{{ route('login') }}" method="post">
                                        <x-form.field-xl id="correo" type="email" name="correo"
                                            value="{{ old('correo') }}">
                                            Correo
                                        </x-form.field-xl>
                                        {{ $errors->first('correo') }}
                                        <x-form.field-xl id="contrena" type="password" name="contrasena">
                                            Contraseña
                                        </x-form.field-xl>
                                        {{ $errors->first('contrasena') }}

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" name="remember" id="remember"
                                                type="checkbox" />
                                            <label class="form-check-label" for="remember">Recordar cuenta</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>


                                        </div>
                                    </x-form.form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
