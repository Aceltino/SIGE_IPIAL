<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cursos;
use App\Models\Pessoa;
use App\Models\Endereco;
use App\Models\Professor;
use App\Models\Telefone;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('professor.consultar-prof');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Cursos::all(['nome_curso', 'sigla']);
        return view('professor.cadastrar-prof', ['cursos' => $cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedEndereco = $request->validate([
                'municipio' => 'nullable|string',
                'bairro' => 'nullable|string',
                'zona' => 'nullable|string',
                'numero_casa' => 'nullable|int',
            ]);

            $validatedPessoa = $request->validate([
                'nome_completo' => 'required|string|max:255',
                'num_bi' => 'required|regex:/^\d{9}[A-Z]{2}\d{3}$/',
                'genero' => 'required|in:Masculino,Feminino',
                'data_nascimento' => 'required|date',
            ]);

            $validatedTelefone = $request->validate([
                'num_tel' => ['required', 'regex:/^\d{9}$/'],
            ]);

            $endereco = Endereco::create($validatedEndereco);

            $validatedPessoa['endereco_id'] = $endereco->endereco_id;
            $pessoa = Pessoa::create($validatedPessoa);

            $validatedTelefone['pessoa_id'] = $pessoa->pessoa_id;
            $telefone = Telefone::create($validatedTelefone);

            $prof = Professor::create(['formacao' => 'Engenheiro Civil', 'pessoa_id' => $pessoa->pessoa_id]);

            return redirect()->route('professor')->with('success', 'Registro criado com sucesso!');
        } catch (ValidationException $e) {
            // Captura a exceção de validação e trata os erros
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
