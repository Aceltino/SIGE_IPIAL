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
        <div class="col-xl-2">

            <div class="card-bodys">

            <img src= {{ URL::asset( isset(Auth::user()->imagem_usuario) ? Auth::user()->imagem_usuario : '' ) }} alt="perfil" class="l">
            </div>
            <hr id="borda-nome">
        </div>
        <div class="col-xl-10">
          <div> 
            <h3>Dados pessoais:</h3>
            <div class="area-dado-pessoal">
              <h4>Nome: </h4> <h5 value="{{ $alunos->candidato->pessoa->nome_completo }}"></h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Filho de: </h4> <h5 value="">{{$aluno->candidato->nome_pai_cand}}</h5><h4>E de: </h4> <h5 value="">{{$aluno->candidato->nome_mae_cand}}</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Nascido aos: </h4> <h5 value="">{{$aluno->candidato->pessoa->data_nascimento}}</h5><h4>na Província de:</h4><h5 value="">Luanda</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Portador do BI nº:</h4><h5 value="">{{$aluno->candidato->pessoa->num_bi}}</h5>
            </div>
          </div>
          <div class="area-dados-academicos">
            <h3>Dados académicos:</h3>
            <div class="area-dado-pessoal">
              <h4>Matriculado no curso de:</h4><h5 value="">{{ $aluno->candidato->cursoAdmitido}}</h5><h5></h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>No ano lectivo:</h4><h5 value="">{{$anoturm->ano_lectivo->ano_lectivo}}</h5><h4>a</h4><h5>10a</h5><h4>Classe em regime</h4><h5>Diurno</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Na turma:</h4><h5 value="">{{$anoturm->turma->nome_turma}}</h5><h4>com o Número</h4><h5 value="">{{$anoturm->pivot->numero_aluno}}</h5><h4>Processo nº</h4><h5 value="">{{$aluno->aluno_id}}</h5><h4>Telefone:</h4><h5 value="">{{$aluno->candidato->pessoa->telefone}}</h5>
            </div>
            
            <div class="area-turmas">
              <div class="area-dado-pessoal">
                <h4>Dados da 10a Class, Turma:</h4><h5>{{$anoturm->turma->nome_turma}}</h5><h4>Nº</h4><h5>{{$anoturm->pivot->numero_aluno}}</h5><h4>ano lectivo</h4><h5 value="">{{$anoturm->ano_lectivo->ano_lectivo}}</h5>
              </div>
              <div class="area-dado-pessoal">
                <h4>Dados da 11a Class, Turma:</h4><h5>I11AM</h5><h4>Nº</h4><h5>15</h5><h4>ano lectivo</h4><h5>2021-2022</h5>
              </div>
              <div class="area-dado-pessoal">
                <h4>Dados da 12a Class, Turma:</h4><h5>I12BT</h5><h4>Nº</h4><h5>10</h5><h4>ano lectivo</h4><h5>2022-2023</h5>
              </div>
              <div class="area-dado-pessoal">
                <h4>Dados da 13a Class, Turma:</h4><h5>I13BT</h5><h4>Nº</h4><h5>10</h5><h4>ano lectivo</h4><h5>2023-2024</h5>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  
</main>
@endsection