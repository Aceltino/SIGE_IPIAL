@extends('layouts.main')

@section('title', 'Processo de aluno')

@section('conteudo')
<main id="main" class="main">
    
    <div class="container no-print">
      <div class="row" style="margin-top: -30px;" >
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
          <h1>Processo do aluno</h1>      
        </div>
      
        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
            <button class="btn-imprimir" id="gerar-pdf" onclick="window.print()">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
        </div>
      </div>
    </div><br>

    <section class="section perfil">
      <div class="processo-al row">
        <div class="row justify-content-center mb-4">
          <div class="card-bodys col-lg-3 col-sm-10">
            <img src="/img/foto.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <div class="py-3"> 
            <h3>Dados pessoais:</h3>
            <div class="area-dado-pessoal">
              <h4>Nome: </h4> <h5 value="">{{ $alunos->candidato->pessoa->nome_completo }}</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Filho de: </h4> <h5 value="">{{$alunos->candidato->nome_pai_cand}}</h5><h4>E de: </h4> <h5 value="">{{$alunos->candidato->nome_mae_cand}}</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Nascido aos: </h4> <h5 value="">{{$alunos->candidato->pessoa->data_nascimento}}</h5><h4>na Província de:</h4><h5 value="">{{$alunos->candidato->naturalidade_cand}}</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Portador do BI nº:</h4><h5 value="">{{$alunos->candidato->pessoa->num_bi}}</h5>
            </div>
          </div>
          <div class="area-dados-academicos">
            <h3>Dados académicos:</h3>
            <div class="area-dado-pessoal">
              <h4>Matriculado no curso de:</h4><h5 value="">{{ $alunos->candidato->cursoAdmitido}}</h5><h5></h5>
            </div>
            @foreach($alunos->anoturma as $anoturm)
            <div class="area-dado-pessoal">
              <h4>No ano lectivo:</h4><h5 value="">{{$anoturm->ano_lectivo->ano_lectivo}}</h5><h4>a</h4><h5>10a</h5><h4>Classe em regime</h4>
              @if($anoturm->turma->turno->nome_turno =="Manhã" || $anoturm->turma->turno->nome_turno =="'Tarde")<h5>Diurno</h5>@else<h5>Noturno</h5>@endif
            </div>
            <div class="area-dado-pessoal">
              <h4>Na turma:</h4><h5 value="">{{$anoturm->turma->nome_turma}}</h5><h4>com o Número</h4><h5 value="">{{$anoturm->pivot->numero_aluno}}</h5><h4>Processo nº</h4><h5 value="">{{$alunos->aluno_id}}</h5><h4>Telefone:</h4><h5 value="">{{$alunos->candidato->pessoa->telefone}}</h5>
            </div>
            
            <div class="area-turmas">
              <div class="area-dado-pessoal">
                <h4>Dados da 10a Class, Turma:</h4><h5>{{$anoturm->turma->nome_turma}}</h5><h4>Nº</h4><h5>{{$anoturm->pivot->numero_aluno}}</h5><h4>ano lectivo</h4><h5 value="">{{$anoturm->ano_lectivo->ano_lectivo}}</h5>
              </div>  
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
</main>
@endsection