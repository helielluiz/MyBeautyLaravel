<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['Id_usuario','Id_grupodeusuario','Nr_cpf','Nm_usuario','Sexo','Email','Senha','ConfirmaSenha','Id_cidade','Dt_cadastro','Ativo','Dt_bloqueio','Observacao'];
    public $timestamps = false; 
}
