@extends('index')
@section('contenido')


<div class="row">
	
<div class="col-sm">
	
<img style="height: 300px; width: 400px; " src="../../imagenes/{{$producto->imagen}}" class="card-img-top mx-auto d-block" alt="...">

</div>

<div class="col-sm">

		 <h3 class="card-title">{{$producto->nombre}}</h3>
		 <p class="card-text">{{$producto->descripcion_corta}}</p>
		<p class="card-text">{{$producto->descripcion_larga}}</p>
		<p class="card-text">Estado {{$producto->estado}}</p>
		<p class="card-text">Talla {{$producto->talla}}</p>
		<div class="form-inline">
			<p class="">${{number_format($producto->precio_venta,2,",",".")}} &nbsp</p>
			<p class="" style="font-size: 12px;"><strike>${{number_format($producto->precio,2,",",".")}}</strike> </p>
		               
		 </div>


		   {!!link_to_route('front.update',$title='Comprar',$parameters=$producto->id,$attributes=['class'=>'btn','style'=>'width: 230px; background-color: #F7D8FE'])!!}
</div>


</div>

@endsection