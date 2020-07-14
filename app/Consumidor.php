<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    protected $table = 'tbl_usuario';

    protected $fillable=['nombre','apellido','celular','celular2','direccion','email'];
}
