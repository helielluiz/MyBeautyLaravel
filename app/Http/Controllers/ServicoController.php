<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Servico;
use App\Http\Resources\ServicoResource;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicoResource::collection(Servico::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = Servico::create([
            'Id_servico' => $request->Id_servico,
            'Nm_servico' => $request->Nm_servico,
        ]);

        return new ServicoResource($servico);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servico $servico)
    {
        return new ServicoResource($servico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $servico)
    {
        if($request->Id_servico !== $servico->Id_servico){
            return response()->json(['Erro' => 'Erro ao localizar Serviço'], 403);
        }

        $servico->update($request->only(['Nm_servico']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servico $servico)
    {
        $servico->delete();

        return response()->json(null, 204);
    }
}
