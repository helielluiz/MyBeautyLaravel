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
Route::post('Servico/{Servico}', 'ServicoController@store');

Route::apiResource('Cidade', 'CidadeController');
Route::post('Cidade/{Cidade}', 'CidadeController@store');

Route::apiResource('Estabelecimento', 'EstabelecimentoController');
Route::post('Estabelecimento/{Estabelecimento}', 'EstabelecimentoController@store');

Route::apiResource('ServicoDoEstabelecimento', 'ServicoDoEstabelecimentoController');
Route::post('ServicoDoEstabelecimento/{ServicoDoEstabelecimento}', 'ServicoDoEstabelecimentoController@store');

Route::apiResource('Estado', 'EstadoController');
Route::post('Estado/{Estado}', 'EstadoController@store');
Route::put('Estado/update', 'EstadoController@update');
Route::get('Estado/{Estado}', 'EstadoController@show');

