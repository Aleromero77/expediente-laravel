@extends('layouts.index')
@section('menu')
    <div class="nav">
        <div class="sb-sidenav-menu-heading">MENU</div>
        <a class="nav-link" href="#">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            PANEL
        </a>
        <div class="sb-sidenav-menu-heading">PERSONAL</div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
            aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Recepcionistas
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#">Altas</a>
                <a class="nav-link" href="#">Consultas</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
            aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Terapeutas
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#">Altas</a>
                <a class="nav-link" href="#">Consultas</a>
            </nav>
        </div>
        <div class="sb-sidenav-menu-heading">PACIENTES</div>
        <a class="nav-link" href="#">
            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
            PENDIENTE
        </a>

    </div>
@endsection
