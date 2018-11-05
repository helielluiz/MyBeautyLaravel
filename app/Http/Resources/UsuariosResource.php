<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuariosResource extends JsonResource
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
            'Id_usuario' => $this->Id_usuario,
            'Id_grupodeusuario' => $this->Id_grupodeusuario,
            'Nr_cpf' => $this->Nr_cpf,
            'Nm_usuario' => $this->Nm_usuario,
            'Sexo' => $this->Sexo,
            'Email' => $this->Email,
            'Senha' => $this->Senha,
            'ConfirmaSenha' => $this->ConfirmaSenha,
            'Id_cidade' => $this->Id_cidade,
            'Dt_cadastro' => $this->Dt_cadastro,
            'Ativo' => $this->Ativo,
            'Dt_bloqueio' => $this->Dt_bloqueio,
            'Observacao' => $this->Observacao,
        ];
    }
}
