<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ServicoDoEstabelecimento;
use App\Http\Resources\ServicoDoEstabelecimentoResource;

class ServicoDoEstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicoDoEstabelecimentoResource::collection(ServicoDoEstabelecimento::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicodoestabelecimento = ServicoDoEstabelecimento::create([
            'Id_servico' => $request->Id_servico,
			'Id_estabelecimento' => $request->Id_estabelecimento,
			'Valor' => $request->Valor,
			'Valor_desconto' => $request->Valor_desconto,
			'ApenasLocal' => $request->ApenasLocal,
			'Observacao' => $request->Observacao,
			'Ativo' => $request->Ativo,
			'Dt_bloqueio' => $request->Dt_bloqueio,
        ]);

        return new ServicoResource($servicodoestabelecimento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServicoDoEstabelecimento $servicodoestabelecimento)
    {
        return new ServicoResource($servicodoestabelecimento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicoDoEstabelecimento $servicodoestabelecimento)
    {
        if($request->Id_estabelecimento !== $servicodoestabelecimento->Id_estabelecimento){
            return response()->json(['Erro' => 'Erro ao localizar Serviço do Estabelecimento'], 403);
        }

        $servicodoestabelecimento->update($request->only(['Id_servico','Id_estabelecimento','Valor','Valor_desconto','ApenasLocal','Observacao','Ativo','Dt_bloqueio']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicoDoEstabelecimento $servicodoestabelecimento)
    {
        $servicodoestabelecimento->delete();

        return response()->json(null, 204);
    }
}
