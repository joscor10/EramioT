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

      <h1 class="label  pl-3" style="font-family: 'Shadows Into Light', cursive; font-size: 40px;  ">Crear producto</h1>

   </div>

<div class="row">
            <div class="col-md-7">
    		{!!Form::open(['route'=>'producto.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
    		  <div class="form-group">

                  <label class="col-form-label" style="font-size: 30px;">Nombre</label>
    		  	{!!Form::text('nombre',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese nombre de producto'])!!}

    		  </div>

    		   <div class="form-group">
                   <label class="col-form-label" style="font-size: 30px;">Talla</label>

    		  	{!!Form::text('talla',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese talla de producto'])!!}

    		  </div>

    		  <div class="form-group">

                  <label class="col-form-label" style="font-size: 30px;">Precio</label>
    		  	{!!Form::text('precio',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese precio de producto'])!!}

              </div>
                 <div class="form-group">

                     <label class="col-form-label" style="font-size: 30px;">Precio Venta</label>
                {!!Form::text('precio_venta',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese precio de venta de producto'])!!}

              </div>

                 <div class="form-group">

                     <label class="col-form-label" style="font-size: 30px;">Estado</label>
                {!!Form::text('estado',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese estado de producto'])!!}

              </div>

                <div class="form-group">

                    <label class="col-form-label" style="font-size: 30px;">Descripción Corta</label>
                {!!Form::text('descripcion_corta',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese descripción de producto'])!!}

              </div>

    		  <div class="form-group">

                  <label class="col-form-label" style="font-size: 30px;">Descripción Larga</label>
    		  	{!!Form::text('descripcion_larga',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese descripción de producto'])!!}

    		  </div>

   
    		  <div class="form-group">

                  <label class="col-form-label" style="font-size: 30px;">Categoria</label>
                {!!Form::select('categoria_id',$categorias,null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese categoria de producto'])!!}


    		  </div>

    		   <div class="form-group">
                   <label class="col-form-label" style="font-size: 30px;">Genero</label>

    		  	{!!Form::select('genero_id',$generos,null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese genero de producto'])!!}

    		  </div>

                <label class="col-form-label" style="font-size: 30px;">Imagenes</label>
           



                    <div class="file-loading">
                        <input style="font-size: 20px;" id="input-40" name="imagen[]" type="file" class="file" multiple>
                    </div>
                    <br>



	         {!!Form::submit('Agregar',['class'=>'btn btn-lg','style'=>'background-color: #EFA3BB'])!!}

                {!!link_to_route('producto.index',$title='Cancelar',null,$attributes=['class'=>'btn   btn-lg','style'=>'background-color: #EFA3BB'])!!}
    		
        </div>
        <div class="col-md-5">
            
            


        </div>
        {!!Form::close()!!}
         <!--<form class="form-group">
		   <label class="label">Nombre:</label>
			 <input type="text" class="form-control form-control-sm ml-0 w-50" type="text" placeholder="Nombre Producto" aria-label="label">

			 <label class="label">Talla:</label>
			 <input class="form-control form-control-sm ml-0 w-50" type="text" placeholder="Talla Producto" aria-label="label">

		  </form>-->
	
</div>




@endsection