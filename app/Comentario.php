<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $timestamps = false;
    protected $table ="comentarios";

    protected $fillable =['comentario','usuario_id','producto_id'];

    public function usuario() {
        return $this->hasOne(Categoria::class, 'id', 'usuario_id');
    }

    public function producto() {
        return $this->hasOne(Genero::class, 'id', 'producto_id');
    }
}
