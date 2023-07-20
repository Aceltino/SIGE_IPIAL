@extends('layouts.main')

@section('title', 'disciplinas')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>DISCIPLINAS</h2>
    </div>

      <div class="col-lg-2">
        <select class="btn-sel form-select " id="filtro5">
          <option selected disabled>Curso</option>
          <option value="Desenhador projetista">Desenhador projetista</option>
          <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas</option>
          <option value="Técnico de Informática">Técnico de Informática</option>
          <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
        </select>
      </div>
      <div class="col-lg-2">
        <select class="btn-sel form-select" id="filtro3">
          <option selected disabled>Componetes</option>
          <option value="Técnicas">Técnicas</option>
          <option value="Socio-culturais">Socio-culturais</option>
          <option value="Cientificas">Cientificas</option>
        </select>
      </div>



  </div>

  <div class="procurar">
    <form action="{{ route('consultar.disciplina') }}" class="proc-form d-flex align-items-center" method="GET">
      <input id="pesquisa" placeholder='Digite o nome das disciplina' type="text" name="pesquisa" class="campo-pesq">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>
    </form>
  </div>

  @if(session('sucess'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    {{(session('sucess'))}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(session('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-1"></i>
      {{(session('edit'))}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-octagon me-1"></i>
      {{(session('delete'))}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <!-- /  Inicio da tabela de disciplina -->
  <table class="table table-striped display table table-custom table-escuro " style="margin-top: 10px;" id="Inscricoes-tab" id="matricula-tab" >
    <thead>
    <tr style=" text-align: center;">
        <th scope="col">Nome da disciplina</th>
        <th scope="col">Sigla</th>
        <th scope="col">Compoente</th>
        <th scope="col">Tempo de Prova</th>
        <th scope="col">Curso</th>
        <th scope="col">Classe</th>
        <th scope="col">Carga Horária</th>
        <th scope="col">Tipo de disciplina</th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>
    @foreach($disciplinas as $disciplina)
      <tr style=" text-align: center;">
        <td>{{ $disciplina->nome_disciplina }}</td>
        <td>{{ $disciplina->sigla		}}</td>
        <td>{{ $disciplina->componente	}}</td>
        <td>{{ $disciplina->tempo_prova }}</td> 
        @if($disciplina->componente =="Socio-culturais" || $disciplina->componente =="Cientificas" || $disciplina->curso_id == '')
        <td>Todos cursos</td>
        @else
        <td>{{ $disciplina->curso->nome_curso }}</td>
        @endif
         @foreach($disciplina->classes as $classe)
          <td>{{ $classe->classe }}</td>
          <td>{{ $classe->pivot->carga_horaria }}</td> 
          <td>{{ $classe->pivot->tipo_disciplina }}</td>
        <td style="display: flex; justify-content: center; align-items: center; gap:5px;"> 
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal{{$disciplina->disciplina_id  }}"></i>
          <a href="{{ route('disciplina.edit', ['disciplina_id' => $disciplina->disciplina_id ])}}"><i class="bi bi-pencil"></i></a>
          <form action="{{ route('disciplina.delete', ['disciplina_id' => $disciplina->disciplina_id]) }}" method="POST">
            @csrf
            @method('delete')
          <button type="submit"  class="bi bi-trash-fill" style="border: none; background: none;"></button>
          </form>
        </td>
      </tr>
      <div class="modal fade" id="ExtralargeModal{{$disciplina->disciplina_id}}" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="provisorio"> 
              <div class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

                <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal"></i>
              </div>
            </div>


            <div class="cabecalho-modal">
              <div class="row">
                <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                  <h1>Dados da discplina</h1>
                </div>
                  <div class="corpo-modal" >
              <form class="form-inativo">
                <div class="dados da disciplina">
                <div class="area-input form-group" style="border: none;">
                <label>Nome da disciplina: </label><input type="text" name="" value="{{ $disciplina->nome_disciplina }}" disabled>
            </div>
            <div class="area-input form-group" style="border: none; ">
                <label>Sigla: </label><input type="text" name="" value="{{ $disciplina->sigla }}" disabled>
            </div>

            <div class="area-input form-group" style="border: none; ">
                <label>Componete: </label><input type="text" name="socio-culturais" value="{{ $disciplina->componente }}" disabled>
            </div>
            <div class="area-input form-group" style="border: none; ">
            <label>Classe: </label><input type="text" name="socio-culturais" value="{{ $classe->classe }}" disabled>
            </div>
          <div class="area-input form-group" style="border: none; ">
            <label>Carga Horária: </label><input type="text" name="socio-culturais" value="{{ $classe->pivot->carga_horaria }}Tempo(s)" disabled>
        </div>
             <div class="area-input form-group" style="border: none; ">
                <label>Tipo_disciplina: </label><input type="text" name="Tipo_disciplina" value="{{ $classe->pivot->tipo_disciplina }}" disabled>
            </div>
            <div class="area-input form-group" style="border: none; ">
            @if($disciplina->componente =="Socio-culturais" || $disciplina->componente =="Cientificas" || $disciplina->curso_id == '')
            <label>Curso: </label><input type="text" name="" value="Todos os cursos" disabled>
            @else
                <label>Curso: </label><input type="text" name="" value="{{ $disciplina->curso->nome_curso }}" disabled>
            @endif
              </div>
           <div class="area-input form-group" style="border: none; ">
                <label>Tempo de prova: </label><input type="text" name="tempo_prova" value="{{ $disciplina->tempo_prova }}" disabled>
            </div>
                      <div class="footer-modal" style="text-align: center;">
                        <a href="{{ route('disciplina.edit', ['disciplina_id' => $disciplina->disciplina_id ])}}" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>

                      </div> 
              </form>
            </div>
          </div>
        </div>
      </div>
       @endforeach
      @endforeach
            </tr>
    </tbody>
  </table>

</main>
@endsection
