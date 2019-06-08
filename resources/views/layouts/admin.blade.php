<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css">

	{!!Html::style('css/bootstrap.css')!!}
	
	{!!Html::style('css/sidenav.css')!!}
	{!!Html::style('css/fileinput.css')!!}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>Era Mio - Trends Vintage</title>
</head>

<body>


<div class="container-fluid">

	<div class="row">
		
             <div class="col-sm-10">
             	
             	 {!!HTML::image('img/icono.png', null, array('width' => '300px', 'height' => '150px'))!!}

			</div>
			<div class="col-sm-2">

				    @auth
					        	  	

					        	  	<div class="dropdown">
										  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    {{$usuario->usuario}}
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    {!!link_to_route('front.show',$title='Administrar',1,$attributes=['class'=>' dropdown-item ml-0 w-100'])!!}
										    <a class="dropdown-item" href="#">Another action</a>
										     {!!link_to_route('login.create',$title='Salir',null,$attributes=['class'=>' dropdown-item ml-0 w-100'])!!}
										  </div>
										</div>

				 @endauth
				





			</div>


	</div>

    <div class="row d-flex d-md-block flex-nowrap wrapper border-top">


        <div class="col-md-3 float-left col-1 pl-0 pr-0 c width border">
        	<div class="text-center">
        	{!!HTML::image('img/icon-user.png', null, array('width' => '230px', 'height' => '160px'))!!}
        	<br>
        	 {!!Form::label("{$usuario->usuario}")!!}

            </div>



                <div class="list-group border-0 card text-center text-md-left">
                	
               <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">Resumen</span></a>

                <a href="{!!URL::to('producto')!!}" class="list-group-item d-inline-block"   aria-expanded="false"><i class="fas fa-tshirt"></i> <span class="d-none d-md-inline">Productos</span> </a>
              
                
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">Compras</span></a>

                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-list"></i> <span class="d-none d-md-inline">Ventas</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="d-none d-md-inline">Link</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-star"></i> <span class="d-none d-md-inline">Link</span></a>
            </div>
        </div>
        <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
     
            <div class="row">
                 <div class="col-md-12">
                    @yield('contenido')
                </div>
             </div>
               
           </main>
        </main>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


{!!Html::script('js/jquery.min.js')!!}
 {!!Html::script('js/bootstrap.min.js')!!}
 

{!!Html::script('js/fontawesome.js')!!}
{!!Html::script('js/fileinput.js')!!}


{!!Html::script('js/jquery.min.js')!!}
 {!!Html::script('js/jquery.min.js')!!}
 {!!Html::script('js/bootstrap.min.js')!!}
  {!!Html::script('js/bootstrap.js')!!}
{!!Html::script('js/fontawesome.mim.js')!!}
{!!Html::script('js/fontawesome.js')!!}
</body>

</html>
