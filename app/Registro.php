<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
     protected $fillable = [

        'nombre','apellido','cliente','telefono','correo','estado','cp','titular','p1','p2','p3','medio','cel','folio'

    ];
}
