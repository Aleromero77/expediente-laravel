<x-layouts.app title="Crear Rol">
    <main>
        @if (session('danger'))
            <x-sweetAlert2.danger :title="'El rol ya existe'" />
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
                            <h3 class="text-center font-weight-light ">Crear Rol</h3>
                        </div>
                        <div class="card-body">

                            <x-form.form method="post" action="{{route('roles.store')}}">
                                <x-form.field-xl  name="name">
                                    Nombre del Rol
                                </x-form.field-xl>
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                <br>

                                <div class="card-header">
                                    <h3 class="text-center font-weight-light ">Lista de permisos</h3>
                                </div>

                                <div class="card-body">
                                    @foreach ($permissions as $permission)
                                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                            class="mr-1" id="permission_{{ $permission->id }}">
                                        <label
                                            for="permission_{{ $permission->id }}">{{ $permission->description }}</label><br>
                                    @endforeach

                                </div>

                                <div class="row mb-3">
                                    <button class="btn btn-primary" type="submit">Crear</button>
                                </div>
                            </x-form.form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-layouts.app>
