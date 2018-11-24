<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    protected $fillable = ['Id_atendente','Id_estabelecimento','Nm_atendente','Observacao','ATIVO','Dt_bloqueio',];
    public $timestamps = false; 
    protected $table = 'Atendente';
}
