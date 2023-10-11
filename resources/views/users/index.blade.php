@section('css')
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css') }}">
@endsection

<x-layouts.app title="Consultas Usuarios">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tablas de Usuarios</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Incio</a></li>
                <li class="breadcrumb-item active">Tablas</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Tabla de todos los usuarios registrados en la base de datos Yoloma,
                    si no encuentra un usuario, significa que no lo registro correctamente.

                </div>
            </div>
            <div class="card mb-4">
                @isSistemas
                    <div class="card-header">
                        <a class="btn btn-success" href="{{ route('users.create') }}">Registrar Usuario</a>
                    </div>
                @endisSistemas

                <div class="card-body">
                    <table id="users-table" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre(s)</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
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
            var isAdminOrRecep = @json(auth()->user()->hasRole('sistemas') ||
                    auth()->user()->hasRole('coordinacion'));

            $(document).ready(function() {
                var table = new DataTable('#users-table', {
                    responsive: true,
                    autoWidth: false,
                    ajax: '{{ route('dataTables') }}',
                    columns: [{
                            data: 'nombre'
                        },
                        {
                            data: 'apellido_Paterno'
                        },
                        {
                            data: 'apellido_Materno'
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

                if (!isAdminOrRecep) {
                    table.column(3).visible(false); // Oculta la columna 'telefono'
                    table.column(4).visible(false);
                    table.column(5).visible(false);
                }
            });
        </script>
    @endsection
</x-layouts.app>
