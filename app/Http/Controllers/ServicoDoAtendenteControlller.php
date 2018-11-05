<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ServicoDoAtendente;
use App\Http\Resources\ServicoDoAtendenteResource;

class ServicoDoAtendenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicoDoAtendenteResource::collection(ServicoDoAtendente::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicodoatendente = ServicoDoAtendente::create([
            'Id_atendente' => $request->Id_atendente,
			'Id_servico' => $request->Id_servico,
			'Id_estabelecimento' => $request->Id_estabelecimento,
        ]);

        return new ServicoResource($servicodoatendente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServicoDoAtendente $servicodoatendente)
    {
        return new ServicoResource($servicodoatendente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicoDoAtendente $servicodoatendente)
    {
        if($request->Id_atendente !== $servicodoatendente->Id_atendente){
            return response()->json(['Erro' => 'Erro ao localizar Serviço do Atendente'], 403);
        }

        $servicodoatendente->update($request->only(['Id_servico','Id_estabelecimento']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicoDoAtendente $servicodoatendente)
    {
        $servicodoatendente->delete();

        return response()->json(null, 204);
    }
}
