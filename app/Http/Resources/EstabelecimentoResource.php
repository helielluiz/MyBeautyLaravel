<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstabelecimentoResource extends JsonResource
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
            'Id_estabelecimento' => $this->Id_estabelecimento,
            'Nr_cpfcnpj' => $this->Nr_cpfcnpj,
            'Nm_estabelecimento' => $this->Nm_estabelecimento,
            'Endereco' => $this->Endereco,
            'Nr_estabelecimento' => $this->Nr_estabelecimento,
            'Complemento' => $this->Complemento,
            'Bairro' => $this->Bairro,
            'Cep' => $this->Cep,
            'Id_cidade' => $this->Id_cidade,
            'Nr_dddtelefone' => $this->Nr_dddtelefone,
            'Nr_telefone' => $this->Nr_telefone,
            'Nr_dddcelular' => $this->Nr_dddcelular,
            'Nr_celular' => $this->Nr_celular,
            'Email' => $this->Email,
            'Dt_cadastro' => $this->Dt_cadastro,
            'Ativo' => $this->Ativo,
            'Dt_bloqueio' => $this->Dt_bloqueio,
            'Observacao' => $this->Observacao,
            'HorarioInicial' => $this->HorarioInicial,
            'HorarioFinal' => $this->HorarioFinal,
        ];
    }
}
