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
        // dd($nomeCurso);
        return $idCurso;
    }

    public static function pegarNome($cursoId)
    {
        $nomeCurso = Curso::where('curso_id', $cursoId)->pluck('nome_curso')->first();
        return $nomeCurso;
    }
    public static function pegarCurso($id)
    {
        $curso = Curso::where('curso_id', $id)->first();
        return $curso;
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
        $coordenador = Professor::with('pessoa')->where('cargo', "Coordenador Curso")
        ->where('curso_id', null)
        ->where('area_formacao_id', null)
        ->get()->toArray();
        //dd($coordenador);
        $areaFormacao = Area_formacao::all();

        return view('curso/criar-curso', compact(['coordenador', 'areaFormacao']));
    }

    public function store(Request $request){

        if(isset($request->nome_curso) && isset($request->area_formacao) && isset($request->sigla_curso)){
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
                        $sigla = Curso::where('sigla', $sg)->get();
                        if(count($dados) > 0){
                            return redirect()->back()->with("erro", "Este curso já se encontra cadastrado!");
                        }elseif(count($sigla) > 0){
                            return redirect()->back()->with("erro", "Esta sigla já se encontra cadastrada!");
                        } else{
                                $dados = [
                                    'nome_curso' => $cr['nome'],
                                    'sigla' => $sg['sigla'],
                                    'area_formacao_id' => $request->area_formacao,
                                ];
                                $curso = Curso::create($dados);

                                return redirect()->back()->with("sucesso", "Curso criado com sucesso!");
                            }
                        }

                    }
                }

        } else{
            return redirect()->back()->with("erro", "Preencha todos os campos!");
        }
    }

    public function index(){
        $cursos = Curso::with('coordenador.pessoa', 'areaFormacao')->get();
        if (count($cursos) < 1) {
            $cursos = array();
        }
        $areaFormacao = Area_formacao::all();

        return view('curso/cursos', compact(['areaFormacao', 'cursos']));
    }

    public function indexEditar($id){
        $coordenador_disponivel = Professor::with('pessoa')->where('cargo', "Coordenador Curso")
        ->where('curso_id', null)
        ->where('area_formacao_id', null)
        //->where('curso_id', $id)
        ->get()->toArray();
        // $coordenador_actual = Professor::with('pessoa', 'curso.areaFormacao')->where('curso_id', $id)->get()->toArray();
        // if (!$coordenador_actual) {
        //     $coordenador_actual[0]['curso_id'] = null;
        // }
        $curso = Curso::with('coordenador.pessoa')->find($id)->toArray();
        //dd($curso['coordenador']['professor_id']);
        //dd($coordenador_actual);
        $areaFormacao = Area_formacao::all();

        return view('curso/edit-curso', compact(['coordenador_disponivel', 'areaFormacao', 'curso']));
    }

    public function update(Request $request){
        //dd($request->coordenador);
        if(isset($request->nome_curso) && isset($request->area_formacao) && isset($request->sigla_curso)){
            if(!empty($request->nome_curso) && !empty($request->sigla_curso) && !empty($request->area_formacao)){
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
                        $sigla = Curso::where('sigla', $sg)->get();
                        $dados = Curso::where('nome_curso', $curso['curso']['nome'])->get()->toArray();
                        if(count($dados) > 0 && $dados[0]['curso_id'] != $request->id){
                            return redirect()->back()->with("erro", "Este curso já se encontra cadastrado!");
                        }elseif(count($sigla) > 0 && $sigla[0]->curso_id != $request->id){
                            return redirect()->back()->with("erro", "Esta sigla já se encontra cadastrada!");
                        } else{
                                $dados = [
                                    'nome_curso' => $cr['nome'],
                                    'sigla' => $sg['sigla'],
                                    'area_formacao_id' => $request->area_formacao,
                                ];
                                if($request->coordenador == "Nenhum"){
                                    $professor = ['curso_id' => null];
                                    Professor::where('curso_id', $request->id)->update($professor);
                                } else{
                                    $coordenador = Professor::Where('curso_id', $request->id)->Where('cargo', 'Coordenador Curso')->get()->first();
                                    //dd($coordenador);
                                    if ($coordenador && $coordenador->curso_id !== $request->coordenador) {
                                        $professor = ['curso_id' => null];
                                        Professor::find($coordenador->professor_id)->update($professor);
                                    }
                                    $professor = ['curso_id' => $request->id];
                                    Professor::find($request->coordenador)->update($professor);
                                }
                                    Curso::where('curso_id', $request->id)->update($dados);
                                    return redirect()->route('consultar.cursos')->with('sucesso', "Curso actualizado com sucesso!");
                                }
                        }

                    }
                }

        } else{
            return redirect()->back()->with("erro", "Preencha todos os campos!");
        }
    }

    public function delete($id){
        $curso = Curso::with('candidato', 'turmas', 'aluno', 'disciplinas', 'calendarios')->find($id);
        if (count($curso->candidato) > 0 || count($curso->turmas) > 0 || count($curso->aluno) > 0 || count($curso->disciplinas) > 0 || count($curso->calendarios) > 0) {
            return redirect()->back()->with('erro', "Este curso não pode ser eliminado porque contém outros dados relacionados a ele!");
        }
        $professor = ['curso_id' => null];
        Professor::where('curso_id', $id)->update($professor);
        Curso::where('curso_id', $id)->delete();
        return redirect()->back()->with('sucesso', "Curso eliminado com sucesso!");

    }
}
