    <div class="nav">
        <div class="sb-sidenav-menu-heading">MENU</div>
        <a class="nav-link" href="{{route('inicio')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Inicio
        </a>
        <div class="sb-sidenav-menu-heading">PERSONAL</div>
        @isAdminOrRecep
        <a class="nav-link" href="{{route('users.index')}}">
            <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
             Usuarios
        </a>
        @endisAdminOrRecep
    </div>
