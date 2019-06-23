<div class="row justify-content-end  border-bottom border-dark " style=" background-color: #EFA3BB">
    <div class="col-7 text-center p-0 ">
        <nav class="navbar   p-0 navbar-expand-lg   ">
            <div class="collapse navbar-collapse  p-0" id="navbarSupportedContent">
                <ul class="navbar-nav   p-0 " style="">
                    <li class="nav-item inicio ">
                        <a class="nav-link pr-5 pl-5 " href="{{url('/')}}" style=" font-size: 25px;  color:#000000;"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item mujer ">
                        <a class="nav-link   pl-5 pr-5 " href="" style=" font-size: 25px;  color:#000000;"><i class="fas fa-female"></i> Mujeres</a>
                    </li>
                    <li class="nav-item hombre">
                        <a class="nav-link  pl-5 pr-5 " href="" style=" font-size: 25px;  color:#000000;"><i class="fas fa-male"></i> Hombres</a>
                    </li>
                    <li class="nav-item niño ">
                        <a class="nav-link pl-5 pr-5 " href="" style=" font-size: 25px;  color:#000000;"><i class="fas fa-child"></i> Niños</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class=" col-2 ">
        <form class="">
            @auth
                <div class="dropdown">
                    <button  style="font-size: 22px;" class="btn btn-secondary dropdown-toggle mt-1  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$usuario->usuario}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="{{url('admin')}}" class="dropdown-item ml-0 w-100">Administrar</a>
                        <a href="{{route('login.logout')}}" class="dropdown-item ml-0 w-100">Salir</a>
                    </div>
                </div>
            @endauth

            @guest
                <a href="#login" class="btn mt-1 btn-secondary" style=" font-size: 22px;  color:#FFFFFF;" data-toggle="modal">Ingresar</a>
            @endguest
        </form>
    </div>
</div>