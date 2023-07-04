<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Models\Curso;

class ProcessoController extends Controller
{
    public function index()
    {
        $candidatos = $this->buscarCandidato();
        return view('processo.processos', ['candidatos'=>$candidatos ]) ;
    }
    public function buscarCandidato()
    {
        $candidatos = Candidato::with('pessoa', 'escola')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where(function ($query) {
            $query->where('status', 'admitido')
                  ->orWhere('status', 'matriculado');
        })->get();

        $dadosCandidatos = [];

        foreach ($candidatos as $candidato)
        {
            $dadosCandidatos[] =
            [
                'Nome' => $candidato->pessoa->nome_completo,
                'num_bi' => $candidato->pessoa->num_bi,
                'Processo' => $candidato->escola->num_processo,
                'Turno' => $candidato->escola->turno,
                'Turma' => $candidato->escola->turma_aluno,
                'Curso' => $candidato->cursoAdmitido,
            ];
        }
            return $candidatos;
    }
    public function destroy($candidato_id)
    {
        Candidato::where('candidato_id',$candidato_id)->delete();
        return redirect()->route('processo.consultar');

    }
}
