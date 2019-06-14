@extends('layouts.front.index')
@section('contenido')


<div class="row  border ml-5 mt-5 mr-5">

<div class="col-sm-1  border-right">



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
		<li class="media">
			<img src="..." class="mr-3" alt="...">
			<div class="media-body">
				<h5 class="mt-0 mb-1">List-based media object</h5>
				Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
			</div>
		</li>

	</ul>

	<ul class="list-unstyled w-75 pl-5 mt-3">
		<li class="media w-100">
			<img src="..." class="mr-3" alt="...">
			<div class="media-body">
				<h5 class="mt-0 mb-1">List-based media object</h5>
				<textarea   class="form-control w-100" id="exampleFormControlTextarea1" rows="3"></textarea>
				{!!link_to_route('front.update',$title='Comentar',$parameters=$productos->id,$attributes=['class'=>'btn mt-3','style'=>'width: 230px; background-color: #F7D8FE'])!!}
			</div>

		</li>


	</ul>


</div>

@endsection