@extends('layouts.main')
@section('title', 'Editar dados do candidato')
@section('conteudo')

<main id="main" class="main">
  <div class="row">
      <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
        <h1>Dados pessoais</h1>
      </div>

  </div>
  {{-- $dado['Id_inscricao'] colocar no formulario de inscritos no formulario de iscrição--}}
  <form method="post" action="{{ route('inscricao-update', ['candidato' => $candidato['Id_inscricao']]) }}" class="form-inativo">
    @csrf
    @method('PUT')

    <div class="tab">
        @error('nome_completo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_pai_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_mae_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('naturalidade_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_tel')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_bi')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_escola')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_aluno')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('turma_aluno')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_processo')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('ultimo_anoLectivo')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        @if(session()->has('ErroPessoa'))
        <div class="alert alert-danger">
        {{session('ErroPessoa')}}
        </div>
    @endif

    @if (session()->has('ErroTelefone'))
    <div class="alert alert-warning">
        {{ session('ErroTelefone') }}
    </div>
    @endif

    @if (session()->has('ErroCurso'))
    <div class="alert alert-warning">
        {{ session('ErroCurso') }}
    </div>
    @endif


        @if(session()->has('ErroCadastro'))
        <div class="alert alert-danger">
        {{session('ErroCadastro')}}
        </div>
    @endif


    <div class="dados-pessoais">
      <div class="area-input form-group">
        <label>Nome Completo: </label><input type="text" name="nome_completo" value ="{{ $candidato['Nome'] }}"  >
      </div>
      <div class="area-input form-group">
        <label>Nome do Pai: </label><input type="text" name="nome_pai_cand" value ="{{ $candidato['Pai'] }}" >
      </div>

      <div class="area-input form-group">
        <label>Nome da Mãe: </label><input type="text" name="nome_mae_cand" value ="{{ $candidato['Mae'] }}">
      </div>

      <div class="container">
          <div class="row">
            <div class="col area-input form-group">
              <label>Data de nascimento: </label><input type="text" name="data_nascimento" value ="{{ $candidato['Data_Nascimento'] }}" >
            </div>

            <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled value ="{{ $candidato['Idade'] }}" >

              </div>

            <div class="col area-input form-group" style="margin-left: 10px;">
              <label>Gênero: </label><input type="text" name="genero" value ="{{ $candidato['Genero'] }}">

            </div>
          </div>
      </div>

      <div class="area-input form-group">
        <label>Número do BI: </label><input type="text" disabled class="form-control" readonly="true" name="num_bi" value ="{{ $candidato['NumeroBI'] }}" >
      </div>

      <div class="area-input form-group">
        <label>Naturalidade: </label><input type="text" disabled class="form-control" readonly="true" name="naturalidade_cand" value ="{{ $candidato['Naturalidade'] }}" >
      </div>


      <div class="container">
        <div class="row">
          <div class="col area-input form-group">
            <label>Tel-1: </label><input type="text"  name="num_tel" value ="{{ $candidato['Telefone'] }}" >

          </div>

          <div class="col area-input form-group" style="margin-left: 10px;">
            {{-- <label>Tel-2: </label><input type="text" name="" value="998 766 656"> --}}

          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col area-input form-group">
            {{-- <label>Tel-3: </label><input type="text" name="" value="998 766 656"> --}}
          </div>

          <div class="col form-group" style="margin-left: 10px;">
            <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
              Informações do Instituto: <i class="bi bi-row"></i>
            </button>
          </div>
        </div>
      </div>

    </div>

    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="dados-academicos">
        <div class="row">
          <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
              <h1>Dados académicos</h1>
          </div>

        </div>

          <br>

          <div class="area-input form-group">
            <label>Escola de proveniência: </label><input type="text" name="nome_escola" value ="{{ $candidato['Escola'] }}" >
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Turno: </label><input type="text" name="turno" value ="{{ $candidato['Turno'] }}">
              </div>

              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Turma: </label><input type="text" name="turma_aluno" value ="{{ $candidato['Turma'] }}"  >

              </div>

              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Nº aluno: </label>
                <input type="text" value ="{{ $candidato['Numero_Aluno'] }}" name="num_aluno">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled name="num_processo" value ="{{ $candidato['Numero_Processo'] }}" > {{-- NOME DA INPUT -> 'num_processo' Porque o numero do processo da escola anterior não pode ser atualizado? --}}

              </div>

              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Ano lectivo: </label><input type="text" class="form-control" disabled name="ultimo_anoLectivo" value ="{{ $candidato['Ultimo_AnoLectivo'] }}" readonly="true" >

              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Língua Poertuguesa: </label><input type="text" value ="{{ $candidato['Lingua_Portuguesa'] }}" name="LinguaP">

              </div>
              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>1º Curso: </label><input type="text" name="curso1" value ="{{ $candidato['Cursos'][0] }}">

              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Matemática: </label><input type="text" value ="{{ $candidato['Matematica'] }}" name="Matematic" >

              </div>
              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>2º Curso: </label><input type="text"  value ="{{ $candidato['Cursos'][1] }}" name="curso2">

              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Química: </label><input type="text" name="Quimic" value ="{{ $candidato['Quimica'] }}">

              </div>
              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>3º Curso: </label><input type="text" name="curso3"  value ="{{ $candidato['Cursos'][2] }}">

              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Física: </label><input type="text" name="Fisic" value ="{{ $candidato['Fisica'] }}">
{{-- Apresentar os cursos dinamicamente --}}
              </div>
              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>4º Curso: </label><input type="text" name="curso4" value ="{{ $candidato['Cursos'][3] }}">

                <input type="hidden" name="id" value ="{{  $candidato['Id_inscricao'] }}">

              </div>
            </div>
          </div>

      </div>
    </div>

    <div class="footer-modal" style="text-align: center; margin-top: 50px;">
      <div class="jnt">
        <a href="{{ route('inscricao-index') }}" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;">Atualizar</button>
      </div>
    </div>

  </form>

</main>
@endsection
