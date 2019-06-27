<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
Use App\Producto;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "funciona";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         Auth::logout();

        $productos= Producto::where('aprobado',1)->get();
         $usuario =Auth::user();
        return Redirect::to('/')->with(compact('productos','usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('contrasena')])){

               //return Redirect::to('admin');
        $productos= Producto::all();
         $usuario =Auth::user();
        return Redirect::to('/')->with(compact('productos','usuario'));
        }
       //Session:flash('message-error','Datos incorrectos');
        //return Redirect::to('/');
        return 'Error';
    }

 /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function salir()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
