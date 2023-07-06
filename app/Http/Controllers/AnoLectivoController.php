<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ano_lectivo;
use Illuminate\Http\Request;
use App\Traits\AnoLectivoTrait;
use App\Http\Requests\AnoLectivoRequest;
use App\Models\Trimestre;


class AnoLectivoController extends Controller
{
    public static function pegarPenultimoAnoLectivo()
    {
        $penultimoAno = Ano_lectivo::orderBy('ano_lectivo_id', 'desc')->skip(1)->first();
        return $penultimoAno->ano_lectivo_id;
    }

    public static function pegarIdAnoLectivo()
    {
        $ultimoAno = Ano_lectivo::orderBy('ano_lectivo_id', 'desc')
        ->first();
        return $ultimoAno->ano_lectivo_id;
    }

    public static function pegarAnoLectivo($id)
    {
        $ultimoAno = Ano_lectivo::orderBy('ano_lectivo_id', 'desc')
        ->where('ano_lectivo_id', $id)
        ->first();
        return $ultimoAno;
    }

    public function indexCadastroAnoLectivo(){
        $hora_inicio_manha = "07:10";
        $hora_fim_manha = "12:50";
        $intervalo_manha = "5";
        AnoLectivoTrait::calcularHoraTempos($hora_inicio_manha, $intervalo_manha, $hora_fim_manha);
        return view('ano-lectivo/criar-ano-lect');
    }

    public function store(AnoLectivoRequest $req){
        $request = $req->validated();
        //dd(date('Y', strtotime($request['data_inicio_ano_lectivo'])) . "-" . date('Y', strtotime($request['data_fim_ano_lectivo'])));
        $anoLectivo = [
            'ano_lectivo' => date('Y', strtotime($request['data_inicio_ano_lectivo'])) . "-" . date('Y', strtotime($request['data_fim_ano_lectivo'])),
            'status_ano_lectivo' => 1,
            'data_inicio_ano_lectivo' => $request['data_inicio_ano_lectivo'],
            'data_fim_ano_lectivo' => $request['data_fim_ano_lectivo'],
            'num_aluno_na_turma' => $request['num_aluno_na_turma'],
            'num_sala_escola' => $request['num_sala_escola'],
            'data_inicio_inscricao' => $request['data_inicio_inscricao'],
            'data_fim_inscricao' => $request['data_fim_inscricao'],
            'data_inicio_matricula' => $request['data_inicio_matricula'],
            'data_fim_matricula' => $request['data_fim_matricula'],
            'hora_inicio_manha' => $request['hora_inicio_manha'],
            'hora_fim_manha' => $request['hora_fim_manha'],
            'duracao_tempo_manha' => $request['duracao_tempo_manha'],
            'duracao_int_menor_manha' => $request['duracao_int_menor_manha'],
            'duracao_int_maior_manha' => $request['duracao_int_maior_manha'],
            'hora_inicio_tarde' => $request['hora_inicio_tarde'],
            'hora_fim_tarde' => $request['hora_fim_tarde'],
            'duracao_tempo_tarde' => $request['duracao_tempo_tarde'],
            'duracao_int_menor_tarde' => $request['duracao_int_menor_tarde'],
            'duracao_int_maior_tarde' => $request['duracao_int_maior_tarde'],
            'hora_inicio_noite' => $request['hora_inicio_noite'],
            'hora_fim_noite' => $request['hora_fim_noite'],
            'duracao_tempo_noite' => $request['duracao_tempo_noite'],
            'duracao_int_menor_noite' => $request['duracao_int_menor_noite'],
            'duracao_int_maior_noite' => $request['duracao_int_maior_noite'],
        ];

        $al = Ano_lectivo::where('status_ano_lectivo', 1)->first();
        if($al){
            $al->status_ano_lectivo = 0;
            $al->save();
        }

        $id = Ano_Lectivo::create($anoLectivo);
        //dd($id->ano_lectivo_id);
        $trimestre[0] = [
            'trimestre' => "1º",
            'status' => 0,
            'data_inicio' => $request['data_inicio1'],
            'data_fim' => $request['data_fim1'],
            'ano_lectivo_id' => $id->ano_lectivo_id
        ];
        $trimestre[1] = [
            'trimestre' => "2º",
            'status' => 0,
            'data_inicio' => $request['data_inicio2'],
            'data_fim' => $request['data_fim2'],
            'ano_lectivo_id' => $id->ano_lectivo_id
        ];
        $trimestre[2] = [
            'trimestre' => "3º",
            'status' => 0,
            'data_inicio' => $request['data_inicio3'],
            'data_fim' => $request['data_fim3'],
            'ano_lectivo_id' => $id->ano_lectivo_id
        ];

        $tr = Trimestre::where('status', 1)->first();
        if($tr){
            $tr->status = 0;
            $tr->save();
        }

        for($i = 0; $i < count($trimestre); $i++){
            Trimestre::create($trimestre[$i]);
        }

        //dd($trimestre);

        //Todas as funções que devem acontecer no inicio do ano lectivo devem estar abaixo deste comentário
        AlunoTurmaController::alunoAnolectivo(); // Criar turma automaticamente
        AlunoTurmaController::situacaoAluno(); // Atribuir turmas aos alunos da 11ª em diante.

        return redirect()->route('ano.lectivo')->with('sucesso', "Ano lectivo criado com sucesso.");
    }

    public function index(){
        $anoLectivo = Ano_lectivo::all()->toArray();
        return view('ano-lectivo/ano-lect', compact('anoLectivo'));
    }

    public function indexUpdate($id){
        $anoLectivo = Ano_lectivo::where('ano_lectivo_id', $id)->get()->toArray();
        if(count($anoLectivo) > 0 && $anoLectivo[0]['status_ano_lectivo'] == 1){
            $trimestre = Trimestre::where('ano_lectivo_id', $anoLectivo[0]['ano_lectivo_id'])->get()->toArray();
            return view('ano-lectivo/edit-ano-letivo', compact(['anoLectivo', 'trimestre']));
        } else{
            return redirect()->route('ano.lectivo')->with('erro', 'O ano lectivo seleccionado está inactivo.');
        }
    }

    public function update(AnoLectivoRequest $req){
        $request = $req->validated();
        //dd($request);
        $verif = Ano_lectivo::where('data_inicio_ano_lectivo', $request['data_inicio_ano_lectivo'])->get()->first()->toArray();
        if(count($verif) > 0 && $verif[0]['ano_lectivo_id'] =! $request['id']){
            return redirect()->back()->with('erro', 'Este ano lectivo já existe.');
        } else{
            $anoLectivo = [
                'ano_lectivo' => $request['ano_lectivo'],
                'status_ano_lectivo' => 1,
                'data_inicio_ano_lectivo' => $request['data_inicio_ano_lectivo'],
                'data_fim_ano_lectivo' => $request['data_fim_ano_lectivo'],
                'num_aluno_na_turma' => $request['num_aluno_na_turma'],
                'num_sala_escola' => $request['num_sala_escola'],
                'data_inicio_inscricao' => $request['data_inicio_inscricao'],
                'data_fim_inscricao' => $request['data_fim_inscricao'],
                'data_inicio_matricula' => $request['data_inicio_matricula'],
                'data_fim_matricula' => $request['data_fim_matricula'],
                'hora_inicio_manha' => $request['hora_inicio_manha'],
                'hora_fim_manha' => $request['hora_fim_manha'],
                'duracao_tempo_manha' => $request['duracao_tempo_manha'],
                'duracao_int_menor_manha' => $request['duracao_int_menor_manha'],
                'duracao_int_maior_manha' => $request['duracao_int_maior_manha'],
                'hora_inicio_tarde' => $request['hora_inicio_tarde'],
                'hora_fim_tarde' => $request['hora_fim_tarde'],
                'duracao_tempo_tarde' => $request['duracao_tempo_tarde'],
                'duracao_int_menor_tarde' => $request['duracao_int_menor_tarde'],
                'duracao_int_maior_tarde' => $request['duracao_int_maior_tarde'],
                'hora_inicio_noite' => $request['hora_inicio_noite'],
                'hora_fim_noite' => $request['hora_fim_noite'],
                'duracao_tempo_noite' => $request['duracao_tempo_noite'],
                'duracao_int_menor_noite' => $request['duracao_int_menor_noite'],
                'duracao_int_maior_noite' => $request['duracao_int_maior_noite'],
            ];

            $trimestre[0] = [
                'trimestre' => "1º",
                'status' => 0,
                'data_inicio' => $request['data_inicio1'],
                'data_fim' => $request['data_fim1'],
            ];
            $trimestre[1] = [
                'trimestre' => "2º",
                'status' => 0,
                'data_inicio' => $request['data_inicio2'],
                'data_fim' => $request['data_fim2'],
            ];
            $trimestre[2] = [
                'trimestre' => "3º",
                'status' => 0,
                'data_inicio' => $request['data_inicio3'],
                'data_fim' => $request['data_fim3'],
            ];

            Ano_Lectivo::where('ano_lectivo_id', $request['id'])->update($anoLectivo);
            $t = Trimestre::where('ano_lectivo_id', $request['id'])->get();
            $t[0]->update($trimestre[0]);
            $t[1]->update($trimestre[1]);
            $t[2]->update($trimestre[2]);

            return redirect()->route('ano.lectivo')->with('sucesso', 'Ano lectivo actualizado com sucesso.');
        }
    }

    public function delete($id){
        $anoLectivo = Ano_lectivo::where('ano_lectivo_id', $id)->get();
        if($anoLectivo[0]->status_ano_lectivo === 1){
            return redirect()->route('ano.lectivo')->with('erro', "Não pode eliminar um ano lectivo em curso!");
        }
        Ano_lectivo::where('ano_lectivo_id', $id)->delete();
        return redirect()->route('ano.lectivo')->with('sucesso', "Ano lectivo eliminado com sucesso!");
    }
    public static function pegarNumVagas()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->num_aluno_na_turma;
    }

    public static function pegarDataFimInscricao()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->data_fim_inscricao;
    }
}
