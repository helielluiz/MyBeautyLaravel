<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AgendamentoDoServico extends Model
{
    protected $fillable = ['Id_atendente','Id_servico','Id_estabelecimento','Dt_agendamento','Status','Dt_execucao','UsuarioDeExecucao',];
    public $timestamps = false; 
}