@extends('layouts.front.index')
@section('contenido')
   <div class="row ">

       <div class="col-2"></div>

       <div class="col-7 border-right border-left pt-5">

           <h1 style="font-family: 'Shadows Into Light', cursive; font-size: 40px;  "><strong>¿Dónde quieres recibirlo?</strong></h1>

           <form action="{{route('usuario.store')}}" method="POST">
           @csrf
           @method('POST')

               <div class="form-group">
                   <label class="col-form-label" style="font-size: 30px;">Departamento</label>
                   {!!Form::select('genero_id',$generos,null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese departamento'])!!}
               </div>


               <div class="form-group">
                   <label class="col-form-label" style="font-size: 30px;">Ciudad</label>
                   {!!Form::select('genero_id',$generos,null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese municipio'])!!}
               </div>

               <div class="form-group">
                   <label class="col-form-label" style="font-size: 30px;">Dirección</label>
                   {!!Form::text('nombre',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese dirección'])!!}

               </div>


               <div class="form-group">
                   <label class="col-form-label" style="font-size: 30px;">Barrio</label>
                   {!!Form::text('nombre',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese barrio'])!!}

               </div>

               <div class="form-group">
                   <label class="col-form-label" style="font-size: 30px;">Teléfono de Contacto</label>
                   {!!Form::text('nombre',null,['style'=>'font-size: 20px;','class'=>'form-control form-control-sm ml-0 w-100','placeholder'=>'Ingrese telefono de contacto'])!!}

               </div>

               <div class="form-group">
                   <button style="background-color: #EFA3BB; font-size: 20px; color: #000000;" type="submit" class="btn  btn-lg ">Confirmar</button>
               </div>

           </form>
       </div>

       <div class="col-2 pt-5 border-right " style="background-color: #F1F1F1;">


               <div class= " border-bottom">

                   <div class="text-center">

                           <img  class="rounded-circle" src="{{asset("imagenes/$imagen->nombre")}}"width=150px" height="150px" />




                   </div>

                   <div class="text-center">

                       <label class="" style="font-size: 30px;">{{$productos->nombre}}</label>

                   </div>

               </div>


               <div class="row">

                   <div class="col-4">

                       <label class="text-left" style="font-size: 25px;">Producto</label>

                   </div>

                   <div class="col-8 text-right">

                       <label style="font-size: 25px;" class="">${{number_format($productos->precio_venta,2,",",".")}}</label>

                   </div>

               </div>

               <div class="row  border-bottom">

                   <div class="col-4">

                       <label class="text-left" style="font-size: 25px;">Envio</label>

                   </div>

                   <div class="col-8 text-right">

                       <label style="font-size: 25px;"   class="">${{number_format(0,2,",",".")}}</label>


                   </div>


               </div>


               <div class="row">

                    <div class="col-4">
                          <label  class="text-left" style="font-size: 25px;"><strong>Total</strong></label>

                    </div>

                    <div class="col-8 text-right bold">

                      <label style="font-size: 25px;" class=" "><strong>${{number_format($productos->precio_venta,2,",",".")}}</strong></label>

                    </div>

                </div>



       </div>

       <div class="col-1">


       </div>


   </div>
@endsection