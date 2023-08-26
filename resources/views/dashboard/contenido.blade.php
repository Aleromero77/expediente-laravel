@extends('dashboard.menu')
@section('contenido')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">PANEL</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="row">
                <!--PANELES -->
            </div>
            <div class="row">
                <!--  CHAR1 -->
            </div>
            <div class="col-xl-6">
                <!-- BAR CHAR -->
            </div>

            <!-- TABLAS --> @yield('tablas')
        </div>
    </main>


    <!--FOOTER
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    
                    </div>
                </div>
            
        </footer>
    -->
@endsection
