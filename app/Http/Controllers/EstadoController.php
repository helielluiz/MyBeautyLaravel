<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Estado;
use App\Http\Resources\EstadoResource;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstadoResource::collection(Estado::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado = Estado::create([
            'Id_estado' => $request->Id_estado,
            'Nm_estado' => $request->Nm_estado,
            'Nm_uf' => $request->Nm_uf,
        ]);

        return new EstadoResource($estado);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return new EstadoResource($estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        if($request->Id_estado !== $estado->Id_estado){
            return response()->json(['Erro' => 'Erro ao localizar Estado'], 403);
        }

        $estado->update($request->only(['Nm_estado','Nm_uf']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();

        return response()->json(null, 204);
    }
}
