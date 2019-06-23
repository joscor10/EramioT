@extends('layouts.front.index')
@section('contenido')

   <!-- <div class="row baner">-->

        <!--<div class="w3-display-container">-->


            <!--<img class="mySlides" src="img/img4.jpg" width="100%" height="320">-->


           <!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>-->

            <!--<img class="mySlides" src="img/img3.jpg" width="100%" height="320">
            <img class="mySlides" src="img/img3.jpg" width="100%" height="320">


        </div>

    </div>-->

    <div class=" row bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/img3.jpg" alt="..." width="100%" height="320">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">

                    <img class="d-block w-100" src="img/img3.jpg" alt="..." width="100%" height="320">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/img3.jpg" alt="..." width="100%" height="320">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- -----------------productos----------------------- -->


    <!-- <div class="row" style="  background-image: url('img/fondo.jpg');">
       <center>

            <h1 class="mt-5" style="font-family: 'Shadows Into Light', cursive; font-size: 60px;">Productos</h1>
       </center>
       </div>-->

    <div class="row  " style="   ">


        <div class="col-2">


        </div>

        <div class="col-8 ">
            <center>

                <h1 class="mt-5" style="font-family: 'Shadows Into Light', cursive; font-size: 60px;">Productos</h1>
            </center>

            <div class="row mt-5 border-left border-right border-dark">

                @foreach($productos as $producto)
                    <center>

                        <div class="col-sm" style="padding-left: 50px;">
                            <div class="card" style="width: 18rem;">
                                <img style="height: 200px; width: 200px; " src="imagenes/{{$producto->imagenes->first()['nombre']}}"
                                     class="card-img-top mx-auto d-block" alt="...">

                                <div class="ec-stars-wrapper ">
                                    <a href="#" data-value="1">&#9733;</a>
                                    <a href="#" data-value="2">&#9733;</a>
                                    <a href="#" data-value="3">&#9733;</a>
                                    <a href="#" data-value="4">&#9733;</a>
                                    <a href="#" data-value="5">&#9733;</a>
                                </div>

                                <div class="card-body" style="">
                                    <h3 class="card-title"
                                        style="font-family: 'Shadows Into Light', cursive; font-size: 35px;">{{$producto->nombre}}</h3>
                                    <p class="card-text text-left"
                                       style="font-size: 20px;">{{$producto->descripcion_corta}}</p>
                                    <p class="card-text text-left" style="font-size: 20px;">
                                        Talla {{$producto->talla}}</p>

                                    <div class="form-inline">
                                        <p class="" style="font-size: 25px;">
                                            ${{number_format($producto->precio_venta,2,",",".")}} &nbsp</p>
                                        <p class="" style="font-size: 20px;">
                                            <strike>${{number_format($producto->precio,2,",",".")}}</strike></p>

                                    </div>



                                    {!!link_to_route('front.edit',$title='Comprar',$parameters=$producto->id,$attributes=['class'=>'btn','style'=>'width: 230px; background-color: #EFA3BB; font-size:20px;'])!!}
                                </div>
                            </div>

                            <br>
                            <br>
                        </div>
                    </center>

                @endforeach

            </div>


        </div>

        <div class="col-2">

        </div>
    </div>

@endsection

@push('scripts')
    @include('home.carousel')
@endpush