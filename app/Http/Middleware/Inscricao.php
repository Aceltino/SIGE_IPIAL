<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AnoLectivoController;
use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Inscricao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $anoLectivo = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
        $dataInicioIncricao = Carbon::parse($anoLectivo->data_inicio_inscricao);
        $dataFimIncricao = Carbon::parse($anoLectivo->data_fim_inscricao);
        $dataAtual = Carbon::now();
        // dd($dataAtual, $dataFimIncricao, $dataInicioIncricao);

        if( $dataAtual < $dataInicioIncricao || $dataAtual > $dataFimIncricao )
        {
            return redirect()->back()->with('Erro', 'Não está na epoca de inscrição.');
        }
        return $next($request);
    }
}
