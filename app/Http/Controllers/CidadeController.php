<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cidade;
use App\Http\Resources\CidadeResource;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CidadeResource::collection(Cidade::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cidade = Cidade::create([
            'Id_cidade' => $request->Id_cidade,
			'Nr_ibge' => $request->Nr_ibge,
			'Nm_cidade' => $request->Nm_cidade,
			'Id_estado' => $request->Id_estado,
        ]);

        return new CidadeResource($cidade);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        return new CidadeResource($cidade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        if($request->Id_cidade !== $cidade->Id_cidade){
            return response()->json(['Erro' => 'Erro ao localizar Serviço'], 403);
        }

        $cidade->update($request->only(['Nr_ibge','Nm_cidade','Id_estado']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        $cidade->delete();

        return response()->json(null, 204);
    }
}
