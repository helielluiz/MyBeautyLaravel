<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServicoDoEstabelecimento extends Model
{
    protected $fillable = ['Id_servico','Id_estabelecimento','Valor','Valor_desconto','ApenasLocal','Observacao','Ativo','Dt_bloqueio',];
    public $timestamps = false; 
}
