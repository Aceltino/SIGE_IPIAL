<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Models\{
Candidato,Professor,Turma,
Curso,Aluno,User,Comunicado,Ano_lectivo,Trimestre, AnoTurmaCood,
};
use App\Traits\AnoLectivoTrait;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class InicioController extends Controller
{
    public function inicio()
    {
        //  #API GERAL DO SISTEMA
        // Criando uma instância do GuzzleHttp\Client
        $client = new Client();

        // Fazendo a requisição para a API local
        $response = $client->get('http://sige_ipial.test/api/settings');

        // Obtendo o corpo da resposta como uma string JSON
        $json = $response->getBody()->getContents();

        // Convertendo o JSON em um array associativo
        $data = json_decode($json, true);

        //  #Buscas  para limentar o grafico
        //      Buscand os alunos por ano
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

        //      Buscand os usuarios
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

        //Busca pelos comunicados
        $comunicados = Comunicado::latest()->paginate(1);


        $anolectivoatual = Ano_lectivo::where('status_ano_lectivo', 1)->get();
        $trimestres = Trimestre::where('status', 1)->get();
        if(count($trimestres) < 1){
            $totalCursos = 0;
            $cusosInicio = [];
            $anolectivoInicio = 0;
            $trimestreInicio= 'Sem trimestre';
        }

        if(count(Ano_lectivo::all())!=0){
            foreach($anolectivoatual as $anolectivoald)
                if($anolectivoald->status_ano_lectivo == 1)
                    $anolectivoInicio = $anolectivoald->ano_lectivo;

            foreach($trimestres as $trimestre)
            if($trimestre->status == 1)
                $trimestreInicio = $trimestre->trimestre;
                // dd($trimestre->trimestre);
            $totalCursos = Curso::all()->count();
            $cusosInicio =  Curso::all();
// dd($trimestreInicio);


        }else{
            $totalCursos = 0;
            $cusosInicio = [];
            $anolectivoInicio = 0;
            $trimestreInicio= 'Sem trimestre';
        }

        //  #Fazendo a consulta das estatisticas total do sistema

        if(count(Ano_lectivo::all())!=0){
            //Pegando o ano lectivo ativo no sistema
            $anoLectivo_Activo = Ano_lectivo::where('status_ano_lectivo', 1)->first();
            // dd($anoLectivo_Activo);
            // dd($anoLectivo_Activo);
            if(!$anoLectivo_Activo)
            {
                return redirect()->route('cadastro.ano.lectivo')->with('Erro','Precisa criar um novo ano lectivo!');
            }
            $ano_lectivo_id = $anoLectivo_Activo->ano_lectivo_id;

            if($ano_lectivo_id!=""){

                                    //Pegando as turmas
                $turmainicios = AnoTurmaCood::where('ano_lectivo_id', $ano_lectivo_id)->get();
                $TotalTurmas = 0;
                foreach($turmainicios as $turmainicio){
                        $TotalTurmas += 1;
                }

                //Pegando os Profs
                $professores = AnoTurmaCood::where('ano_lectivo_id', $ano_lectivo_id)->get();
                $TotalProfs = 0;

                foreach($professores as $prof){
                        $TotalProfs += 1;
                }


                //Pegando os candidatos
                $candiAnoLecticvo = Candidato::where('ano_lectivo_id', $ano_lectivo_id)->get();

                $TotalCandidatos = count($candiAnoLecticvo);

                //Pegando o total de alunos admitidos, nao admitidos e matriculados
                $candiadmitAno = Candidato::where('ano_lectivo_id', $ano_lectivo_id)->get();
                $TotalAdmitidos = 0;
                $TotalMatriculados = 0;
                $TotalNAdmitidos=0;

                foreach($candiadmitAno as $candiadmit){
                    if($candiadmit->status == "Admitido"){
                        $TotalAdmitidos += 1;

                    }elseif($candiadmit->status == "Matriculado"){
                        $TotalMatriculados += 1;
                    }elseif($candiadmit->status == "Não admitido"){
                        $TotalNAdmitidos += 1;
                    }
                }

            }else {
                $candiCount = 0;
                $TotalNAdmitidos = 0;
                $TotalAdmitidos= 0;
                $TotalMatriculados =0;
            }

        }


        return view('pagina-inicial', compact('TotalCandidatos', 'TotalAdmitidos','TotalNAdmitidos','TotalMatriculados','TotalTurmas','TotalProfs','anolectivoInicio','trimestreInicio','cusosInicio','comunicados', 'totalCursos','totalUs', 'titulo', 'alunoAno', 'alunoTotal', 'cargoNome', 'cargoTotal', 'titulografAlunos','titulografAlunos2', 'titulografUsuarios','titulografUsuarios2','data'));

    }


}
