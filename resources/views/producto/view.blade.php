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
                <img class="xzoom img-responsive" id="xzoom-default" src="{{asset("imagenes/$productos->imagen")}}"
                     xoriginal="{{asset("imagenes/$productos->imagen")}}" width="100%" height="500px"/>
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


            {!!link_to_route('front.update',$title='Comprar',$parameters=$productos->id,$attributes=['class'=>'btn','style'=>'width: 230px; background-color: #F7D8FE'])!!}
        </div>


    </div>

    <div class="row ml-5 mr-5 border">

        <div class=" ml-5 w-100">

            <h1 style="font-family: 'Shadows Into Light', cursive; font-size: 40px;">Comentarios</h1>
        </div>


        <ul class="list-unstyled pl-5 mt-3 w-75">
            @foreach($comentarios as $comentario)
                <li class="media border-bottom mt-3">
                    <img src="https://www.shareicon.net/data/64x64/2016/08/18/810197_user_512x512.png"
                         class="mr-3 img-responsive" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"
                            style="font-family: 'Shadows Into Light', cursive; font-size: 30px;">{{$comentario->user->usuario}}</h5>
                        <p>{{$comentario->comentario}}</p>
                    </div>
                </li>
            @endforeach
        </ul>

        @auth
            <ul class="list-unstyled w-75 pl-5 mt-3">
                <form action="{{route('comentario.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <li class="media w-100  ">
                        <img src="https://www.shareicon.net/data/64x64/2016/08/18/810197_user_512x512.png"
                             class="mr-3 img-responsive" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"
                                style="font-family: 'Shadows Into Light', cursive; font-size: 30px;">{{$usuario->usuario}}</h5>
                            <textarea name="comentario" class="form-control w-100" id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                            <input type="hidden" class="form-control" name="producto" value="{{$productos->id}}"/>
                            <button style="width: 230px; background-color: #F7D8FE" type="submit" class="btn mt-3">
                                Comentar
                            </button>

                        </div>

                    </li>
                </form>


            </ul>
        @endauth


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