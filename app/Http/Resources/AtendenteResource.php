<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AtendenteResource extends JsonResource
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
            'Id_estabelecimento' => $this->Id_estabelecimento,
            'Nm_atendente' => $this->Nm_atendente,
            'Observacao' => $this->Observacao,
            'Ativo' => $this->Ativo,
            'Dt_bloqueio' => $this->Dt_bloqueio,
        ];
    }
}
