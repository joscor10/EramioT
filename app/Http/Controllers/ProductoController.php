<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Imagen;
use Illuminate\Http\Request;
Use App\Producto;
use App\Categoria;
use App\Genero;
use Session;
use Redirect;
use Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productos= Producto::where('usuario_id',Auth::user()->id)->paginate(4);

         $categorias= Categoria::pluck('nombre','id');
       $generos= Genero::pluck('nombre','id');
        $usuario =Auth::user();
         return view('producto.index',compact('productos','categorias','generos','usuario'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias= Categoria::pluck('nombre','id');
       $generos= Genero::pluck('nombre','id');
       $usuario =Auth::user();
       return view('producto.create', compact('categorias','generos','usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name='';


       /* if($request->hasFile('imagen')) {

            $file=$request->file('imagen');
            $name =time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$name);
        }*/

        $producto= Producto::create([
             'nombre'=>$request["nombre"],
             'talla'=>$request["talla"],
             'precio'=>$request['precio'],
              'descripcion_larga'=>$request['descripcion_larga'],
             'descripcion_corta'=>$request['descripcion_corta'],
               'estado'=>$request['estado'],
              'precio_venta'=>$request['precio_venta'],
             'categoria_id'=>$request['categoria_id'],
             'genero_id'=>$request['genero_id'],
             'imagen'=>$name,
             'usuario_id'=>Auth::user()->id
        
            
        ]);


         foreach ($request->file('imagen') as $imagen){

           //  $file=$request->file($imagen);
             $name =time().$imagen->getClientOriginalName();
             $imagen->move(public_path().'/imagenes/',$name);

             Imagen::create([
                 'nombre'=>$name,
                 'producto_id'=>$producto->id

             ]);
         }







       Session::flash('message','Producto Creado Correctamente');

        return redirect('/producto');
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
         $producto=Producto::find($id);
          $categorias= Categoria::pluck('nombre','id');
       $generos= Genero::pluck('nombre','id');
       $usuario =Auth::user();
        return view('producto.edit',['producto'=>$producto],compact('categorias','generos','usuario'));
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
        $producto=Producto::find($id);
        $producto->fill($request->all());
        $producto->save();
        Session::flash('message','Producto Editado Correctamente');

        return redirect('/producto'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comentario::where('producto_id',$id)->delete();
        Imagen::where('producto_id',$id)->delete();
        Producto::destroy($id);

        Session::flash('message','Producto Eliminado Correctamente');

        return redirect('/producto');  
    }
}
