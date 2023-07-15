<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\{
    Candidato,
    Professor,
    Turma,
    Curso,
    Aluno,
    User,
};
use App\Traits\AnoLectivoTrait;

class InicioController extends Controller
{
    public function inicio(){

        //Consultando a tabela dos candidatos
        $inscritos = Candidato::all();
        $totalinscritos = 0;

        //Contando cada registro da tabela candidatos
        foreach($inscritos as $inscrit)
            $totalinscritos +=1;

        //Consultando a tabela dos candidatos para os Admitidos
        $admitidos = Candidato::all();
        $totaladmitidos = 0;

        //Contando cada registro da tabela candidatos para os Admitidos
        foreach($admitidos as $admitid)
            //filtrando candidatos com o estado de Admitido
            if($admitid->status == "Admitido")
                $totaladmitidos +=1;

       // Consultando a tabela dos candidatos para os Nao Admitidos
        $nadmitidos = Candidato::all();
        $totalnadmitidos = 0;

        //Contando cada registro da tabela candidatos com o estado de Nao admitidos
        foreach($nadmitidos as $nadmitid)
            //filtrando candidatos com o estado de Não admitido
            if($nadmitid->status == "Não admitido")
                $totalnadmitidos +=1;

        // Consultando a tabela dos candidatos para os Matriculados
        $matriculados = Candidato::all();
        $totalmatriculados = 0;

        //Contando cada registro da tabela candidatos com o Matriculados
        foreach($matriculados as $matriculad)
            //filtrando candidatos com o estado de Matriculado
            if($matriculad->status == "Matriculado")
                $totalmatriculados +=1;

        //Consultando a tabela dos professores
        $professores = Professor::all();
        $totalprofessores = 0;

        //Contando cada registro da tabela professores
        foreach($professores as $prof)
            $totalprofessores +=1;

        //Consultando a tabela dos turmas
        $turmas = Turma::all();
        $totalturmas = 0;

        //Contando cada registro da tabela turmas
        foreach($turmas as $turm)
            $totalturmas +=1;

        //Consultando a tabela dos cursos
        $cursos = Curso::all();
        $totalcursos = 0;

        //Contando cada registro da tabela cursos
        foreach($cursos as $curs)
            $totalcursos +=1;

            //      #Alunos por ano

        //Consulta do sql para o Grafico de representacao dos alunos
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
        $titulo = "Alunos no Alda";
        $alunoAno = implode(',', $ano);
        $alunoTotal = implode(',', $total);

        //          #Cargos do usuario
        //Pegando os usuarios pelos seus cargos
//        $usCargos = User::all();
//        $totalUs = User::all()->count();
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
      /*      $nomeCargo[] = "'".$usCargo->cargo_usuario."'";
            $totalCargo[] = User::where('cargo_usuario', $usCargo->cargo_usuario)->count();*/
        }

        //Variaveis necessarias para o grafico
        $cargoNome = implode(',', $nomeCargo);
        $cargoTotal = implode(',', $totalCargo);

        //dd($usCargos);
     //   return view('pagina-inicial', compact('alunoAno', 'alunoTotal'));



        return view('pagina-inicial', compact('totalinscritos', 'totaladmitidos', 'totalnadmitidos', 'totalmatriculados', 'totalprofessores', 'totalturmas', 'totalcursos', 'totalUs', 'titulo', 'alunoAno', 'alunoTotal', 'cargoNome', 'cargoTotal'));
        //redirect()->route('inicio');
    }

}
