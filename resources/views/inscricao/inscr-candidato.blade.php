@extends('layouts.main')

@section('title', 'Inscrever-se')

@section('conteudo')
<main id="main" class="main">

  <form method="POST" action="{{route('inscricao-store')}}" id="regForm" class="form-nscricao">
  @csrf
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>

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

        @if(session()->has('Sucesso'))
        <div class="alert alert-success">
        {{session('Sucesso')}}
        </div>
    @endif
      <h2>Introduza os dados pessoais</h2>

      <div class="form-group">
        <input type="text" placeholder="Nome Completo" name="nome_completo" oninput="this.className = ''">
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <input type="text" placeholder="Nome do Pai" name="nome_pai_cand" oninput="this.className = ''">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <input type="text" placeholder="Nome da Mãe" name="nome_mae_cand" oninput="this.className = ''">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <p><input type="date" name="data_nascimento" oninput="this.className = ''"></p>
        </div>

        <div class="col">
          <input type="text" class="form-control" readonly="true" value="00" disabled>
        </div>
        <div class="col">
          <input type="text" placeholder="Naturalidade" name="naturalidade_cand" oninput="this.className = ''">
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <input type="radio" id="masculino" name="genero" value="Masculino" checked><label for="masculino"> Masculino</label>
            <input type="radio" id="feminino" name="genero" value="Femenino"><label for="feminino"> Feminino</label>
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <input type="text" placeholder="Número do bilhete de identidade" name="num_bi" oninput="this.className = ''">
          </div>
        </div>
      </div>

      <div class="row">
        <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
          <span style="color: #777;">+244</span>
          <input type="text" value="" placeholder="Telefone" name="num_tel" oninput="this.className = ''">
        </div>

        <div class="col-3">
            <i id="clonebtn1" class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>
        </div>
      </div>
    </div>

    <div class="tab">
      <h2>introduza os dados da escola de providência</h2>
      <div class="form-group">
        <input type="text" placeholder="Nome da escola de providência" name="nome_escola" oninput="this.className = ''">
      </div>

      <div class="row">
        <div class="form-group col">
          <select oninput="this.className = ''" class="form-select" name="turno">
            <option selected>Manhã</option>
            <option>Tarde</option>
            <option>Noite</option>
          </select>
        </div>

        <div class="form-group col">
          <input type="text" placeholder="Nº de estudante" name="num_aluno" oninput="this.className = ''">
        </div>

        <div class="form-group col">
          <input type="text" placeholder="Turma" name="turma_aluno" oninput="this.className = ''">
        </div>

      </div>

      <div class="row">
        <div class="form-group col">
          <input type="text" placeholder="Processo nº" name="num_processo" oninput="this.className = ''">
        </div>

        <div class="form-group col">
          <input type="text" placeholder="Ano Lectivo" name="ultimo_anoLectivo" oninput="this.className = ''">
        </div>

      </div>
    </div>

    <div class="tab">
      <h2>Escolha o curso segundo a ordem de preferência</h2>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="curso1">
          <option selected disabled>Escolha a primeira opção</option>
          <option value="Tecnico de Informática">Tecnico de Informática</option>
          <option value="Instalaçoes electricas">Instalaçoes electricas</option>
          <option value="Desenho tecnico">Desenho tecnico</option>
          <option value="Electronica e automaçao">Electronica e automaçao</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="curso2">
          <option selected disabled>Escolha a segunda opção</option>
          <option value="Tecnico de Informática">Tecnico de Informática</option>
          <option value="Instalaçoes electricas">Instalaçoes electricas</option>
          <option value="Desenho tecnico">Desenho tecnico</option>
          <option value="Electronica e automaçao">Electronica e automaçao</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="curso3">
          <option selected disabled>Escolha a terceira opção</option>
          <option value="Tecnico de Informática">Tecnico de Informática</option>
          <option value="Instalaçoes electricas">Instalaçoes electricas</option>
          <option value="Desenho tecnico">Desenho tecnico</option>
          <option value="Electronica e automaçao">Electronica e automaçao</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="curso4">
          <option selected disabled>Escolha a quarta opção</option>
          <option value="Tecnico de Informática">Tecnico de Informática</option>
          <option value="Instalaçoes electricas">Instalaçoes electricas</option>
          <option value="Desenho tecnico">Desenho tecnico</option>
          <option value="Electronica e automaçao">Electronica e automaçao</option>
        </select>
      </div>

    </div>

    <div class="tab">
      <h2>Digite as médias para cada disciplina solicitada</h2>
      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="LinguaP">
          <option selected disabled>Língua Portuguesa</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="Matematic">
          <option selected disabled>Matemática</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="Fisic">
          <option selected disabled>Física</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

      <div class="form-group">
        <select oninput="this.className = ''" class="form-select" name="Quimic">
          <option selected disabled>Química</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>

    </div>

    <div style="text-align:center;margin-top:40px;">
      <div>
        <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
        <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
      </div>
    </div>

  </form>

</main>
@endsection
