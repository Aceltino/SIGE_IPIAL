@extends('layouts.main')

@section('title', 'Inscritos via online')

@section('conteudo')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <div class="col">
                <h1>PROCESSOS DE ALUNOS</h1>      
            </div>
        
            <div class="col-lg-5">
            <select class="btn-sel form-select" name="opcoes" id="filtro5">
                <option selected disabled>Curso</option>
                <option value="Desenhador projetista">Desenhador projetista</option>
                <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                <option value="Informática">Informática</option>
                <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
            </div> 
        
        </div>
    </div>

    <div class="procurar">
    <form class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número de processo ou o número do B.I do Aluno" name="" class="campo-pesq">
        <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
    </form>
    </div>

    <!-- /  Inicio da tabela de inscritos -->
    <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
      <thead  style=" text-align: center;">
          <tr>
          <th scope="col">Número do BI</th>
          <th scope="col">Nome do Candidato</th>
          <th scope="col">Processo</th>
          <th scope="col">Turma</th>
          <th scope="col">Curso</th>
          <th scope="col">Período</th>
          <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
        @foreach($alunos as $aluno)
          <tr  style=" text-align: center;">
          <th scope="row">{{ $aluno->candidato->pessoa->num_bi }}</th>
          <td>{{ $aluno->candidato->pessoa->nome_completo }}</td>
          <td>{{ $aluno->aluno_id }}</td>
          @foreach($aluno->anoturma as $anoturm)
          <td>{{ $anoturm->turma->nome_turma }}</td>
          <td>{{ $aluno->candidato->cursoAdmitido }}</td>
          <td>{{ $anoturm->turma->turno->nome_turno }}</td>
          <td>
          <a href="{{ route('visual-processo',['aluno_id' => $aluno->aluno_id ] )}}" class="btn btn-cor-sg-a">Ver Processo</a>
          <i ></i>
          </td>
          </tr>
          @endforeach
        @endforeach  
      </tbody>
    </table>
    <!-- Termina a tabela de inscritos -->
</main>
@endsection