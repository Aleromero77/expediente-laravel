@section('css')
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css') }}">
    <script src="{{ asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js') }}" crossorigin="anonymous"></script>
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
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Usuarios
                </div>

                <div class="card-body">
                    <table id="users-table" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre(s)</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Telefono</th>
                                <th>Correo</th>
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
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script>
            new DataTable('#users-table', {
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
                        data: 'telefono'
                    },
                    {
                        data: 'correo'
                    },
                    // {
                    //     "data": "created_at",
                    //     "render": function (data) {
                    //         // Formatear la fecha como "dd/mm/yyyy"
                    //         var date = new Date(data);
                    //         var day = date.getDate();
                    //         var month = date.getMonth() + 1;
                    //         var year = date.getFullYear();
                    //         return day + '/' + month + '/' + year;
                    //     }
                    // },
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
        </script>
    @endsection
</x-layouts.app>
