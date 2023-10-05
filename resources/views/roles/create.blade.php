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
                            <h3 class="text-center font-weight-light my-4">Crear nuevo rol</h3>
                        </div>
                        <div class="card-body">

                            <x-form.form method="post" action="#">
                                @method('PUT')
                                <div class="row mb-3">

                                    <x-form.field-xl name="rol" >
                                        Nombre del Rol
                                    </x-form.field-xl>
                                    <br>
                                   
                                <button class="btn btn-primary" type="submit">Crear</button>

                            </x-form.form>


                          
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>
</x-layouts.app>
