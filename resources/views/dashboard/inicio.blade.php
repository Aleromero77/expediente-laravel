<x-layouts.app title="Inicio">
    <main>

        @if (session('success'))
                   <x-sweetAlert2.success :title="'Inicio Correcto'" />
                @endif

        <div class="container-fluid px-4">
            <h1 class="mt-4">Bienvenido</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Inicio</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Bienvenido al sistema control de usuarios de Yoloma</h5>
                    <ul>
                        <li><strong>Asegurate de cerrar sesion al finalizar tus actividades</strong></li>
                        <li><strong>Todas tus actividades son monitoreadas por el Dpt. de SISTEMAS</strong></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <i class="fa-solid fa-users fa-2xl"></i>
                             <strong>{{$totalUsuarios}}</strong>
                             Usuarios
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('users.index')}}">Ver</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">
                            <i class="fa-solid fa-bell-concierge fa-2xl"></i>
                            0 Recepcionistas

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Ver</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <i class="fa-solid fa-chalkboard-user fa-2xl"></i>
                            0 Terapeutas

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Ver</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            <i class="fa-solid fa-user fa-2xl"></i>
                            0 Pacientes

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Ver</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-layouts.app>
