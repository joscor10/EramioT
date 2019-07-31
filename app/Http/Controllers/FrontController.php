<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Genero;
use App\Imagen;
use App\Usuario;
use Illuminate\Http\Request;
Use App\Producto;
use Auth;
use App\Comentario;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $productos= Producto::where('aprobado',1)->get();
         $usuario = Auth::user();
         return view('home.index',compact('productos','usuario'));
    }





    /**
     * Show the form for creating a new resource.
     *
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function view($id)
    {
        /**return view('producto.view');*/
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        //
        $productos= Producto::where('usuario_id',Auth::user()->id)->paginate(4);

        $categorias= Categoria::pluck('nombre','id');
        $generos= Genero::pluck('nombre','id');

         $usuario =Auth::user();
         return view('producto.index',compact('usuario','productos','categorias','generos'));

    }




    public function direccion($id){


        $usuario =Auth::user();
        $generos= Genero::pluck('nombre','id');
        $productos=Producto::with('imagenes')->find($id);
        $imagen= Imagen::where('producto_id',$id)->get()->first();

        return view('layouts.front.direccion',compact('usuario','generos','productos','imagen'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $productos=Producto::with('imagenes')->find($id);
        $imagen= Imagen::where('producto_id',$id)->get()->first();
        $comentarios= Comentario::where('producto_id',$id)->get();
        $user= Usuario::pluck('nombre','id');
        $usuario =Auth::user();

         return view("producto.view",compact('productos','usuario','comentarios','user','imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         return "aqui";
    }


    public function info()
    {

        $usuario =Auth::user();
        return view("info.quees",compact('usuario'));

    }
    public function quebuscamos()
    {

        $usuario =Auth::user();
        return view("info.quebuscamos",compact('usuario'));

    }


    public function terminos()
    {

        $usuario =Auth::user();
        return view("info.terminos",compact('usuario'));

    }

    public function historia()
    {

        $usuario =Auth::user();
        return view("info.historia",compact('usuario'));

    }

    public function  tienda(){
        $usuario =Auth::user();
        return view("info.tienda",compact('usuario'));

    }

    public function  vender(){
        $usuario =Auth::user();
        return view("info.vender",compact('usuario'));

    }
    public function  consignacion(){
        $usuario =Auth::user();
        return view("info.consignacion",compact('usuario'));

    }


   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comprar($id)
    {
        return "aqui";

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
