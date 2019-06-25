@extends('layouts.front.index')

@push('css')
    <!-- xzoom plugin here -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/x-zoom/dist/xzoom.css')}}" media="all"/>
    <!-- hammer plugin here -->

    <link type="text/css" rel="stylesheet" media="all"
          href="{{asset('plugins/x-zoom/example/fancybox/source/jquery.fancybox.css')}}"/>
    <link type="text/css" rel="stylesheet" media="all"
          href="{{asset('plugins/x-zoom/example/magnific-popup/css/magnific-popup.css')}}"/>

@endpush

@section('contenido')


    <div class="row border ml-5 mt-5 mr-5">
        <div class="col-sm-5">
            <div class="xzoom-container mt-3 mb">
                <img class="xzoom img-responsive" id="xzoom-default" src="{{asset("imagenes/$imagen->nombre")}}"
                     xoriginal="{{asset("imagenes/$imagen->nombre")}}" width="100%" height="500px"/>

                <div class="xzoom-thumbs mt-1">
                    @foreach($productos->imagenes as $imagen)
                        <a href="{{asset("imagenes/$imagen->nombre")}}"><img class="xzoom-gallery" width="80"
                                                                             src="{{asset("imagenes/$imagen->nombre")}}"
                                                                             title="The description goes here"></a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-sm-7">

            <h3 class="card-title"
                style="font-family: 'Shadows Into Light', cursive; font-size: 50px;">{{$productos->nombre}}</h3>
            <p style=" font-size: 25px;" class="card-text">{{$productos->descripcion_corta}}</p>
            <p style=" font-size: 25px;" class="card-text">{{$productos->descripcion_larga}}</p>
            <p style=" font-size: 25px;" class="card-text">Estado {{$productos->estado}}</p>
            <p style=" font-size: 25px;" class="card-text">Talla {{$productos->talla}}</p>
            <div class="form-inline">
                <p class="" style=" font-size: 25px;">${{number_format($productos->precio_venta,2,",",".")}} &nbsp</p>
                <p class="" style="font-size: 20px;"><strike>${{number_format($productos->precio,2,",",".")}}</strike>
                </p>

            </div>


            {!!link_to_route('producto.aprobar',$title='Aprobar',$parameters=$productos->id,$attributes=['class'=>'btn','style'=>'width: 230px;background-color: #EFA3BB'])!!}
        </div>


    </div>



@endsection

@push('scripts')
    <!-- xzoom plugin here -->
    <script type="text/javascript" src="{{asset('plugins/x-zoom/src/xzoom.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('plugins/x-zoom/example/hammer.js/1.0.5/jquery.hammer.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('plugins/x-zoom/example/fancybox/source/jquery.fancybox.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('plugins/x-zoom/example/magnific-popup/js/magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/x-zoom/example/js/setup.js')}}"></script>
    <script>

    </script>
@endpush