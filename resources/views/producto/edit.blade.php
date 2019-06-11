@extends('layouts.admin')

@section('contenido2')

<div class="row">
@if(count($errors)>0)
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <ul>
                  
                  @foreach($errors->all() as $error)
                  <li>{!!$error!!}</li>
                  @endforeach
              </ul>
            </div>
        @endif
   		
             <h1 class="label ">Editar producto</h1>

  </div>
  <div class="row">

    	<div class="col-md-7">
    		{!!Form::model($producto,['route'=>['producto.update',$producto->id],'method'=>'PUT'])!!}
    		  <div class="form-group">
    		  	{!!Form::label('Nombre:')!!}
    		  	{!!Form::text('nombre',null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese nombre de producto'])!!}

    		  </div>

    		   <div class="form-group">
    		  	{!!Form::label('Talla:')!!}
    		  	{!!Form::text('talla',null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese talla de producto'])!!}

    		  </div>

    		  <div class="form-group">
    		  	{!!Form::label('Precio:')!!}
    		  	{!!Form::text('precio',null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese precio de producto'])!!}

                 </div>

             <div class="form-group">
                {!!Form::label('Precio Venta:')!!}
                {!!Form::text('precio_venta',null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese precio de venta de producto'])!!}

              </div>


               <div class="form-group">
                {!!Form::label('Estado:')!!}
                {!!Form::text('estado',null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese estado de producto'])!!}

              </div>


              <div class="form-group">
                {!!Form::label('Descripción corta:')!!}
                {!!Form::text('descripcion_corta',null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese descripción de producto'])!!}

              </div>

    		  <div class="form-group">
    		  	{!!Form::label('Descripción larga:')!!}
    		  	{!!Form::text('descripcion_larga',null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese descripción de producto'])!!}

    		  </div>


    		 

    		  
    		
    		  

    		 <div class="form-group">
                {!!Form::label('Categoria:')!!}
                {!!Form::select('categoria_id',$categorias,null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese categoria de producto'])!!}
                <!--{!!Form::text('categoria_id',null,['class'=>'form-control form-control-sm ml-0 w-50','placeholder'=>'Ingrese categoria de producto'])!!}-->

              </div>

               <div class="form-group">
                {!!Form::label('Genero:')!!}
                {!!Form::select('genero_id',$generos,null,['class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese genero de producto'])!!}

              </div>

	         {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}


	        
              {!!link_to_route('producto.index',$title='Cancelar',null,$attributes=['class'=>'btn  btn-danger'])!!}
    		{!!Form::close()!!}

</div>
         <!--<form class="form-group">
		   <label class="label">Nombre:</label>
			 <input type="text" class="form-control form-control-sm ml-0 w-50" type="text" placeholder="Nombre Producto" aria-label="label">

			 <label class="label">Talla:</label>
			 <input class="form-control form-control-sm ml-0 w-50" type="text" placeholder="Talla Producto" aria-label="label">

		  </form>-->


</div>
@endsection