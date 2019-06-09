<!DOCTYPE html>
<html lang="es">
<head>
    <title>Era Mio - Trends Vintage</title>

    <link rel="shortcut icon" href="img/icono.png"/>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/fontawesome.min.css')!!}
    {!!Html::style('css/fontawesome.css')!!}

    {!!Html::style('https://www.w3schools.com/w3css/4/w3.css')!!}

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Shadows+Into+Light&display=swap" rel="stylesheet">

    <style type="text/css">
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
        body{

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
            position: absolute
            left:40%;
            top: 38%;

        }
        .modal-content  {
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
        .modal-content  a {
            color: #7a7a7a;
            text-decoration: none;
        }
        .modal-content  a:hover {
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


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">


    <!----------------------- erores------------------------------------------------------------------------------------------>
    @if(Session::has('message-error'))

        <div class="alert alert-danger alert-dismissible" role="alert">

            <strong>{{Session::get('message')}}</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

        </div>

    @endif


    @if(count($errors)>0)

        <div class="alert alert-danger alert-dismissible" role="alert">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

            <ul>

                @foreach($errors->all() as $error)

                    <li>{!!$error!!}</li>

                @endforeach
            </ul>

        </div>

    @endif


    @if(Session::has('message-user'))

        <div class="alert alert-success alert-dismissible" role="alert">

            <strong>{{Session::get('message-user')}}</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

        </div>

@endif

<!------------------------------------------------------------------------------------------------------------------------>


    <!--  ------------------Ventana Login ------------------------------------------------------------------------------->

    <div class="modal fade bd-example-modal-lg" id="login" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="login-form" id="login">

                        <form method="POST" action="{{url('login')}}">

                            @csrf
                            @method('POST')

                            <div class="avatar">

                                {!!HTML::image('img/icon-user.png', null,null)!!}

                            </div>

                            <h1 class="text-center">Inicio de Sesión</h1>

                            <div class="form-group">

                                <input type="text" class="form-control" name="email" placeholder="Usuario"
                                       required="required">

                            </div>

                            <div class="form-group">

                                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"
                                       required="required">

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>

                            </div>

                            <div class="clearfix">

                                <label class="pull-left checkbox-inline"><input type="checkbox"> Recuedame</label>

                                <br>

                                <a href="#" class="pull-right">Olvidaste tu contraseña?</a>

                            </div>

                            <label class="text-center small">No tienes cuenta? </label><a data-dismiss="modal"
                                                                                          class="link"
                                                                                          data-toggle="modal"
                                                                                          data-target="#registrar"
                                                                                          href=""> Registrate!</a>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!------------------------------------------------------------------------------------------------------------------------>

    <!--  ------------------Ventana Registrar ------------------------------------------------------------------------------->

    <div class="modal fade bd-example-modal-lg" id="registrar" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content" style="width: 450px; height: 500px; top: 90px;">

                <div class="modal-body">

                    <div class="text-center">


                    </div>


                    <div class="login-form" id="registrar">


                        <div class="avatar">

                            {!!HTML::image('img/icon-user.png', null,null)!!}

                        </div>

                        <h1 class="text-center">Ingrese sus Datos</h1>

                        {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}

                        <div class="form-group">

                            <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                                   required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="apellido" placeholder="Apellido"
                                   required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="usuario" placeholder="Nombre Usuario"
                                   required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="identificacion"
                                   placeholder="Numero de identificación" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="email" placeholder="Email"
                                   required="required">

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"
                                   required="required">

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>

                        </div>


                        {!!Form::close()!!}


                    </div>

                </div>

            </div>

        </div>

    </div>

    <!------------------------------------------------------------------------------------------------------------------------>


    <!------------------------------------cabecera------------------------------------------------------------------------------->

    <div class="row border-bottom border-top border-dark " style=" background-color: #EFA3BB">


        <div class="col  col-xl-4 mt-3 my-3">

            {!!HTML::image('img/icono.png', null, array('width' => '250px', 'height' => '100px'))!!}

        </div>

        <div class=" col  col-xl-5 mt-3  my-3">

            </br>

            {!!Form::open(['route'=>'menu.store','method'=>'POST','class'=>'form-inline md-form form-sm active-cyan active-cyan-2 mt-2'])!!}

            <input name="buscar" style="font-size: 22px" class="form-control form-control-sm ml-3 w-75" type="text"
                   placeholder="Buscar Producto" aria-label="Search" required="required">

            <button style="background-color: transparent; border:0px; " class="nav-link" type="submit"
                    style="font-size: 20px">

                <i class="fas fa-search" aria-hidden="true"></i>

            </button>

            {!!Form::close()!!}

        </div>


        <div class=" col  col-xl-3 mt-3  my-3 visible-desktop">

            </br>


            <form class="form-inline ">

                <a class="nav-link" href="#">

                    {!!HTML::image('img/ico-face.png', null, array('width' => '50px', 'height' => '50px'))!!}

                </a>

                <a class="nav-link" href="#">

                    {!!HTML::image('img/ico-insta.png', null, array('width' => '50px', 'height' => '50px'))!!}

                </a>

            </form>


        </div>


    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------->


    <!--------------------------------------------Barra de Menu---------------------------------------------------------------------------->

    <div class="row border-bottom border-dark " style=" background-color: #EFA3BB">
        <div class="col-3">
        </div>
        <div class="col-7 justify-content-center text-center">


            <nav class="navbar  navbar-expand-lg   navbar-light ">

                <div class="collapse navbar-collapse " id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto  " style="">

                        <li class="nav-item inicio ">

                            <a class="nav-link pr-5 pl-5 " href="{!!URL::to('/')!!}"
                               style=" font-size: 25px;  color:#000000;"><i class="fas fa-home"></i> Inicio</a>

                        </li>

                        <li class="nav-item mujer ">

                            <a class="nav-link  pl-5 pr-5 " href="" style=" font-size: 25px;  color:#000000;"><i
                                        class="fas fa-female"></i> Mujeres</a>


                        </li>

                        <li class="nav-item hombre">

                            <a class="nav-link  pl-5 pr-5 " href="" style=" font-size: 25px;  color:#000000;"><i
                                        class="fas fa-male"></i> Hombres</a>

                        </li>

                        <li class="nav-item niño ">

                            <a class="nav-link pl-5 pr-5 " href="" style=" font-size: 25px;  color:#000000;"><i
                                        class="fas fa-child"></i> Niños</a>
                        </li>


                    </ul>


                </div>

            </nav>

        </div>

        <div class=" col-2 ">

            <form class="">

                @auth

                    <div class="dropdown">

                        <button class="btn btn-secondary dropdown-toggle mt-2 btn-lg " type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">

                            {{$usuario->usuario}}

                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        {!!link_to_route('front.show',$title='Administrar',1,$attributes=['class'=>' dropdown-item ml-0 w-100'])!!}

                        <!--<a class="dropdown-item" href="#">Another action</a>-->

                            {!!link_to_route('login.create',$title='Salir',null,$attributes=['class'=>' dropdown-item ml-0 w-100'])!!}

                        </div>

                    </div>

                @endauth

                @guest

                    <a href="#login" class="btn mt-2 btn-lg"
                       style=" font-size: 22px; background-color: #6797FE;  color:#000000;"
                       data-toggle="modal">Ingresar</a>

                @endguest

            </form>

        </div>


    </div>

    <!--------------------------------------------------------------------------------------------------------->
    <!-------------------------submenus------------------------------------------------------------------------->

    <div class="row dl-horizontal justify-content-center menu_mujer" style="background-color: #EAEAEA " >

        <div class="col-sm-2 calzado-mujer mt-3 text-center border-dark  border-left ">

            {!!HTML::image('img/calzado-mujer.jpg', null, array('class'=>'img-calzado pt-2 img-responsive','width' => '200px', 'height' => '220px'))!!}

            <h1 class="text-calzado " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">

                <a class="nav-link" href="{!!URL::to('Calzado_Mujer')!!}">Calzado</a>

            </h1>
        </div>


        <div class="col-sm-2  accesorios-mujer mt-3  text-center border-dark  border-left border-right">
            {!!HTML::image('img/accesorios-mujer.jpg', null, array('class'=>'img-accesorios pt-2 img-responsive','width' => '200px', 'height' => '220px'))!!}

            <h1 class="text-accesorios" style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">

                <a class="nav-link" href="{!!URL::to('Accesorios_Mujer')!!}">Accesorios</a>

            </h1>


        </div>

        <div class="col-sm-2 ropa-mujer mt-3 text-center  border-dark  border-right">

            {!!HTML::image('img/ropa1.jpg', null, array('class'=>'img-ropa pt-2','width' => '200px', 'height' => '220px'))!!}

            <h1 class="text-ropa " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">

                <a class="nav-link" href="{!!URL::to('Ropa_Mujer')!!}">Ropa</a>

            </h1>

        </div>

        <div class="col-sm-2 todo-mujer mt-3  text-center  border-dark  border-right">

            {!!HTML::image('img/todo1.jpg', null, array('class'=>'img-todo pt-2','width' => '200px', 'height' => '220px'))!!}

            <h1 class="text-todo " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">

                <a class="nav-link" href="{!!URL::to('mujeres')!!}">Todo</a>

            </h1>


        </div>


    </div>

    <!------------------------------------------------------------------------------------------------------------>
    <!-------------------------------------------------Submenu Hombre------------------------------------------------------------------->



    <div class=" row dl-horizontal justify-content-center menu_hombre" style="background-color: #EAEAEA ">

        <div class="col-sm-2 calzado-hombre mt-3 text-center border-dark  border-left ">


            {!!HTML::image('img/calzado-hombre.jpg', null, array('class'=>'img-calzado2','width' => '200px', 'height' => '220px'))!!}



            <h1 class="text-calzado2 " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">

                <a class="nav-link" href="{!!URL::to('Calzado_Hombre')!!}">Calzado</a>
            </h1>

        </div>


        <div class="col-sm-2 accesorios-hombre mt-3 text-center border-dark  border-left border-right ">


                {!!HTML::image('img/accesorios-hombre.jpg', null, array('class'=>'img-accesorios2','width' => '200px', 'height' => '220px'))!!}

                <h1 class="text-accesorios2 " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">

                    <a class="nav-link" href="{!!URL::to('Accesorios_Hombre')!!}">Accesorios</a>
                </h1>
        </div>


        <div class="col-sm-2 ropa-hombre mt-3 text-center border-dark  border-right ">

                {!!HTML::image('img/ropa2.jpg', null, array('class'=>'img-ropa2','width' => '200px', 'height' => '220px'))!!}

                <h1 class="text-ropa2 "  style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">
                    <a class="nav-link" href="{!!URL::to('Ropa_Hombre')!!}">Ropa</a>

                </h1>



        </div>

        <div class="col-sm-2 todo-hombre mt-3 text-center border-dark  border-right ">


                {!!HTML::image('img/todo2.jpg', null, array('class'=>'img-todo2','width' => '200px', 'height' => '220px'))!!}

                <h1 class="text-todo2 " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">
                    <a class="nav-link" href="{!!URL::to('hombres')!!}">Todo</a>
                </h1>


        </div>




    </div>


    <!---------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------Submenu Niño------------------------------------------------------------------->



    <div class=" row dl-horizontal justify-content-center menu_niño" style="background-color: #EAEAEA ">


        <div class="col-sm-2 calzado-niño mt-3 text-center border-dark  border-left ">

                {!!HTML::image('img/calzado-niño.jpg', null, array('class'=>'img-calzado3','width' => '200px', 'height' => '220px'))!!}



                <h1 class="text-calzado3" style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">
                    <a class="nav-link" href="{!!URL::to('Calzado_Niño')!!}">Calzado</a>
                </h1>

        </div>

        <div class="col-sm-2 accesorios-niño mt-3 text-center border-dark  border-left border-right ">

                {!!HTML::image('img/accesorios-niño.jpg', null, array('class'=>'img-accesorios3','width' => '200px', 'height' => '220px'))!!}

                <h1 class="text-accesorios3 " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">
                    <a class="nav-link" href="{!!URL::to('Accesorios_Niño')!!}">Accesorios</a>
                </h1>
        </div>

        <div class="col-sm-2 ropa-niño mt-3 text-center border-dark  border-right ">


                {!!HTML::image('img/ropa3.jpg', null, array('class'=>'img-ropa3','width' => '200px', 'height' => '220px'))!!}

                <h1 class="text-ropa3 " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">
                    <a class="nav-link" href="{!!URL::to('Ropa_Niño')!!}">Ropa</a>
                </h1>



        </div>

        <div class="col-sm-2 todo-niño mt-3 text-center border-dark border-right ">


                {!!HTML::image('img/todo3.jpg', null, array('class'=>'img-todo3','width' => '200px', 'height' => '220px'))!!}

                <h1 class="text-todo3 " style="font-family: 'Shadows Into Light', cursive; font-size: 45px;">
                    <a class="nav-link" href="{!!URL::to('niños')!!}">Todo</a></h1>



        </div>




    </div>

    <!----------------------------------------------------contenido----------------------------------------------------->

@yield('contenido')

<!------------------------------------------------------------------------------------------------------------------>

    <!---------------------------Pie de pagina--------------------------------------------------------------------------->


    <div class="row" style="background-color: #B7B7B3;">

        <div class="col-sm-4">
            <h4 class="">¿Necesitas Ayuda?</h4>
            <h4 class="border-bottom"></h4>

            <h6><a class="nav-link" href="#">Como Funciona</a></h6>
            <h6><a class="nav-link" href="#">Preguntas frecuentes</a></h6>
            <h6><a class="nav-link" href="#">Contacto</a></h6>
        </div>

        <div class="col-sm-4">
            <h4 class="">Compra y Vende Seguro</h4>
            <h4 class="border-bottom"></h4>

            <h6><a class="nav-link" href="#">Tu Compra Asegurada</a></h6>
            <h6><a class="nav-link" href="#">Términos y Condiciones</a></h6>
            <h6><a class="nav-link" href="#">Políticas de Seguridad</a></h6>
        </div>

        <div class="col-sm-4">
            <h4 class="">Medios de Pago</h4>
            <h4 class="border-bottom"></h4>

            <div class="form-inline">


                {!!HTML::image('img/martercard.png', null, array('width' => '100px', 'height' => '50px'))!!}
                {!!HTML::image('img/efecty.png', null, array('width' => '100px', 'height' => '50px'))!!}

            </div>
        </div>


    </div>


    <!--ULTIMO DIV-->
</div>


{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/bootstrap.js')!!}
{!!Html::script('js/fontawesome.mim.js')!!}
{!!Html::script('js/fontawesome.js')!!}


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 2 seconds
    }


/*-------------------hover mujer---------------------------- */
    $(".mujer").hover(function () {
        $(".menu_mujer").css("display", "flex");
        $(".menu_mujer").css("position", "absolute");
        $(".menu_mujer").css("width", "100%");
        $(".menu_mujer").css(" z-index", "1000");

        /*$(this).css("background-color", "#F5D4DF");*/

    }, function () {
        $(".menu_mujer").css("display", "none");
       /* $(this).css("background-color", "transparent");*/


    });

    $(".menu_mujer").hover(function () {
        $(".menu_mujer").css("display", "flex");
        $(".menu_mujer").css("position", "absolute");
        $(".menu_mujer").css("width", "100%");
        $(".menu_mujer").css(" z-index", "1000");

       /* $(this).css("background-color", "#F5D4DF");*/

    }, function () {
        $(".menu_mujer").css("display", "none");

    });


    /*-------------------hover hombre---------------------------- */


    $(".hombre").hover(function () {
        $(".menu_hombre").css("display", "flex");
        $(".menu_hombre").css("position", "absolute");
        $(".menu_hombre").css("width", "100%");
        $(".menu_hombre").css(" z-index", "1000");

       /* $(this).css("background-color", "#F5D4DF");*/

    }, function () {
        $(".menu_hombre").css("display", "none");
        $(this).css("background-color", "transparent");


    });

    $(".menu_hombre").hover(function () {
        $(".menu_hombre").css("display", "flex");
        $(".menu_hombre").css("position", "absolute");
        $(".menu_hombre").css("width", "100%");
        $(".menu_hombre").css(" z-index", "1000");

       /* $(this).css("background-color", "#F5D4DF");*/

    }, function () {
        $(".menu_hombre").css("display", "none");

    });

    /*-------------------------------------------------- */


    /*-------------------hover hombre---------------------------- */


    $(".niño").hover(function () {
        $(".menu_niño").css("display", "flex");
        $(".menu_niño").css("position", "absolute");
        $(".menu_niño").css("width", "100%");
        $(".menu_niño").css(" z-index", "1000");

        /* $(this).css("background-color", "#F5D4DF");*/

    }, function () {
        $(".menu_niño").css("display", "none");
        $(this).css("background-color", "transparent");


    });

    $(".menu_niño").hover(function () {
        $(".menu_niño").css("display", "flex");
        $(".menu_niño").css("position", "absolute");
        $(".menu_niño").css("width", "100%");
        $(".menu_niño").css(" z-index", "1000");

        /* $(this).css("background-color", "#F5D4DF");*/

    }, function () {
        $(".menu_niño").css("display", "none");

    });

    /*-------------------------------------------------- */


    $(".inicio").hover(function () {

        $(this).css("background-color", "#F5D4DF");


    }, function () {

        $(this).css("background-color", "transparent");
    });

    $(".mujer").hover(function () {

        $(this).css("background-color", "#F5D4DF");


    }, function () {

        $(this).css("background-color", "transparent");
    });


    $(".hombre").hover(function () {

        $(this).css("background-color", "#F5D4DF");


    }, function () {

        $(this).css("background-color", "transparent");
    });


    $(".niño").hover(function () {

        $(this).css("background-color", "#F5D4DF");


    }, function () {

        $(this).css("background-color", "transparent");
    });


    var clic = 1;

    function divLogin() {

        if (clic == 1) {

            document.getElementById("caja").style.height = "100px";

            clic = clic + 1;

        } else {

            document.getElementById("caja").style.height = "0px";

            clic = 1;

        }

    }


    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }


    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>
</body>
</html>
