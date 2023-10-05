<x-layouts.app title="Rol">
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
                            <h3 class="text-center font-weight-light my-4">Actualizar rol para {{ $user->nombre }}</h3>
                        </div>
                        <div class="card-body">

                            <x-form.form method="post" action="{{ route('rol.update', $user->id) }}">
                                @method('PUT')
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
                                </select>
                                <br>
                                <button class="btn btn-primary" type="submit">Actualizar</button>

                            </x-form.form>


                          
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>
</x-layouts.app>
