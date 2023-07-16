<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\{
Candidato,Professor,Turma,
Curso,Aluno,User,Comunicado,
};
use App\Traits\AnoLectivoTrait;

class InicioController extends Controller
{
    public function inicio()
    {
        //      #Alunos por ano
        if(count(Aluno::all())!=0){
            $dadosAlunos = Aluno::select([
                DB::raw('YEAR(created_at) as ano'),
                DB::raw('COUNT(*) as total')
            ])
            ->groupBy('ano')
            ->orderBY('ano', 'asc')
            ->get();

            //Percorrendo a cada posicao
            foreach($dadosAlunos as $alunos){
                $ano[] = $alunos->ano;
                $total[] = $alunos->total;
            }

            //Variaveis necessarias para o grafico
            $titulografAlunos= "ALUNOS POR ANO";
            $titulografAlunos2 = "";
            $titulo = "Alunos no Alda";
            $alunoAno = implode(',', $ano); 
            $alunoTotal = implode(',', $total);
        }else{
            $titulografAlunos= "";
            $titulografAlunos2 = "Gráfico indisponivel";
            $titulo = "";
            $alunoAno = ""; 
            $alunoTotal = "";
        }

        if(count(User::all())!=0){
            $totalUs = User::all()->count();

            $usCargos = User::select([
                DB::raw('cargo_usuario as cargo'),
                DB::raw('COUNT(*) as totalc')
            ])
            ->groupBY('cargo')
            ->orderBy('cargo', 'asc')
            ->get();

            //Percorrendo cada posicao 
            foreach($usCargos as $usCargo){
                $nomeCargo[] = "'".$usCargo->cargo."'";
                $totalCargo[] = $usCargo->totalc;
            }

            //Variaveis necessarias para o grafico
            $titulografUsuarios= "Cargos de usuarios";
            $titulografUsuarios2= "";
            $cargoNome = implode(',', $nomeCargo);
            $cargoTotal = implode(',', $totalCargo); 
        }else{
            $titulografUsuarios= "";
            $titulografUsuarios2 = "Gráfico indisponível";
            $totalUs = 0;
            $cargoNome = "";
            $cargoTotal = "";
        } 

        $comunicados = Comunicado::all();
        //dd($usCargos);
        //   return view('pagina-inicial', compact('alunoAno', 'alunoTotal'));

        return view('pagina-inicial', compact('comunicados','totalUs', 'titulo', 'alunoAno', 'alunoTotal', 'cargoNome', 'cargoTotal', 'titulografAlunos','titulografAlunos2', 'titulografUsuarios','titulografUsuarios2'));
        //redirect()->route('inicio');
    }

}
