<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
     public $timestamps = false;
    protected $table ="usuarios";

    protected $fillable =['nombre','apellido', 'usuario','identificacion','email','password','tipo'];
}
