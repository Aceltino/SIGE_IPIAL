@extends('layouts.main')

@section('title', 'Pautas')

@section('conteudo')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <div class="col">
                <h1>Pautas</h1>      
            </div>
        
            <div class="col-lg-2">
            <select class="btn-sel form-select" name="opcoes" id="filtro3" >
                <option disabled selected>Turma</option>
                <option value="Todos">Todos</option>
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

    @if(session('msg_sem_pauta'))
        <div class="alert alert-danger">
            {{session('msg_sem_pauta')}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
              </button>
        </div>
    @endif

    @if(session('msg_sem_director'))
        <div class="alert alert-danger">
            {{session('msg_sem_director')}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
              </button>
        </div>
    @endif

    @if(session('msg_sem_subdirector'))
         <div class="alert alert-danger">
            {{session('msg_sem_subdirector')}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
              </button>
        </div>
    @endif

    @if(session('msg_sem_coordenadorArea'))
        <div class="alert alert-danger">
            {{session('msg_sem_coordenadorArea')}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
              </button>
        </div>
    @endif

    @if(session('msg_sem_directorTurma'))
        <div class="alert alert-danger">
            {{session('msg_sem_directorTurma')}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
              </button>
        </div>
    @endif
    
    @if(session('erro_anormal'))
        <div class="alert alert-danger">
            {{session('erro_anormal')}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
              </button>
        </div>
    @endif
  
   
    <!-- /  Inicio da tabela de inscritos -->
    <table  id="Pauta" class="table table-custom table-escuro" style="margin-top: 20px;" >
      <thead  style=" text-align: center;">
          <tr>
          <th scope="col">ANO</th>
          <th scope="col">classe</th>
          <th scope="col">Turma</th>
          <th scope="col">Curso</th>
          <th scope="col">Periodo</th>
          <th scope="col"></th>
          </tr>
      </thead>
      
      <tbody>
        @foreach($anoTurmaCoord as $item)
        <tr style="text-align: center;">
            <th scope="row">{{ $item['anoLectivo']->ano_lectivo }}</th>
            <td>{{ $item['turma']->classe->classe }}</td>
            <td>{{ $item['turma']->nome_turma }}</td>
            <td>{{ $item['turma']->belongerCurso->nome_curso}}</td>
            <td>{{ $item['turma']->turno->nome_turno }}</td>
            <td>
                <a href={{ route('pauta.show', ['id'=> $item['turma']->turma_id, 'ano'=>$item['anoLectivo']->ano_lectivo_id] ) }} class="btn btn-cor-sg-a">Ver Pauta</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <!-- Termina a tabela de inscritos -->
    
</main>
@endsection