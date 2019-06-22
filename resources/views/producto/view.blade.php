@extends('layouts.front.index')
@section('contenido')


<div class="row  border ml-5 mt-5 mr-5">

<div class="col-sm-1  border-right text-center">
<div class="ml-2">

	@foreach($imagenes as $imagen)
	  	<div class="row mt-5 align-content-center ">
			<a class="btn-link" href="">
			<img   style="height: 100px; width: 100px; " src="../../imagenes/{{$imagen->nombre}}" class=" rounded-circle  mx-auto d-block" alt="...">
            </a>
		</div>
	@endforeach


</div>


</div>
	
<div class="col-sm-5  border-right">
	
<img style="height: 500px; width: 350px; " src="../../imagenes/{{$productos->imagen}}" class="card-img-top mx-auto d-block" alt="...">

</div>

<div class="col-sm ">

		 <h3 class="card-title" style="font-family: 'Shadows Into Light', cursive; font-size: 50px;">{{$productos->nombre}}</h3>
		 <p  style=" font-size: 25px;" class="card-text">{{$productos->descripcion_corta}}</p>
		<p style=" font-size: 25px;" class="card-text">{{$productos->descripcion_larga}}</p>
		<p style=" font-size: 25px;" class="card-text">Estado {{$productos->estado}}</p>
		<p style=" font-size: 25px;" class="card-text">Talla {{$productos->talla}}</p>
		<div class="form-inline">
			<p class="" style=" font-size: 25px;" >${{number_format($productos->precio_venta,2,",",".")}} &nbsp</p>
			<p class="" style="font-size: 20px;"><strike>${{number_format($productos->precio,2,",",".")}}</strike> </p>
		               
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
				<img src="..." class="mr-3" alt="...">
				<div class="media-body">
					<h5 class="mt-0 mb-1" style="font-family: 'Shadows Into Light', cursive; font-size: 30px;">{{$comentario->user->usuario}}</h5>
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
			<img src="..." class="mr-3" alt="...">
			<div class="media-body">
				<h5 class="mt-0 mb-1" style="font-family: 'Shadows Into Light', cursive; font-size: 30px;">{{$usuario->usuario}}</h5>
				<textarea name="comentario"  class="form-control w-100" id="exampleFormControlTextarea1" rows="3"></textarea>
				<input  type="hidden" class="form-control" name="producto" value="{{$productos->id}}"/>
				<button style="width: 230px; background-color: #F7D8FE" type="submit" class="btn mt-3">Comentar</button>

			</div>

		</li>
		</form>


	</ul>
	@endauth


</div>

@endsection