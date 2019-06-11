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
    		
       <h1 class="label ">Productos</h1>

    	</div>

    	<div class="row">

		    	<div class="col-ms">
		    	<!--{!!link_to_route('producto.create',$title='Agregar',$attributes=['class'=>'btn btn-success'])!!}-->
		    		<a class="btn btn-success" href="{!!URL::to('producto/create')!!}"><i class="fas fa-plus"></i> agregar</a>
		    		
		    	</div>	

    	</div>
        </br>

    	<div class="row">
    		<table class="table table-striped table-bordered">
					  <thead>
					    <tr>
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
					    <tr>
					      <td>{{$producto->nombre}}</td>
					      <td>{{$producto->talla}}</td>
					      <td>{{$producto->descripcion_corta}}</td>
					      <td>{{number_format($producto->precio,2,",",".")}}</td>
					      <td >{{number_format($producto->precio_venta,2,",",".")}}</td>
					      <td>{{$producto->estado}}</td>
					      <td>{{$producto->categoria->nombre}}</td>
					      <td>{{$producto->genero->nombre}}</td>
					      <td>
					      	{!!link_to_route('producto.edit',$title='editar',$parameters=$producto->id,$attributes=['class'=>'btn btn-secondary ml-0 w-100'])!!}

    		{!!Form::open(['route'=>['producto.destroy',$producto->id],'method'=>'DELETE'])!!}

    		{!!Form::submit('Eliminar',['class'=>'btn btn-danger ml-0 w-100'])!!}


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