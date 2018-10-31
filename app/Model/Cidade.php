<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['Id_cidade','Nr_ibge','Nm_cidade','Id_estado'];
    public $timestamps = false; 
}
