<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Atendente;
use App\Http\Resources\AtendenteResource;

class AtendenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AtendenteResource::collection(Atendente::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atendente = Atendente::create([
            'Id_atendente' => $request->Id_atendente,
			'Id_estabelecimento' => $request->Id_estabelecimento,
			'Nm_atendente' => $request->Nm_atendente,
			'Observacao' => $request->Observacao,
			'ATIVO' => $request->ATIVO,
			'Dt_bloqueio' => $request->Dt_bloqueio,
        ]);

        return new AtendenteResource($atendente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Atendente $atendente)
    {
        return new AtendenteResource($atendente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atendente $atendente)
    {
        if($request->Id_atendente !== $atendente->Id_atendente){
            return response()->json(['Erro' => 'Erro ao localizar Atendente'], 403);
        }

        $atendente->update($request->only(['Id_estabelecimento','Nm_atendente','Observacao','Ativo','Dt_bloqueio']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atendente $atendente)
    {
        $atendente->delete();

        return response()->json(null, 204);
    }
}
