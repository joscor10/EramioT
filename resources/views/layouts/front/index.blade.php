<!DOCTYPE html>
<html lang="es">
<head>
    <title>Era Mio - Trends Vintage</title>

    <link rel="shortcut icon" href="img/icono.png"/>

    <link media="all" type="text/css" rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style type="text/css">
        .mySlides {
            display: none
        }

        .w3-left, .w3-right, .w3-badge {
            cursor: pointer
        }

        .w3-badge {
            height: 13px;
            width: 13px;
            padding: 0
        }

        body {

            font-family: 'Shadows Into Light', cursive;

        }

        .form-control {
            min-height: 41px;
            background: #fff;
            box-shadow: none !important;
            border-color: #e3e3e3;
        }

        .form-control:focus {
            border-color: #6797FE;
        }

        .form-control, .btn {
            border-radius: 2px;
        }

        .login-form {
            width: 390px;
            margin: 0 auto;
            padding: 10px 0 0px;
            left: 40%;
            top: 38%;

        }

        .modal-content {
            color: #7a7a7a;
            border-radius: 2px;
            width: 450px;
            height: 400px;
            margin-bottom: 15px;
            font-size: 13px;
            background: #ececec;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 10px;
            position: absolute;
        }

        .login-form h2 {
            font-size: 22px;
            margin: 35px 0 25px;
        }

        .login-form .avatar {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -120px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            z-index: 9;
            background: #6797FE;
            padding: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .login-form .avatar img {
            width: 100%;
        }

        .login-form input[type="checkbox"] {
            margin-top: 2px;
        }

        .login-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #6797FE;
            border: none;
            margin-bottom: 20px;
        }

        .login-form .btn:hover, .login-form .btn:focus {
            background: #6797FE;
            outline: none !important;
        }

        .login-form a {
            color: #000;
            text-decoration: underline;
        }

        .login-form a:hover {
            text-decoration: none;
        }

        .modal-content a {
            color: #7a7a7a;
            text-decoration: none;
        }

        .modal-content a:hover {
            text-decoration: underline;
        }

        .ec-stars-wrapper {
            /* Espacio entre los inline-block (los hijos, los `a`)
               http://ksesocss.blogspot.com/2012/03/display-inline-block-y-sus-empeno-en.html */
            font-size: 0;
            /* Podríamos quitarlo,
                pero de esta manera (siempre que no le demos padding),
                sólo aplicará la regla .ec-stars-wrapper:hover a cuando
                también se esté haciendo hover a alguna estrella */
            display: inline-block;
        }

        .ec-stars-wrapper a {
            text-decoration: none;
            display: inline-block;
            /* Volver a dar tamaño al texto */
            font-size: 32px;
            font-size: 2rem;

            color: #888;
        }

        .ec-stars-wrapper:hover a {
            color: rgb(39, 130, 228);
        }

        /*
         * El selector de hijo, es necesario para aumentar la especifidad
         */
        .ec-stars-wrapper > a:hover ~ a {
            color: #888;
        }


        .menu_mujer {


            display: none;
            z-index: 100;


        }

        .calzado-mujer:hover .text-calzado {


            position: absolute;
            top: 25%;
            left: 20%;


        }


        .calzado-mujer:hover .img-calzado {

            opacity: .4;
        }


        .accesorios-mujer:hover .text-accesorios {
            position: absolute;
            top: 25%;
            left: 12%;

            text-align: center;


        }


        .accesorios-mujer:hover .img-accesorios {

            opacity: .4;
        }


        .ropa-mujer:hover .text-ropa {
            position: absolute;
            top: 25%;
            left: 28%;


        }


        .ropa-mujer:hover .img-ropa {

            opacity: .4;
        }


        .todo-mujer:hover .text-todo {
            position: absolute;
            top: 25%;
            left: 28%;


        }


        .todo-mujer:hover .img-todo {

            opacity: .4;
        }

        /*---------------hombre-------------------*/
        .menu_hombre {


            display: none;
            z-index: 100;


        }


        .calzado-hombre:hover .text-calzado2 {


            position: absolute;
            top: 25%;
            left: 20%;


        }


        .calzado-hombre:hover .img-calzado2 {

            opacity: .4;
        }


        .accesorios-hombre:hover .text-accesorios2 {
            position: absolute;
            top: 25%;
            left: 12%;

            text-align: center;


        }


        .accesorios-hombre:hover .img-accesorios2 {

            opacity: .4;
        }


        .ropa-hombre:hover .text-ropa2 {
            position: absolute;
            top: 25%;
            left: 28%;


        }


        .ropa-hombre:hover .img-ropa2 {

            opacity: .4;
        }


        .todo-hombre:hover .text-todo2 {
            position: absolute;
            top: 25%;
            left: 28%;


        }


        .todo-hombre:hover .img-todo2 {

            opacity: .4;
        }

        /*---------------niño-------------------*/
        .menu_niño {


            display: none;
            z-index: 100;


        }


        .calzado-niño:hover .text-calzado3 {


            position: absolute;
            top: 25%;
            left: 20%;


        }


        .calzado-niño:hover .img-calzado3 {

            opacity: .4;
        }


        .accesorios-niño:hover .text-accesorios3 {
            position: absolute;
            top: 25%;
            left: 12%;

            text-align: center;


        }


        .accesorios-niño:hover .img-accesorios3 {

            opacity: .4;
        }


        .ropa-niño:hover .text-ropa3 {
            position: absolute;
            top: 25%;
            left: 28%;


        }


        .ropa-niño:hover .img-ropa3 {

            opacity: .4;
        }


        .todo-niño:hover .text-todo3 {
            position: absolute;
            top: 25%;
            left: 28%;


        }


        .todo-niño:hover .img-todo3 {

            opacity: .4;
        }

    </style>

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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@include('layouts.front.partials.scripts')

@stack('scripts')

</body>
</html>