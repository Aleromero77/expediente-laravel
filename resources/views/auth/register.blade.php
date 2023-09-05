<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Enter your first name" />
                                            <label for="nombre">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="apellido_Paterno" id="apellido_Paterno" type="text" placeholder="Enter your last name" />
                                            <label for="apellido_Paterno">Apellido Paterno</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="apellido_Materno" id="apellido_Materno" type="text" placeholder="Enter your last name" />
                                            <label for="apellido_Materno">Apellido Materno</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="correo" name="correo" type="email" placeholder="name@example.com" />
                                    <label for="correo">Correo</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="contrasena" name="contrasena" type="password" placeholder="Create a password" />
                                            <label for="contrasena">Contraseña</label>
                                        </div>
                                    </div>
                                </div>
    
                                
    
                           
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Crear Cuenta</button></div>
                            </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>