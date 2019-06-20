<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $timestamps = false;
    protected $table ="comentarios";

    protected $fillable =['comentario','producto_id','usuario_id'];

    public function user() {
        return $this->hasOne(Usuario::class, 'id', 'usuario_id');
    }

    public function producto() {
        return $this->hasOne(Producto::class, 'id', 'producto_id');
    }
}
