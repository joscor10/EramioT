<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Producto;
use Auth;

class MenuController extends Controller
{
    

    public function Mujeres(){

    	$productos= Producto::where('genero_id',1)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }


      public function Hombres(){

    	$productos= Producto::where('genero_id',2)->get();
         $usuario =Auth::user();
        return view('home..index',compact('productos','usuario'));
    }


      public function Niños(){

    	$productos= Producto::where('genero_id',3)->get();
         $usuario =Auth::user();
        return view('home..index',compact('productos','usuario'));
    }

    public function store(Request $request){
      $productos= Producto::where('nombre','like',"%{$request['buscar']}%")->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
        

    }


    public function Calzado_Mujer(){

    	$productos= Producto::with('imagenes')->where('genero_id',1)->where('categoria_id',1)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }



     public function Accesorios_Mujer(){

    	$productos= Producto::where('genero_id',1)->where('categoria_id',3)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }



    public function Ropa_Mujer(){

    	$productos= Producto::where('genero_id',1)->where('categoria_id',2)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }

/* ---------------- hombres------------------ */
    public function Calzado_Hombre(){

    	$productos= Producto::where('genero_id',2)->where('categoria_id',1)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }



     public function Accesorios_Hombre(){

    	$productos= Producto::where('genero_id',2)->where('categoria_id',3)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }



    public function Ropa_Hombre(){

    	$productos= Producto::where('genero_id',2)->where('categoria_id',2)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }

/*  ------------------ Nuños ----------- */



public function Calzado_Niño(){

    	$productos= Producto::where('genero_id',3)->where('categoria_id',1)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }



     public function Accesorios_Niño(){

    	$productos= Producto::where('genero_id',3)->where('categoria_id',3)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }



    public function Ropa_Niño(){

    	$productos= Producto::where('genero_id',3)->where('categoria_id',2)->get();
         $usuario =Auth::user();
        return view('home.index',compact('productos','usuario'));
    }



}
