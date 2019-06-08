<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $timestamps = false;
    protected $table ="generos";
     protected $fillable =['nombre','id'];
}
