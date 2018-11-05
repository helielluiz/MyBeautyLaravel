<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgendamentoDoServicoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Id_atendente' => $this->Id_atendente,
            'Id_servico' => $this->Id_servico,
            'Id_estabelecimento' => $this->Id_estabelecimento,
            'Dt_agendamento' => $this->Dt_agendamento,
            'Status' => $this->Status,
            'Dt_execucao' => $this->Dt_execucao,
            'UsuarioDeExecucao' => $this->UsuarioDeExecucao,
        ];
    }
}
