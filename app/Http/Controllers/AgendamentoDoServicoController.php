<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AgendamentoDoServico;
use App\Http\Resources\AgendamentoDoServicoResource;

class AgendamentoDoServicoController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AgendamentoDoServicoResource::collection(AgendamentoDoServico::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agendamentodoservico = AgendamentoDoServico::create([

            'Id_atendente' => $request->Id_atendente,
            'Id_servico' => $request->Id_servico,
            'Id_estabelecimento' => $request->Id_estabelecimento,
            'Dt_agendamento' => $request->Dt_agendamento

        ]);

        return new AgendamentoDoServicoResource($agendamentodoservico);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AgendamentoDoServico $agendamentodoservico)
    {
        return new AgendamentoDoServicoResource($agendamentodoservico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgendamentoDoServico $agendamentodoservico)
    {
        if($request->Id_servico !== $agendamentodoservico->Id_servico){
            return response()->json(['Erro' => 'Erro ao localizar AgendamentoDoAgendamentoDoServicoResource'], 403);
        }

        $agendamentodoservico->update($request->only(['']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgendamentoDoServico $agendamentodoservico)
    {
        $agendamentodoservico->delete();

        return response()->json(null, 204);
    }
}
