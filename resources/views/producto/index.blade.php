@extends('layouts.admin')

@section('contenido2')
    <div class="container-fluid">

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <strong>{{Session::get('message')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
  <div class="row justify-content-center">
    		
       <h1 class="label " style="font-family: 'Shadows Into Light', cursive; ">Productos</h1>

    	</div>

    	<div class="row">

		    	<div class="col-ms">

		    		<a class="btn " style="background-color: #EFA3BB" href="{!!URL::to('producto/create')!!}"><i class="fas fa-plus"></i> agregar</a>

		    	</div>

    	</div>
        </br>

    	<div class="row">
    		<table class="table table-striped table-bordered">
					  <thead>
					    <tr style="font-size: 25px;">
					      <th scope="col">Nombre</th>
					      <th scope="col">Talla</th>
					      <th scope="col">Descripción</th>
					      <th scope="col">Precio</th>
					      <th scope="col">Precio Venta</th>
					      <th scope="col">Estado</th>
					      <th scope="col">Categoria</th>
					      <th scope="col">Genero</th>   
					      <th scope="col">Acción</th>
					    </tr>
					  </thead>
					  @foreach($productos as $producto)
					  <tbody>
					    <tr style="font-size: 20px;" class="text-center text-ali">
					      <td>{{$producto->nombre}}</td>
					      <td>{{$producto->talla}}</td>
					      <td>{{$producto->descripcion_corta}}</td>
					      <td>{{number_format($producto->precio,2,",",".")}}</td>
					      <td >{{number_format($producto->precio_venta,2,",",".")}}</td>
					      <td>{{$producto->estado}}</td>
					      <td>{{$producto->categoria->nombre}}</td>
					      <td>{{$producto->genero->nombre}}</td>
					      <td>
					      	{!!link_to_route('producto.edit',$title='editar',$parameters=$producto->id,$attributes=['class'=>'btn  ml-0 w-100','style'=>'background-color: #EFA3BB'])!!}

    		{!!Form::open(['route'=>['producto.destroy',$producto->id],'method'=>'DELETE'])!!}

    		{!!Form::submit('Eliminar',['class'=>'btn  ml-0 mt-2 w-100','style'=>'background-color: #EFA3BB'])!!}


    		{!!Form::close()!!}
					      <!--	<button class="btn btn-secondary"><i class="fas fa-pencil-alt"></i> Editar</button> <button class="btn btn-danger"><i class="fas fa-times"></i> Eliminar</button></td>-->
					      

					    </tr>
					   
					   
					  </tbody>
					   @endforeach
					</table>
                {!!$productos->render()!!}
					    		


    	</div>	


       



    </div>
@endsection