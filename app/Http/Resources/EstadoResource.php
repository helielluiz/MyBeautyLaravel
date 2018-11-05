<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstadoResource extends JsonResource
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
        'Id_estado' => $this->Id_estado,
        'Nm_estado' => $this->Nm_estado,
        'Nm_uf' => $this->Nm_uf,
        ];
    }
}
