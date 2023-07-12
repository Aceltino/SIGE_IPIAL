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
                        <option value="I10AM">Matemática</option>
                        <option value="I11AM">Lingua Portuguesa</option>
                        <option value="I12AT">Física</option>
                        <option value="I13AT">TLP</option>
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
                    <th scope="col">Professor</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Periodo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($disciplinas as $disciplina)
                    <tr  style=" text-align: center;">
                        <td>{{ $disciplina->curso->nome_curso }}</td>
                        <td>{{ $disciplina->professorDisciplina->professor->pessoa->nome_completo }}</td>
                        <td>{{ $disciplina->disciplinas->nome_disciplina }}</td>
                        <td>{{ $turma->turno->nome_turno }}</td>
                        <td>
                            <a href="{{ route('mini-pauta.view', ['turma_id' => $turma->turma_id, 'prof_id' => $disciplina->professorDisciplina->professor->professor_id, 'disciplina_id' => $disciplina->disciplinas->disciplina_id]) }}" class="btn btn-cor-sg-a">Ver Mini-pauta</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </main>
@endsection