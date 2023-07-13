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
          @foreach($alunos as $aluno)
            <h3>Dados pessoais:</h3>
            <div class="area-dado-pessoal">
              <h4>Nome: </h4> <h5 >{{ $aluno->candidato->pessoa->nome_completo }}</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Filho de: </h4> <h5 >{{$aluno->candidato->nome_pai_cand}}</h5><h4>E de: </h4> <h5 >{{$aluno->candidato->nome_mae_cand}}</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Nascido aos: </h4> <h5 >{{$aluno->candidato->pessoa->data_nascimento}}</h5><h4>na Província de:</h4><h5 >Luanda</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Portador do BI nº:</h4><h5 >{{$aluno->candidato->pessoa->num_bi}}</h5>
            </div>
          </div>
          <div class="area-dados-academicos">
            <h3>Dados académicos:</h3>
            <div class="area-dado-pessoal">
              <h4>Matriculado no curso de:</h4><h5 >{{ $aluno->candidato->cursoAdmitido}}</h5><h5></h5>
            </div>
            @foreach($aluno->anoturma as $anoturm)
            <div class="area-dado-pessoal">
              <h4>No ano lectivo:</h4><h5 >{{$anoturm->ano_lectivo->ano_lectivo}}</h5><h4>a</h4><h5>10a</h5><h4>Classe em regime</h4><h5>Diurno</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Na turma:</h4><h5 >{{$anoturm->turma->nome_turma}}</h5><h4>com o Número</h4><h5 >{{$anoturm->pivot->numero_aluno}}</h5><h4>Processo nº</h4><h5 >{{$aluno->aluno_id}}</h5><h4>Telefone:</h4><h5 >{{$aluno->candidato->pessoa->telefone}}</h5>
            </div>
            
            <div class="area-turmas">
              <div class="area-dado-pessoal">
                <h4>Dados da 10a Class, Turma:</h4><h5>{{$anoturm->turma->nome_turma}}</h5><h4>Nº</h4><h5>{{$anoturm->pivot->numero_aluno}}</h5><h4>ano lectivo</h4><h5 >{{$anoturm->ano_lectivo->ano_lectivo}}</h5>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>
    @endforeach
  @endforeach
</main>
@endsection