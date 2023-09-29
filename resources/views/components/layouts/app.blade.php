<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>YOLOMA - {{ $title }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/jpg" href="{{ asset('yoloma.ico') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css') }}">
    <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js') }}" crossorigin="anonymous"></script>

    @yield('css')
</head>

<body class="sb-nav-fixed">
    <x-layouts.topNav />{{-- Menu Superior --}}
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <x-layouts.menu />{{-- Menu principal --}}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            {{ $slot }} {{-- Contenido --}}
            <x-layouts.footer /> {{-- Piel de pagina --}}
        </div>
    </div>


    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}"
        crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @yield('js')
</body>

</html>
