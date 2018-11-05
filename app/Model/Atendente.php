<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    protected $fillable = ['Id_atendente','Id_estabelecimento','Nm_atendente','Observacao','Ativo','Dt_bloqueio',];
    public $timestamps = false; 
    protected $table = 'Atendente';
}
