<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public $timestamps = false;
    protected $table ="imagenes";

    protected $fillable =['nombre','producto_id'];


    public function producto() {
        return $this->hasOne(Producto::class, 'id', 'producto_id');
    }
}
