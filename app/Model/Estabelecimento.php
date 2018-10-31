<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $fillable = ['Id_estabelecimento','Nr_cpfcnpj','Nm_estabelecimento','Endereco','Nr_estabelecimento','Complemento','Bairro','Cep','Id_cidade','Nr_dddtelefone','Nr_telefone','Nr_dddcelular','Nr_celular','Email','Dt_cadastro','Ativo','Dt_bloqueio','Observacao','HorarioInicial','HorarioFinal',];
    public $timestamps = false; 
}
