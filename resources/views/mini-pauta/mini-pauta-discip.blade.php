@extends('layouts.main')

@section('title', 'Mini-pautas')

@section('conteudo')
    <main id="main" class="main">
        <div class="pagetitle">
            <div class="row">
                @if (!isset($usr_prof))
                    <div class="col">
                        <h1>Mini-Pauta - {{ $turma->nome_turma }}</h1>      
                    </div>
                
                    <div class="col-lg-2">
                        <select class="btn-sel form-select" name="opcoes" id="filtro3" >
                            <option disabled selected>Disciplinas</option>
                            @foreach ($disciplinar as $item)
                                <option value="I10AM">{{ $item['disciplina']->nome_disciplina }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
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
                    @if (isset($usr_prof) and $usr_prof == true)
                        <th scope="col">Turma</th>
                    @else
                        <th scope="col">Periodo</th>
                    @endif
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if (!isset($usr_prof))
                    @foreach($disciplinar as $disciplina)
                        <tr  style=" text-align: center;">
                            <td>{{ $curso->nome_curso }}</td>
                            <td>{{ $disciplina['disciplina']->nome_disciplina }}</td>
                            <td>{{ $turma->turno->nome_turno }}</td>
                            <td>
                                <a href="{{ route('mini-pauta.view', ['turma_id' => $turma->turma_id, 'disciplina_id' => $disciplina['disciplina']->disciplina_id]) }}" class="btn btn-cor-sg-a">Ver Mini-pauta</a>
                            </td>
                        </tr>
                    @endforeach

                @elseif (isset($usr_prof) and $usr_prof == true)
                    @foreach ($prof_dis as $item)
                        @php
                            $turmas = $item->turma;
                        @endphp

                        @foreach ($turmas as $turma)
                            <tr  style=" text-align: center;">
                                <td>{{ $turma->curso->nome_curso }}</td>
                                <td>{{ $turma->disciplinas->disciplina->nome_disciplina }}</td>
                                <td>{{ $turma->nome_turma }}</td>
                                <td>
                                    <a href="{{ route('mini-pauta.view', ['turma_id' => $turma->turma_id, 'disciplina_id' => $turma->disciplinas->disciplina->disciplina_id]) }}" class="btn btn-cor-sg-a">Ver Mini-pauta</a>
                                </td>
                            </tr>
                        @endforeach

                    @endforeach
                @endif
            </tbody>
        </table>    
    </main>
@endsection