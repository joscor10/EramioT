<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $table = "productos";

    protected $fillable = ['nombre', 'talla', 'precio', 'descripcion_larga', 'descripcion_corta', 'estado', 'precio_venta', 'categoria_id', 'genero_id', 'imagen', 'usuario_id'];


    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function genero()
    {
        return $this->hasOne(Genero::class, 'id', 'genero_id');
    }

    public function imagenes(){
        return $this->hasMany(Imagen::class, 'producto_id', 'id');
    }

}
