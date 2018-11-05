<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\GrupoDeUsuario;
use App\Http\Resources\GrupoDeUsuarioResource;

class GrupoDeUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GrupoDeUsuarioResource::collection(GrupoDeUsuario::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupodeusuario = GrupoDeUsuario::create([
            'Id_grupodeusuario' => $request->Id_grupodeusuario,
			'Nm_grupodeusuario' => $request->Nm_grupodeusuario,
        ]);

        return new GrupoDeUsuarioResource($grupodeusuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GrupoDeUsuario $grupodeusuario)
    {
        return new GrupoDeUsuarioResource($grupodeusuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrupoDeUsuario $grupodeusuario)
    {
        if($request->Id_grupodeusuario !== $grupodeusuario->Id_grupodeusuario){
            return response()->json(['Erro' => 'Erro ao localizar Grupo de Usuario'], 403);
        }

        $grupodeusuario->update($request->only(['Nm_grupodeusuario']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrupoDeUsuario $grupodeusuario)
    {
        $grupodeusuario->delete();

        return response()->json(null, 204);
    }
}
