<x-layouts.app title="Registro">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Registro</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input 
                                            class="form-control"
                                            placeholder="Enter your name" 
                                            name="nombre" 
                                            id="nombre" 
                                            type="text"
                                            autofocus="autofocus"
                                            value="{{old('nombre')}}" />
                                            <label for="nombre">Nombre(s)</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input 
                                            class="form-control" 
                                            id="apellido_Paterno" 
                                            type="text"
                                            placeholder="Enter your last name"
                                            name="apellido_Paterno"
                                            value="{{old('apellido_Paterno')}}" />
                                            <label for="apellido_Paterno">Apellido Paterno</label>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-floating">
                                            <input 
                                            class="form-control" 
                                            id="apellido_Materno" 
                                            type="text"
                                            placeholder="Enter your last name"
                                            name="apellido_Materno"
                                            value="{{old('apellido_Materno')}}" />
                                            <label for="apellido_Materno">Apellido Materno</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-floating">
                                            <input 
                                            class="form-control" 
                                            id="genero" 
                                            type="text"
                                            placeholder="Enter your gender"
                                            name="genero"
                                            value="{{old('genero')}}" />
                                            <label for="genero">Genero</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-floating">
                                            <input 
                                            class="form-control" 
                                            id="domicilio" 
                                            type="text"
                                            placeholder="Enter your address"
                                            name="domicilio"
                                            value="{{old('domicilio')}}" />
                                            <label for="domicilio">Domicilio</label>
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-floating">
                                            <input 
                                            class="form-control" 
                                            id="telefono" 
                                            type="text"
                                            placeholder="Enter your phone"
                                            name="telefono"
                                            value="{{old('telefono')}}" />
                                            <label for="telefono">Telefono</label>
                                        </div>
                                    </div>
                                    

                                </div>
                                <div class="form-floating mb-3">
                                    <input 
                                    class="form-control" 
                                    id="correo" 
                                    type="email"
                                    placeholder="name@example.com"
                                    name="correo"
                                    value="{{old('correo')}}" />
                                    <label for="correo">Correo</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input 
                                    class="form-control" 
                                    id="contrasena" 
                                    type="password"
                                    name="contrasena"
                                     />
                                    <label for="contrasena">Contraseña</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-yoloma btn-block" type="submit">Crear Usuario</button>
                                    </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</x-layouts.app>
