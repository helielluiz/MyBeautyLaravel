<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GrupoDeUsuario extends Model
{
    protected $fillable = ['Id_grupodeusuario','Nm_grupodeusuario'];
    public $timestamps = false; 
}
