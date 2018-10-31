<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServicoDoAtendente extends Model
{
    protected $fillable = ['Id_atendente','Id_servico','Id_estabelecimento',];
    public $timestamps = false; 
}
