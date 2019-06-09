<div class="row border-bottom border-top border-dark " style=" background-color: #EFA3BB">
    <div class="col  col-xl-4 mt-3 my-3">
        <img src="{{asset('img/icono.png')}}" alt="" width="250px" height="100px">
    </div>

    <div class=" col  col-xl-5 mt-3  my-3">
        </br>
        <form action="{{route('menu.store')}}" method="POST"
              class="form-inline md-form form-sm active-cyan active-cyan-2 mt-2">
            <input name="buscar" style="font-size: 22px" class="form-control form-control-sm ml-3 w-75" type="text"  placeholder="Buscar Producto" aria-label="Search" required="required">
            <button style="background-color: transparent; border:0px; " class="nav-link" type="submit" style="font-size: 20px">
                <i class="fas fa-search" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <div class=" col  col-xl-3 mt-3  my-3 visible-desktop">
        </br>
        <form class="form-inline ">
            <a class="nav-link" href="#">
                <img src="{{asset('img/ico-face.png')}}" width="50px" height="50px" alt="">
            </a>

            <a class="nav-link" href="#">
                <img src="{{asset('img/ico-insta.png')}}" width="50px" height="50px" alt="">
            </a>
        </form>
    </div>
</div>