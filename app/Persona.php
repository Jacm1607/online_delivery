<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'tbl_persona';
    protected $fillable=['nombre','apellido','celular','celular2','direccion','ubicacion'];
}
