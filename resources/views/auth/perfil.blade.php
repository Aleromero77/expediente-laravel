{{-- <x-layouts.app title="Consulta Prueba">

    <form action="{{ route('perfil') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar usuarios" value="{{$search}}">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
    

    <table id="#users-table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Genero</th>
                <th>Domicilio</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->apellido_Paterno }}</td>
                <td>{{ $user->apellido_Materno }}</td>
                <td>{{ $user->genero }}</td>
                <td>{{ $user->domicilio }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->correo}}</td>
                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</td>
            </tr>
        @endforeach
            
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>

</x-layouts.app> --}}


CONFIGURAR VISTA