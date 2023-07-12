@extends('layouts.main')

@section('title', 'Mini-pautas')

@section('conteudo')
    <main id="main" class="main">
        <div class="pagetitle">
            <div class="row">
                <div class="col">
                    <h1>Mini-Pauta - {{ $turma->nome_turma }}</h1>      
                </div>
            
                <div class="col-lg-2">
                    <select class="btn-sel form-select" name="opcoes" id="filtro3" >
                        <option disabled selected>Disciplinas</option>
                        @foreach ($disciplinar as $discipl)
                            <option value="I10AM">{{ $discipl->nome_disciplina }}</option>
                        @endforeach
                    </select>
                </div>        
            </div>
        </div>

        <div class="procurar">
            <form class="proc-form d-flex align-items-center">
                <input id="pesquisa" type="text" placeholder="Pesquisar disciplina" name="" class="campo-pesq">
                <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
            </form>
        </div>

        <table  id="matricula-tab" class="table table-custom table-escuro" style="margin-top: 20px;" >
            <thead  style=" text-align: center;">
                <tr>
                    <th scope="col">Curso</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Periodo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($disciplinar as $disciplina)
                    <tr  style=" text-align: center;">
                        <td>{{ $curso->nome_curso }}</td>
                        <td>{{ $disciplina->nome_disciplina }}</td>
                        <td>{{ $turma->turno->nome_turno }}</td>
                        <td>
                            <a href="{{ route('mini-pauta.view', ['turma_id' => $turma->turma_id, 'disciplina_id' => $disciplina->disciplina_id]) }}" class="btn btn-cor-sg-a">Ver Mini-pauta</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </main>
@endsection