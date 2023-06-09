@extends('layouts.autentic')

@section('title', 'Cadastrar')

@section('formulario-aut')

  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span><br>
      <span>Cadastro de Usuario</span>
    </div>


    <form method="POST" action={{route('registrar')}} id="regForm" class="row g-3 needs-validation">
      @csrf
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>

      @if(session('erroCadastroPessoa'))
        <div class="alert alert-success">
          {{session('erroCadastroPessoa')}}
        </div>
      @endif
      @if(session('erroCadastroEndereco'))
        <div class="alert alert-success">
          {{session('erroCadastroEndereco')}}
        </div>
      @endif
      @if(session('erroCadastroUser'))
        <div class="alert alert-success">
          {{session('erroCadastroUser')}}
        </div>
      @endif

      {{-- Dados da Pessoa - Apagar em Produção --}}
      <div class="tab">

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" value="{{old('nome')}}" name="nome" class="form-control" placeholder="Nome" required>
          <input type="text" autocomplete="off" value="{{old('sobre_nome')}}" name="sobre_nome" class="form-control" placeholder="Sobre-nome" required>
          <div class="invalid-feedback">Por favor insira o Nome Completo</div>
        </div>
        @error('nome')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('sobre_nome')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror


        <div class="col">
            <div class="input-group has-validation">
              <input type="text" autocomplete="off" value="{{old('num_bi')}}" name="num_bi" class="form-control" placeholder="Nº BI" required>
              <div class="invalid-feedback">Por favor insira o Número de BI.</div>
            </div>
        </div>
        @error('num_bi')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <select class="form-select" name="genero">
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>

        <span style="color: rgb(88, 85, 85);">
          Data de Nascimento
          <div class="col">
            <div class="input-group has-validation">
              <input type="date" autocomplete="off" value="{{old('data_nascimento')}}" name="data_nascimento" class="form-control" placeholder="Data de Nascimento" required>
              <div class="invalid-feedback">Por favor insira a Data de Nascimento.</div>
            </div>
            @error('data_nascimento')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
        </span>

      </div>

      {{--  Dados do Endereço - Apagar em Produção--}}
      <div class="tab">

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" value="{{old('municipio')}}" name="municipio" class="form-control" placeholder="Municipio" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('municipio')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" value="{{old('bairro')}}" name="bairro" class="form-control" placeholder="Bairro" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('bairro')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" value="{{old('zona')}}" name="zona" class="form-control" placeholder="Zona" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('zona')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="number" autocomplete="off" value="{{old('num_casa')}}" name="num_casa" class="form-control" placeholder="Casa Nº" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('num_casa')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

      </div>

      {{-- Dados do Usuario - Apagar em Produção --}}
      <div class="tab">

        <div class="input-group has-validation">
          <input type="number" autocomplete="off" value="{{old('num_telefone')}}" name='num_telefone' class="form-control" placeholder="Telefone Nº" required>
          <div class="invalid-feedback">Por favor insira um Número de Telefone</div>
        </div>
        @error('num_telefone')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <select name="cargo" class="form-select">
            <option value="Administrador" selected>Administrador</option>
            <option value="Professor">Professor</option>
            <option value="Subdirector">Subdirector Pedagogico</option>
            <option value="Secretaria">Secretaria Pedagogica</option>
            <option value="Director">Director Geral</option>
            <option value="Coordenacao">Coordenação</option>
            <option value="insc_user">Usuario - Inscrição</option>
            <option value="matri_user">Usuario - Matricula</option>
          </select>
        </div>

        <div class="input-group has-validation">
          <input type="email" autocomplete="off" value="{{old('email')}}" name="email" class="form-control" placeholder="Email" required>
          <div class="invalid-feedback">Por favor insira um Email</div>
        </div>
        @error('email')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="password" autocomplete="off" value="{{old('password')}}" name="password" class="form-control" placeholder="Senha" required>
          <div class="invalid-feedback">Por favor insira uma Senha</div>
        </div>
        @error('password')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="password" autocomplete="off" value="{{old('password_confirmation')}}" name='password_confirmation' class="form-control" placeholder="Confirmação da Senha" required>
          <div class="invalid-feedback">Por favor insira a confirmação da senha</div>
        </div>
        @error('password_confirmation')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

      </div>

  <div style="text-align:center;margin-top:10px;">
    <div>
      <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
      <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
    </div>
  </div>

</div>

  </form>

  </div>
@endsection
