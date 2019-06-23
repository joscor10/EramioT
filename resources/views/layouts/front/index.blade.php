<!DOCTYPE html>
<html lang="es">
<head>
    <title>Era Mio - Trends Vintage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="shortcut icon" href="../../img/icono.png"/>

    <link media="all" type="text/css" rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link    rel="stylesheet"  href="{{asset('css/estilo.css')}}">
    @stack('css')

</head>
<body>

<div class="container-fluid">

    <!-- Mensajes y errores -->
    @include('layouts.front.partials.messages')

    <!-- Ventana Login -->
    @include('layouts.front.partials.modal-login')

    <!-- Ventana Registrar -->
    @include('layouts.front.partials.modal-registrar')

    <!-- Cabecera -->
    @include('layouts.front.partials.cabecera')

    <!-- Barra de Menu -->
    @include('layouts.front.partials.barra-menus')

    <!-- Submenu Mujer-->
    @include('layouts.front.partials.submenus.mujer')

    <!-- Submenu Hombre -->
    @include('layouts.front.partials.submenus.hombre')
    <!-- Submenu Niño -->
    @include('layouts.front.partials.submenus.niño')

    <!-- Contenido -->
    @yield('contenido')

    <!-- Pie de pagina -->
    @include('layouts.front.partials.pie-pagina')

<!-- Ultimo Div -->
</div>


<script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@include('layouts.front.partials.scripts')


@stack('scripts')
</body>
</html>