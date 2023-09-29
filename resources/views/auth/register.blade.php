<x-layouts.app title="Registro">
    <main class="mb-4">
        @if (session('info'))
            <x-sweetAlert2.success :title="'Usuario Registrado'" />
        @endif
        @if ($errors->Any())
            <x-sweetAlert2.danger :title="'Usuario NO Registrado'"/>
            <div class="alert alert-danger m3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container mb-4">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Registro</h3>
                        </div>
                        <div class="card-body">
                            <x-form.form method="post" class="form-register" action="{{ route('users.store') }}">

                                <div class="row mb-3">
                                    <x-form.field-lf id="nombre" name="nombre" value="{{ old('nombre') }}"
                                        autofocus="autofocus">
                                        Nombre
                                    </x-form.field-lf>

                                    <x-form.field-lf id="apellido_Paterno" value="{{ old('apellido_Paterno') }}"
                                        name="apellido_Paterno" class="mb-4">
                                        Apellido Paterno
                                    </x-form.field-lf>

                                    <x-form.field-lf id="apellido_Materno" name="apellido_Materno"
                                        value="{{ old('apellido_Materno') }}">
                                        Apellido Materno
                                    </x-form.field-lf>

                                    <x-form.field-lf id="genero" name="genero" value="{{ old('genero') }}"
                                        class="mb-4">
                                        Genero
                                    </x-form.field-lf>

                                    <x-form.field-lf id="domicilio" name="domicilio" value="{{ old('domicilio') }}">
                                        Domicilio
                                    </x-form.field-lf>

                                    <x-form.field-lf id="telefono" name="telefono" value="{{ old('telefono') }}">
                                        Telefono
                                    </x-form.field-lf>
                                </div>

                                <x-form.field-xl id="correo" name="correo" type="email"
                                    value="{{ old('correo') }}">
                                    Correo
                                </x-form.field-xl>

                                <x-form.field-xl id="contrasna" name="contrasena" type="password">
                                    Contraseña
                                </x-form.field-xl>

                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Crear Usuario</button>
                                    </div>
                                </div>
                            </x-form.form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>


</x-layouts.app>
