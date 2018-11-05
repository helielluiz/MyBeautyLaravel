<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicoDoAtendenteResource extends JsonResource
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
        ];
    }
}
