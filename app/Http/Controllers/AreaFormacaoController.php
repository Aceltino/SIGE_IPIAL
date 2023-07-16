<?php

namespace App\Http\Controllers;

use App\Models\Area_formacao;
use App\Models\Professor;
use App\Models\Curso;
use App\Http\Controllers\Controller;
use App\Http\Requests\AreaFormacaoRequest;
use App\Traits\CursoTrait;

class AreaFormacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area_formacao = Area_formacao::with('coordenador.pessoa')->get();
        $coordenador = Professor::with('pessoa')->where('cargo', "Coordenador Area")->get();
        return view('area-formacao/areaformacao', compact(['area_formacao', 'coordenador']));
    }
    public function indexCadastro()
    {
        $coordenador = Professor::with('pessoa')->where('cargo', "Coordenador Area")
        ->where('curso_id', null)
        ->where('area_formacao_id', null)
        ->get();
        return view('area-formacao/criar-areaformacao', compact(['coordenador']));
    }
    public function indexEdicao($id)
    {
        $area_formacao = Area_formacao::with('coordenador.pessoa')->find($id);
        $coordenador = Professor::with('pessoa')->where('cargo', "Coordenador Area")
        ->where('curso_id', null)
        ->where('area_formacao_id', null)
        ->get();
        return view('area-formacao/edit-areaformacao', compact(['area_formacao', 'coordenador']));
    }

    public function store(AreaFormacaoRequest $request)
    {
        $nome = CursoTrait::letrasMaiusculas($request->nome_area_formacao);
        $area_formacao = Area_formacao::create(['nome_area_formacao' => $nome['nome']]);
        $professor = Professor::find($request->coordenador);
        $professor->area_formacao_id = $area_formacao->area_formacao_id;
        $professor->save();
        return redirect()->back()->with("sucesso", "Curso criado com sucesso!");
    }

    public function update(AreaFormacaoRequest $request)
    {
        $nome = CursoTrait::letrasMaiusculas($request->nome_area_formacao);
        $dado = [
            'nome_area_formacao' => $nome['nome'],
        ];
        $coordenador_actual = Professor::where('area_formacao_id', $request->id)->get();
        if($coordenador_actual[0]->professor_id != $request->coordenador){
            $professor1 = ['area_formacao_id' => null];
            $professor2 = ['area_formacao_id' => $request->id];
            Professor::where('professor_id', $coordenador_actual[0]->professor_id)->update($professor1);
            Professor::where('professor_id', $request->coordenador)->update($professor2);
            Area_formacao::where('area_formacao_id', $request->id)->update($dado);
            return redirect()->route('area.formacao')->with('sucesso', "Área de formação actualizada com sucesso!");
        } else{
            Area_formacao::where('area_formacao_id', $request->id)->update($dado);
            return redirect()->route('area.formacao')->with('sucesso', "Área de formação actualizada com sucesso!");
        }
    }


    public function delete($id)
    {
        $area_formacao = Area_formacao::with('curso')->find($id);
        if (count($area_formacao->curso) > 0) {
            return redirect()->back()->with('erro', "Área de formação não pode ser eliminada porque contém cursos relacionados a ela!");
        }
        $professor = ['area_formacao_id' => null];
        Professor::where('area_formacao_id', $id)->update($professor);
        Area_formacao::where('area_formacao_id', $id)->delete();
        return redirect()->back()->with('sucesso', "Área de formação eliminada com sucesso!");
    }
}
