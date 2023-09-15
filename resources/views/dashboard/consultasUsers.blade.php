<x-layouts.app title="Usuarios">

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tablas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Tablas</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabla de Usuarios
                    <nav class=" navbar-light bg-light my-2">
                        <div class="container-fluid">
                            <form class="d-flex" role="search" method="GET" action="{{ route('consultasUsers') }}">
                                <input class="form-control me-2" name="search"  value="{{$search}}" type="search" placeholder="Buscar"
                                    aria-label="Buscar">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </form>
                        </div>
                    </nav>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Domicilio</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                        <tr >
                            <td >{{ $user->id }}</td>
                            <td>{{ $user->nombre }}</td>
                            <td>{{ $user->apellido_Paterno }}</td>
                            <td>{{ $user->apellido_Materno }}</td>
                            <td>{{ $user->genero }}</td>
                            <td>{{ $user->domicilio }}</td>
                            <td>{{ $user->telefono }}</td>
                            <td>{{ $user->correo }}</td>
                            <td>{{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $users->links() }}
                </div>

            </div>
        </div>
    </main>

</x-layouts.app>
