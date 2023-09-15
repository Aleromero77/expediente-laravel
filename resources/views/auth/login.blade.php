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
                                        <form action="{{route('login')}}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" 
                                                id="correo" 
                                                type="email" 
                                                name="correo"
                                                value="{{old('correo')}}"
                                                placeholder="Ingrese su correo" />
                                                <label for="correo">Correo</label>
                                                {{$errors->first('correo')}} 

                                            <div class="form-floating mb-3">   
                                                <input class="form-control" 
                                                id="contrasena" 
                                                type="password" 
                                                name="contrasena"
                                                placeholder="Ingrese Contraseña" />

                                                 
                                                <label for="contrasena">Contraseña</label>
                                                {{$errors->first('contrasena')}} 
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" 
                                                name="remember" 
                                                id="remember" 
                                                type="checkbox" />
                                                <label class="form-check-label" for="remember">Recordar cuenta</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>

                                               @error('message')
                                                   
                                               @enderror
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>