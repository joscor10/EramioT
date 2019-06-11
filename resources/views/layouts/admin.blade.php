@extends('layouts.front.index')
@section('contenido')

    <div class="row  ">

        <div class="col-md-2 float-left col-1 pl-0 pr-0 c width border">


            <div class="list-group border-0 card text-center text-md-left">

                <a href="#"  style="font-size: 25px "class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">Resumen</span></a>

                <a href="{!!URL::to('producto')!!}"  style="font-size: 25px " class="list-group-item d-inline-block"   aria-expanded="false"><i class="fas fa-tshirt"></i> <span class="d-none d-md-inline">Productos</span> </a>


                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">Compras</span></a>

                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-list"></i> <span class="d-none d-md-inline">Ventas</span></a>
                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#"  style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" style="font-size: 25px " class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-star"></i> <span class="d-none d-md-inline">Link</span></a>
            </div>

        </div>

        <main class="col-md-10 col px-5 pl-md-2 pt-2 main mx-auto">

            <div class="row">
                <div class="col-md-12">
                    @yield('contenido2')
                </div>
            </div>

        </main>


    </div>


@endsection