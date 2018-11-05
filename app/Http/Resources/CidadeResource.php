<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CidadeResource extends JsonResource
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
            'Id_cidade' => $this->Id_cidade,
            'Nr_ibge' => $this->Nr_ibge,
            'Nm_cidade' => $this->Nm_cidade,
            'Id_estado' => $this->Id_estado,
        ];
    }
}
