@section('css')
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css') }}">
@endsection

<x-layouts.app title="Listado de Roles">
    <main>
        @if (session('success'))
            <x-sweetAlert2.success :title="'Se elimino el rol correctamente.'" />
        @endif
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tablas de Roles</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Incio</a></li>
                <li class="breadcrumb-item active">Lista de Roles</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Tabla de todos los roles registrados en la base de datos Yoloma, cada rol cuenta con permisos para
                    acceder a ciertas rutas.

                </div>
            </div>
            <div class="card mb-4">
                @isSistemas
                    <div class="card-header">
                        <a class="btn btn-success" href="{{ route('roles.create') }}">Nuevo Rol</a>
                    </div>
                @endisSistemas

                <div class="card-body">
                    <table id="roles-table" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Registrado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </main>

    @section('js')
        <script src="{{ asset('https://code.jquery.com/jquery-3.7.0.js') }}"></script>
        <script src="{{ asset('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                var table = new DataTable('#roles-table', {
                    responsive: true,
                    autoWidth: false,
                    ajax: '{{ route('dataRolesTable') }}',
                    columns: [{
                            data: 'id'
                        },
                        {
                            data: 'name'
                        },
                        {
                            "data": "created_at",
                            "render": function(data) {
                                // Formatear la fecha como "dd/mm/yyyy"
                                var date = new Date(data);
                                var day = date.getDate();
                                var month = date.getMonth() + 1;
                                var year = date.getFullYear();
                                return day + '/' + month + '/' + year;
                            }
                        },
                        {
                            data: 'btn'
                        }
                    ],
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No hay registros",
                        "info": "Pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "search": "Buscar:",
                        "infoFiltered": "(filtrados de _MAX_ registros)",
                        "loadingRecords": "Cargando...",
                        "infoEmpty": "Mostrando 0 de 0 registros",
                    }
                });

            });
        </script>
    @endsection
</x-layouts.app>
