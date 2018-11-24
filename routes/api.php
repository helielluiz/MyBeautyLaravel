<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('Servico', 'ServicoController');
Route::apiResource('ServicoDoEstabelecimento', 'ServicoDoEstabelecimentoController');
Route::apiResource('Cidade', 'CidadeController');
Route::apiResource('Estabelecimento', 'EstabelecimentoController');
Route::apiResource('Atendente', 'AtendenteController');
Route::apiResource('AgendamentoDoServico', 'AgendamentoDoServicoController');
Route::apiResource('Estado', 'EstadoController');

