<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicoDoEstabelecimentoResource extends JsonResource
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
        'Id_servico' => $this->Id_servico,
        'Id_estabelecimento' => $this->Id_estabelecimento,
        'Valor' => $this->Valor,
        'Valor_desconto' => $this->Valor_desconto,
        'ApenasLocal' => $this->ApenasLocal,
        'Observacao' => $this->Observacao,
        'Ativo' => $this->Ativo,
        'Dt_bloqueio' => $this->Dt_bloqueio,
        ];
    }
}
