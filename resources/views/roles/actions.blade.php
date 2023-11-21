<div class="button-group" role="group" aria-label="Acciones">
    <br>
    <a class="btn btn-primary custom-curved-button" href="{{ route('roles.edit', $id) }}">Editar</a>
    
    <form action="{{ route('roles.destroy', $id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-button">Eliminar</button>
    </form>
</div>

