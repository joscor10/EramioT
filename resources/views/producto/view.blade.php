@extends('layouts.front.index')
@section('contenido')


<div class="row">
	
<div class="col-sm">
	
<img style="height: 300px; width: 400px; " src="../../imagenes/{{$productos->imagen}}" class="card-img-top mx-auto d-block" alt="...">

</div>

<div class="col-sm">

		 <h3 class="card-title">{{$productos->nombre}}</h3>
		 <p class="card-text">{{$productos->descripcion_corta}}</p>
		<p class="card-text">{{$productos->descripcion_larga}}</p>
		<p class="card-text">Estado {{$productos->estado}}</p>
		<p class="card-text">Talla {{$productos->talla}}</p>
		<div class="form-inline">
			<p class="">${{number_format($productos->precio_venta,2,",",".")}} &nbsp</p>
			<p class="" style="font-size: 12px;"><strike>${{number_format($productos->precio,2,",",".")}}</strike> </p>
		               
		 </div>


		   {!!link_to_route('front.update',$title='Comprar',$parameters=$productos->id,$attributes=['class'=>'btn','style'=>'width: 230px; background-color: #F7D8FE'])!!}
</div>


</div>

@endsection