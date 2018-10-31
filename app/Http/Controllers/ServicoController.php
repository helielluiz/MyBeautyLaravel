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
            'id_servico' => $request->id_servico,
            'nm_servico' => $request->nm_servico,
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
        if($request->id_servico !== $servico->id_servico){
            return response()->json(['Erro' => 'Erro ao localizar Serviço'], 403);
        }

        $servico->update($request->only(['nm_servico']));
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
