<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

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
Route::get('candidatos', [CandidatoController::class, 'pegarDadosCandidatos']);

Route::get('matriculados', [AlunoController::class, 'pegarDadosMatriculados']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

