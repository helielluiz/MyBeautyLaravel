<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GrupoDeUsuarioResource extends JsonResource
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
            'Id_grupodeusuario' => $this->Id_grupodeusuario,
            'Nm_grupodeusuario' => $this->Nm_grupodeusuario,
        ]);
    }
}
