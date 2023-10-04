<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="img-center" href="{{Route('inicio')}}">

        <img src="{{asset('../img/logo_yoloma.png')}}" alt=""></a>

    
    
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i></button>
    @auth
    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span>
                      
                        {{Auth::user()->nombre}}
                        
                   </span>
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('perfil.edit')}}">PERFIL</a></li>
                    <form action="{{route('salir')}}" method="post">
                        @csrf
                        <li><a class="dropdown-item" onclick="this.closest('form').submit()">CERRAR SESION</a></li>
                    </form>
                </ul>
            </li>
        </ul>

    </div>
    @endauth
</nav>
