<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Producto;
use Auth;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $productos= Producto::all();
         $usuario = Auth::user();
         return view('index',compact('productos','usuario'));
    }



   /*public function admin()
    {
        $usuario =Auth::user();
        return view('layouts.admin');
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

         $usuario =Auth::user();
         return view('layouts.admin',compact('usuario'));
         // return Redirect::to('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos=Producto::find($id);
        $usuario =Auth::user();
         return view("producto.view",compact('productos','usuario'));
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
