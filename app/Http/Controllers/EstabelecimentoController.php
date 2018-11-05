<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Estabelecimento;
use App\Http\Resources\EstabelecimentoResource;

class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstabelecimentoResource::collection(Estabelecimento::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estabelecimento = Estabelecimento::create([
        	'Id_estabelecimento' => $request->Id_estabelecimento,
			'Nr_cpfcnpj' => $request->Nr_cpfcnpj,
			'Nm_estabelecimento' => $request->Nm_estabelecimento,
			'Endereco' => $request->Endereco,
			'Nr_estabelecimento' => $request->Nr_estabelecimento,
			'Complemento' => $request->Complemento,
			'Bairro' => $request->Bairro,
			'Cep' => $request->Cep,
			'Id_cidade' => $request->Id_cidade,
			'Nr_dddtelefone' => $request->Nr_dddtelefone,
			'Nr_telefone' => $request->Nr_telefone,
			'Nr_dddcelular' => $request->Nr_dddcelular,
			'Nr_celular' => $request->Nr_celular,
			'Email' => $request->Email,
			'Dt_cadastro' => $request->Dt_cadastro,
			'Ativo' => $request->Ativo,
			'Dt_bloqueio' => $request->Dt_bloqueio,
			'Observacao' => $request->Observacao,
			'HorarioInicial' => $request->HorarioInicial,
			'HorarioFinal' => $request->HorarioFinal,
        ]);

        return new EstabelecimentoResource($estabelecimento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estabelecimento $estabelecimento)
    {
        return new EstabelecimentoResource($estabelecimento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estabelecimento $estabelecimento)
    {
        if($request->Id_estabelecimento !== $estabelecimento->Id_estabelecimento){
            return response()->json(['Erro' => 'Erro ao localizar Estabelecimento'], 403);
        }

        $estabelecimento->update($request->only(['Nr_cpfcnpj','Nm_estabelecimento','Endereco','Nr_estabelecimento','Complemento','Bairro','Cep','Id_cidade','Nr_dddtelefone','Nr_telefone','Nr_dddcelular','Nr_celular','Email','Dt_cadastro','Ativo','Dt_bloqueio','Observacao','HorarioInicial','HorarioFinal']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estabelecimento $estabelecimento)
    {
        $estabelecimento->delete();

        return response()->json(null, 204);
    }
}
