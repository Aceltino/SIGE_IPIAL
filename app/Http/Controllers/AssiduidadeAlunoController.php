<?php

namespace App\Http\Controllers;

use App\Models\Assiduidade_aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssiduidadeAlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Assiduidade_aluno::all()->toArray();
        //dd($dados);
        return view('assiduid-aluno/assd-aluno');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assiduidade_aluno  $assiduidade_aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Assiduidade_aluno $assiduidade_aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assiduidade_aluno  $assiduidade_aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Assiduidade_aluno $assiduidade_aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assiduidade_aluno  $assiduidade_aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assiduidade_aluno $assiduidade_aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assiduidade_aluno  $assiduidade_aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assiduidade_aluno $assiduidade_aluno)
    {
        //
    }
}
