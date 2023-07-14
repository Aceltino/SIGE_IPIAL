@extends('layouts.main')

@section('title', 'Mini-pautas')

@section('conteudo')
    <main id="main" class="main">
        <div class="pagetitle">
            <div class="row">
                <div class="col">
                    <h1>Mini-Pautas</h1>      
                </div>
            
                <div class="col-lg-2">
                    <select class="btn-sel form-select" name="opcoes" id="filtro3" >
                        <option disabled selected>Turma</option>
                        <option value="I10AM">I10AM</option>
                        <option value="I11AM">I11AM</option>
                        <option value="I12AT">TI12AT</option>
                        <option value="I13AT">I13AM</option>
                    </select>
                </div>        
            </div>
        </div>

        <div class="procurar">
            <form class="proc-form d-flex align-items-center">
                <input id="pesquisa" type="text" placeholder="Digite o Ano da Pauta que procuras" name="" class="campo-pesq">
                <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
            </form>
        </div>

        <table  id="matricula-tab" class="table table-custom table-escuro" style="margin-top: 20px;" >
            <thead  style=" text-align: center;">
                <tr>
                    <th scope="col">ANO</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Classe</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($turmas as $turma)
                    <tr  style=" text-align: center;">
                        <th scope="row">{{ $turma->ano_lectivo->ano_lectivo }}</th>
                        <td>{{ $turma->turma->nome_turma }}</td>
                        <td>{{ $turma->turma->belongClasse->classe }}</td>
                        <td>
                            <a href={{ route('mini-pauta.turma', ['turma' => $turma->turma->turma_id, 'curso' => $turma->turma->curso_id]) }} class="btn btn-cor-sg-a">Ver Mini-pauta da turma</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </main>
@endsection