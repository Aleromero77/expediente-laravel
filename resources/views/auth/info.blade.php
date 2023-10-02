<x-layouts.app title="Perfil">
    <main>
        @if (session('error'))
            <x-sweetAlert2.danger :title="'No tienes permisos'" />
        @endif
        @if (session('success'))
            <x-sweetAlert2.success :title="'Rol actualizado con éxito.'" />
        @endif
        @if (session('info'))
            <x-sweetAlert2.info :title="'El usuario ya tiene el rol.'" />
        @endif
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Rol para {{ $user->nombre }}</h3>
                        </div>
                        <div class="card-body">

                            <x-form.form method="post" action="{{ route('roles', $user) }}">
                                <div class="row mb-3">

                                    <x-form.field-lf name="nombre" value="{{ $user->nombre }}" readonly>
                                        Nombre
                                    </x-form.field-lf>
                                    <x-form.field-lf name="nombre"
                                        value="{{ $user->apellido_Paterno }} {{ $user->apellido_Materno }}" readonly>
                                        Apellidos
                                    </x-form.field-lf>
                                </div>
                                <select name="roles" id="roles" class="form-select">
                                    <option>{{ $rol }}</option>
                                    @foreach ($roles as $rolist)
                                        @if ($rolist->name != $rol)
                                            <option value="{{ $rolist->name }}">{{ $rolist->name }}</option>
                                        @endif
                                    @endforeach
                                    <!-- Agrega aquí los campos del formulario -->
                                </select>
                                <br>
                                <button class="btn btn-primary" type="submit">Actualizar</button>

                            </x-form.form>


                            {{-- <x-form.form method="get">
                                <div class="row mb-3">
                                    <x-form.field-lf name="nombre" value="{{ $user->nombre }}" readonly>
                                        Nombre
                                    </x-form.field-lf>

                                    <x-form.field-lf name="apellido_Paterno" value=" {{ $user->apellido_Paterno }}" readonly
                                        class="mb-4">
                                        Apellido Paterno
                                    </x-form.field-lf>

                                    <x-form.field-lf name="apellido_Materno" value="{{ $user->apellido_Materno }}" readonly>
                                        Apellido Materno
                                    </x-form.field-lf>

                                    <x-form.field-lf name="genero" value="{{ $user->genero }}" readonly>
                                        Genero
                                    </x-form.field-lf>

                                </div>
                                <x-form.field-xl name="domicilio" value="{{ $user->domicilio }}" readonly>
                                    Domicilio
                                </x-form.field-xl>
                                <div class="row mb-3">
                                    <x-form.field-lf name="telefono" value="{{ $user->telefono }}" readonly>
                                        Telefono
                                    </x-form.field-lf>

                                    <x-form.field-lf name="correo" value="{{ $user->correo }}" type="email" readonly>
                                        Correo
                                    </x-form.field-lf>
                                </div>
                            </x-form.form> --}}
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>
</x-layouts.app>
