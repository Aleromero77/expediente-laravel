<x-layouts.app title="Perfil">
    <main>
        @if (session('info'))
            <x-sweetAlert2.info :title="'Se actualizo con extio'"/>
        @endif
        @if ($errors->Any())

            <div class="alert alert-danger m3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Perfil de {{ $user->nombre }}</h3>
                        </div>
                        <div class="card-body">

                            <x-form.form method="put" action="{{ route('perfil.update',Auth::user()->id) }}">
                                <div class="row mb-3">
                                    <x-form.field-lf name="nombre" value="{{ $user->nombre }}" readonly required>
                                        Nombre
                                    </x-form.field-lf>

                                    <x-form.field-lf name="apellido_Paterno" value=" {{ $user->apellido_Paterno }}" readonly
                                        class="mb-4" required>
                                        Apellido Paterno
                                    </x-form.field-lf>

                                    <x-form.field-lf name="apellido_Materno" value="{{ $user->apellido_Materno }} " readonly
                                        required>
                                        Apellido Materno
                                    </x-form.field-lf>

                                    <x-form.field-lf name="genero" value="{{ $user->genero }}" required>
                                        Genero
                                    </x-form.field-lf>

                                </div>
                                <x-form.field-xl name="domicilio" value="{{ $user->domicilio }}" required>
                                    Domicilio
                                </x-form.field-xl>
                                <div class="row mb-3">
                                    <x-form.field-lf id="telefono" name="telefono" type="phone"  maxlength="10" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                        value="{{ $user->telefono}}" required>
                                        Telefono    <small>10 digitos</small>
                                    </x-form.field-lf>

                                    <x-form.field-lf name="correo" value="{{ $user->correo }}" type="email" required >
                                        Correo
                                    </x-form.field-lf>
                                </div>
                                <x-form.field-xl value="{{ $rol}}" readonly>
                                    Rol
                                </x-form.field-xl>

                                <x-form.field-xl name="contrasena" type="password">
                                    Contraseña
                                </x-form.field-xl>
                               


                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Actualizar Perfil</button>
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
