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
      @if(session()->has('ErroPessoa'))
        <div class="alert alert-danger">
          {{session('ErroPessoa')}}
          <button class="botaofecharerro">
            <i class="bi bi-x"></i>
          </button>
        </div>
      @endif

    @if (session()->has('ErroTelefone'))
      <div class="alert alert-warning">
        {{ session('ErroTelefone') }}
        <button class="botaofecharerro">
          <i class="bi bi-x"></i>
        </button>
      </div>
    @endif

    @if (session()->has('ErroCurso'))
    <div class="alert alert-warning">
        {{ session('ErroCurso') }}
        <button class="botaofecharerro">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif
        @if(session()->has('ErroCadastro'))
        <div class="alert alert-danger">
        {{session('ErroCadastro')}}
        <button class="botaofecharerro">
          <i class="bi bi-x"></i>
        </button>
        </div>
    @endif


    <div class="dados-pessoais">
      <div class="area-input form-group">
        <label>Nome Completo: </label><input type="text" name="nome_completo" value ="{{ $candidato['Nome'] }}" value="{{ old('nome_completo') }}" >
        @error('nome_completo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="area-input form-group">
        <label>Nome do Pai: </label><input type="text" name="nome_pai_cand" value ="{{ $candidato['Pai'] }}" value="{{ old('nome_pai_cand') }}" >
        @error('nome_pai_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>

      <div class="area-input form-group">
        <label>Nome da Mãe: </label><input type="text" name="nome_mae_cand" value ="{{ $candidato['Mae'] }}" value="{{ old('nome_mae_cand') }}">
        @error('nome_mae_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>

      <div class="container">
          <div class="row">
            <div class="col area-input form-group">
              <label>Data de nascimento: </label><input type="date" id="datainput" name="data_nascimento" value ="{{ $candidato['Data_Nascimento'] }}" value="{{ old('data_nascimento') }}" >
              
            </div>

            <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Idade: </label><input type="text" id="idadeinput" class="form-control" readonly="true" disabled value ="{{ $candidato['Idade'] }}"  >
                <div id="mensagem" style="color: red;"></div>
              </div>

            <div class="col area-input form-group" style="margin-left: 10px;">
              
                <label class="tua clas">Sexo:</label>
                <input type="radio" id="masculino" name="genero" value="Masculino" checked>
                <label for="masculino" class="tua class"> Masculino</label>
                <input type="radio" id="feminino" name="genero" value="Femenino" >
                <label for="femenino"> Femenino</label>
             

            </div>
          </div>
      </div>

      <div class="area-input form-group">
        <label>Número do BI: </label><input type="text" class="form-control" readonly="true" name="num_bi" value ="{{ $candidato['NumeroBI'] }}" disabled >
        @error('num_bi')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>

      <div class="area-input form-group">
        <label>Naturalidade: </label><input type="text" disabled class="form-control" readonly="true" name="naturalidade_cand" value ="{{ $candidato['Naturalidade'] }}" >
        @error('naturalidade_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>


      <div class="container">
        <div class="row">
          <div class="col area-input form-group">
            <label>Tel: </label><input type="text" id="telefoneinput" name="num_tel" value ="{{ $candidato['Telefone'] }}" value="{{ old('num_tel') }}" >
            <div class="mensagem-erro" style="width: 100%;"></div>
            @error('num_tel')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">

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
            <label>Escola de proveniência: </label><input type="text" name="nome_escola" value ="{{ $candidato['Escola'] }}" value="{{ old('nome_escola') }}" >
            @error('nome_escola')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Turno: </label><input type="text" name="turno" value ="{{ $candidato['Turno'] }}" value="{{ old('turno') }}" disabled>
              </div>

              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Turma: </label><input type="text" name="turma_aluno" value ="{{ $candidato['Turma'] }}" value="{{ old('turma_aluno') }}"  >
                @error('turma_aluno')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>

              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Nº aluno: </label>
                <input type="text" id="numeroinput1" value ="{{ $candidato['Numero_Aluno'] }}" name="num_aluno" value="{{ old('num_aluno') }}">
                @error('num_aluno')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group">
                <label>Número de processo: </label><input type="text" class="form-control" readonly="true" id="numeroinput" disabled name="num_processo" value ="{{ $candidato['Numero_Processo'] }}" > {{-- NOME DA INPUT -> 'num_processo' Porque o numero do processo da escola anterior não pode ser atualizado? --}}
                @error('num_processo')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>

              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Ano lectivo: </label><input type="text" class="form-control" name="ultimo_anoLectivo" value ="{{ $candidato['Ultimo_AnoLectivo'] }}" value="{{ old('ultimo_anoLectivo') }}">
                @error('ultimo_anoLectivo')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col area-input form-group" >
                <label>Língua Poertuguesa: </label><input type="text" value ="{{ $candidato['Lingua_Portuguesa'] }}" name="LinguaP" disabled>
              </div>
              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Matemática: </label><input type="text" value ="{{ $candidato['Matematica'] }}" name="Matematic" disabled >
              </div>
              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Química: </label><input type="text" name="Quimic" value ="{{ $candidato['Quimica'] }}" disabled>

              </div>
              <div class="col area-input form-group" style="margin-left: 10px;">
                <label>Física: </label><input type="text" name="Fisic" value ="{{ $candidato['Fisica'] }}" disabled>
              </div>
              
            </div>
          </div>

          <div class="container">
            <div class="row">
             
            @php
                $a=1;
            @endphp
              @foreach($candidato['Cursos'] as $cursocand)
              
                <div class="form-group col">
                  <select disabled oninput="this.className = ''" class="form-select" name="coloca aqui o teu Name">
                    <option  selected>{{$cursocand}}</option>
                    @foreach($candidato['Cursos'] as $cursocand)
                    <option value="{{$cursocand}}" >{{$cursocand}}</option>
                    @endforeach
                  </select>
                </div>
             
              @php
              $a++;
             @endphp
              @endforeach

              <input type="hidden" value ="{{ $candidato['Id_inscricao'] }}" name="id" >
              
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
