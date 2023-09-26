    <div class="nav">
        <div class="sb-sidenav-menu-heading">MENU</div>
        <a class="nav-link" href="{{route('inicio')}}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Inicio
        </a>
        <div class="sb-sidenav-menu-heading">PERSONAL</div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
            aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Usuarios
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('users.create')}}">Registro</a>
                <a class="nav-link" href="{{route('users.index')}}">Consultas</a>
            </nav>
        </div>
       
    </div>
