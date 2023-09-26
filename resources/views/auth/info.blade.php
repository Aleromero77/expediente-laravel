
<x-layouts.app title="Perfil">
    <main>
        @if ($errors->Any())

            <div class="alert alert-danger m3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('info'))
            <div class="alert alert-info" id="flash-message">
                {{ session('info') }}
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    setTimeout(function() {
                        var flashMessage = document.getElementById('flash-message');
                        flashMessage.style.display = 'none';
                    }, 3000);
                });
            </script>
        @endif
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Perfil de {{ $user->nombre }}</h3>
                        </div>
                        <div class="card-body">


                            <x-form.form method="get">
                                <div class="row mb-3">
                                    <x-form.field-lf name="nombre" value="{{ $user->nombre }}">
                                        Nombre
                                    </x-form.field-lf>

                                    <x-form.field-lf name="apellido_Paterno" value=" {{ $user->apellido_Paterno }}"
                                        class="mb-4">
                                        Apellido Paterno
                                    </x-form.field-lf>

                                    <x-form.field-lf name="apellido_Materno" value="{{ $user->apellido_Materno }}">
                                        Apellido Materno
                                    </x-form.field-lf>

                                    <x-form.field-lf name="genero" value="{{ $user->genero }}">
                                        Genero
                                    </x-form.field-lf>

                                </div>
                                <x-form.field-xl name="domicilio" value="{{ $user->domicilio }}">
                                    Domicilio
                                </x-form.field-xl>
                                <div class="row mb-3">
                                    <x-form.field-lf name="telefono" value="{{ $user->telefono }}">
                                        Telefono
                                    </x-form.field-lf>

                                    <x-form.field-lf name="correo" value="{{ $user->correo }}" type="email">
                                        Correo
                                    </x-form.field-lf>
                                </div>
                            </x-form.form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>

    @section('js')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
                title: 'Quieres dar de baja este usuario?',
                text: "Para revertir este cambio tendras que asistir al Dpt. Sistemas!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Dar de baja!  ',
                cancelButtonText: 'No, cancelar!'   ,
                reverseButtons: false
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Eliminado!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        </script>
    @endsection
</x-layouts.app>
