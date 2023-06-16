<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Area_formacao;
use App\Models\Pessoa;
use App\Traits\CursoTrait;



class CursoController extends Controller
{

    public static function pegarIdCurso($nomeCurso):int
    {
        $idCurso = Curso::where('nome_curso', $nomeCurso)->pluck('curso_id')->first();
        return $idCurso;
    }

    public static function pegarNomeCurso()
    {
        $cursos = Curso::all(['curso_id', 'nome_curso']);
        $nomesCursos = $cursos->pluck('nome_curso')->toArray();
        return $nomesCursos;
    }

    public static function quantidadeCurso()
    {
        $cursos = count(Curso::all());
        return $cursos;
    }

    public function indexCadastro()
    {
        //Retorno dos dados para o preenchimento dos selects na view do cadastro do curso
        $coordenador = Professor::where('cargo', "Coordenador Curso")->get()->toArray();

        $pessoa = Pessoa::all()->toArray();
        $areaFormacao = Area_formacao::all();
        $dados = array();

        for ($i=0; $i < count($coordenador); $i++) {
            for ($j=0; $j <= count($coordenador); $j++) {
                if ($coordenador[$i]['pessoa_id'] == $pessoa[$j]['pessoa_id']) {
                    $dados[$i]['coordenador_id'] = $coordenador[$i]['professor_id'];
                    $dados[$i]['nome_completo'] = $pessoa[$j]['nome_completo'];
                }
            }

        } //dd($dados);
        return view('curso/criar-curso', compact(['dados', 'areaFormacao']));
    }

    public function store(Request $request){

        if(isset($request->nome_curso) && isset($request->area_formacao) && isset($request->coordenador) && isset($request->sigla_curso)){
            if(!empty($request->nome_curso) && !empty($request->nome_curso) && !empty($request->nome_curso) && !empty($request->nome_curso)){
                $curso = CursoTrait::checkName($request->nome_curso);
                if(isset($curso['erro'])){
                    return CursoTrait::erro($curso['erro']);
                }
                if(isset($curso['curso'])){
                    $cr = $curso['curso'];
                    $sigla = CursoTrait::checkSigla($request->sigla_curso);
                    if(isset($sigla['erro'])){
                        return CursoTrait::erro($curso['erro']);
                    }
                    if(isset($sigla['sigla'])) {
                        $sg = $sigla['sigla'];
                        $dados = Curso::where('nome_curso', $curso['curso'])->get()->toArray();
                        //dd($dados);
                        if(count($dados) > 0){
                            return redirect()->back()->with("erro", "Este curso já se encontra cadastrado!");
                        } else{
                            $dados = Professor::where('professor_id', $request->coordenador)->get()->toArray();
                            if(count($dados) > 0 && ($dados[0]['curso_id'] > 0 || ($dados[0]['area_formacao_id'] > 0))){
                                return redirect()->back()->with("erro", "Este coordenador já coordena um departamento!");
                            } else{
                                $dados = [
                                    'nome_curso' => $cr['nome'],
                                    'sigla' => $sg['sigla'],
                                    'area_formacao_id' => $request->area_formacao,
                                    'professor_id' => $request->coordenador
                                ];
                                Curso::create($dados);
                                return redirect()->back()->with("sucesso", "Curso criado com sucesso!");
                            }
                        }
                        dd($dados);
                    }
                }
            }

        } else{
            return redirect()->back()->with("erro", "Preencha todos os campos!");
        }
    }

    public function index(){
        $coordenador = Professor::where('cargo', "Coordenador Curso")->get()->toArray();
        $pessoa = Pessoa::all()->toArray();
        $areaFormacao = Area_formacao::all();
        $cursos = Curso::all()->toArray();
        //dd($cursos->toArray());
        for ($i=0; $i < count($coordenador); $i++) {
            for ($j=0; $j <= count($coordenador); $j++) {
                if ($coordenador[$i]['pessoa_id'] == $pessoa[$j]['pessoa_id']) {
                    $dados[$i]['coordenador_id'] = $coordenador[$i]['professor_id'];
                    $dados[$i]['nome_completo'] = $pessoa[$j]['nome_completo'];
                }
            }
        }

        for ($i=0; $i < count($cursos); $i++) {
            $dd[$i]['curso_id'] = $cursos[$i]['curso_id'];
            $dd[$i]['nome_curso'] = $cursos[$i]['nome_curso'];
            $dd[$i]['sigla'] = $cursos[$i]['sigla'];
            $dd[$i]['area_formacao_id'] = $cursos[$i]['area_formacao_id'];
            $areaForm = Area_formacao::where('area_formacao_id', $dd[$i]['area_formacao_id'])->get()->toArray();
            $dd[$i]['nome_area_formacao'] = $areaForm[0]['nome_area_formacao'];
            $prof = Professor::where('curso_id', $cursos[$i]['curso_id'])->get()->toArray();
            $pess = Pessoa::where('pessoa_id', $prof[0]['pessoa_id'])->get()->toArray();
            $dd[$i]['nome_coordenador'] = $pess[0]['nome_completo'];
        }
        $cursoGeral = $dd;

        return view('curso/cursos', compact(['dados', 'areaFormacao', 'cursoGeral']));
    }

    public function indexEditar($id){

        $coordenador = Professor::where('cargo', "Coordenador Curso")->get()->toArray();
        $pessoa = Pessoa::all()->toArray();
        $areaFormacao = Area_formacao::all();
        $cursos = Curso::all()->toArray();

        for ($i=0; $i < count($coordenador); $i++) {

            for ($j=2; $j <= count($coordenador); $j++) {

                if ($coordenador[$i]['pessoa_id'] == $pessoa[$j]['pessoa_id']) {
                    $valores[$i]['coordenador_id'] = $coordenador[$i]['professor_id'];
                    $valores[$i]['nome_completo'] = $pessoa[$j]['nome_completo'];
                    dd( $valores[$i]['professor_id']);
                }
            }
        }//dd($valores);

        $dados = Curso::where('curso_id', $id)->get();
        $dd['curso_id'] = $dados[0]['curso_id'];

        $dd['nome_curso'] = $dados[0]['nome_curso'];
        $dd['sigla'] = $dados[0]['sigla'];
        $dd['area_formacao_id'] = $dados[0]['area_formacao_id'];
        $areaForm = Area_formacao::where('area_formacao_id', $dados[0]['area_formacao_id'])->get()->toArray();
        $dd['nome_area_formacao'] = $areaForm[0]['nome_area_formacao'];
        $prof = Professor::where('curso_id', $dados[0]['curso_id'])->get()->toArray();
        $dd['coordenador_id'] = $prof[0]['professor_id'];
        $pess = Pessoa::where('pessoa_id', $prof[0]['pessoa_id'])->get()->toArray();
        $dd['nome_coordenador'] = $pess[0]['nome_completo'];
        dd($valores);
        return view('curso/edit-curso', compact(['valores', 'areaFormacao', 'dd']));
    }

    public function update(Request $request){
        if(isset($request->nome_curso) && isset($request->area_formacao) && isset($request->coordenador) && isset($request->sigla_curso)){
            if(!empty($request->nome_curso) && !empty($request->nome_curso) && !empty($request->nome_curso) && !empty($request->nome_curso)){
                $curso = CursoTrait::checkName($request->nome_curso);
                if(isset($curso['erro'])){
                    return CursoTrait::erro($curso['erro']);
                }
                if(isset($curso['curso'])){
                    $cr = $curso['curso'];
                    $sigla = CursoTrait::checkSigla($request->sigla_curso);
                    if(isset($sigla['erro'])){
                        return CursoTrait::erro($curso['erro']);
                    }
                    if(isset($sigla['sigla'])) {
                        $sg = $sigla['sigla'];
                        $dados = Curso::where('nome_curso', $curso['curso']['nome'])->get()->toArray();
                        if(count($dados) > 0 && $dados[0]['curso_id'] != $request->id){
                            return redirect()->back()->with("erro", "Este curso já se encontra cadastrado!");
                        } else{
                            $dados = Curso::where('professor_id', $request->coordenador)->get()->toArray();
                            if(count($dados) > 0 && $dados[0]['curso_id'] != $request->id){
                                return redirect()->back()->with("erro", "Este coordenador já coordena um departamento!");
                            } else{
                                $dados = [
                                    'nome_curso' => $cr['nome'],
                                    'sigla' => $sg['sigla'],
                                    'area_formacao_id' => $request->area_formacao,
                                    'professor_id' => $request->coordenador
                                ];

                                Curso::where('curso_id', $request->id)->update($dados);
                                return redirect()->route('consultar.cursos')->with('sucesso', "Curso actualizado com sucesso!");
                            }
                        }

                    }
                }
            }

        } else{
            return redirect()->back()->with("erro", "Preencha todos os campos!");
        }
    }

    public function delete($id, Request $request){
        if(isset($request->_method)){
            Curso::where('curso_id', $id)->delete();
            return redirect()->back()->with('sucesso', "Curso eliminado com sucesso!");

        } else{
            return redirect()->back();
        }

    }
}
