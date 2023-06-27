@extends('layouts.autentic')

@section('title', 'Cadastrar')

@section('formulario-aut')

  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span><br>
    </div>

    <form method="POST" action={{route('registrar')}} id="regForm" class="form-nscricao">
      @csrf
      <div style="text-align:center;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>

      <div class="area-logo">
        <span style="font-size: 20px;">Cadastro de Usuario</span>
      </div>

      @if(session('erroCadastroPessoa'))
        <div class="alert alert-danger">
          {{session('erroCadastroPessoa')}}
        </div>
      @endif
      @if(session('erroCadastroEndereco'))
        <div class="alert alert-danger">
          {{session('erroCadastroEndereco')}}
        </div>
      @endif
      @if(session('erroCadastroUser'))
        <div class="alert alert-danger">
          {{session('erroCadastroUser')}}
        </div>
      @endif
      @if(session('erro_senha_001'))
        <div class="alert alert-danger">
          {{session('erro_senha_001')}}
        </div>
      @endif
      

      {{-- Dados da Pessoa - Apagar em Produção --}}
      <div class="tab">

        <div class="row form-group">
          <div class="col-lg-6">
            <input type="text" value="{{old('nome')}}" name="nome" class="campo-registrar" placeholder="Nome" oninput="this.className = ''">
          </div>
          <div class="col-lg-6">
            <input type="text" value="{{old('sobre_nome')}}" name="sobre_nome" class="campo-registrar" placeholder="Apelido" oninput="this.className = ''">

          </div>
        </div>
        @error('nome')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('sobre_nome')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group">
          <select class="form-select" name="genero">
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Feminino</option>
          </select>   
        </div>

        <div class="col">
          <div class="input-group">
            <input type="text" value="{{old('num_bi')}}" name="num_bi" class="campo-registrar" placeholder="Nº BI" oninput="this.className = ''">
          </div>
        </div>
        @error('num_bi')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group">
          <input type="text" value="{{old('num_telefone')}}" id="telefoneinput" name="num_telefone" class="campo-registrar" placeholder="Nº Telefone" oninput="this.className = ''">
          <div class="mensagem-erro" style="width: 100%;"></div>
        </div>
        @error('num_telefone')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        

        <span style="color: rgb(88, 85, 85);">
          Data de Nascimento
          <div class="col">
            <div class="input-group">
              <input type="date" value="{{old('data_nascimento')}}" name="data_nascimento" class="campo-registrar" placeholder="Data de Nascimento" oninput="this.className = ''">
            </div>
            @error('data_nascimento')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
        </span>

      </div>

      {{--  Dados do Endereço - Apagar em Produção--}}
      <div class="tab">

        <div class="input-group">
          <input type="text" value="{{old('municipio')}}" name="municipio" class="campo-registrar" placeholder="Municipio" oninput="this.className = ''">
        </div>
        @error('municipio')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group">
          <input type="text" value="{{old('bairro')}}" name="bairro" class="campo-registrar" placeholder="Bairro" oninput="this.className = ''">
        </div>
        @error('bairro')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group">
          <input type="text" value="{{old('zona')}}" name="zona" class="campo-registrar" placeholder="Zona" oninput="this.className = ''">
        </div>
        @error('zona')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group">
          <input type="number" value="{{old('num_casa')}}" name="num_casa" class="campo-registrar" placeholder="Casa Nº" oninput="this.className = ''">
        </div>
        @error('num_casa')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

      </div>

      {{-- Dados do Usuario - Apagar em Produção --}}
      <div class="tab">
        <div class="input-group">
          <input type="email" value="{{old('email')}}" name="email" class="campo-registrar" placeholder="Email" oninput="this.className = ''">
        </div>
        @error('email')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group">
          <input type="password" value="{{old('password')}}" name="password" class="campo-registrar" placeholder="Senha" oninput="this.className = ''">
        </div>
        @error('password')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group">
          <input type="password" value="{{old('password_confirmation')}}" name='password_confirmation' class="campo-registrar" placeholder="Confirmação da Senha" oninput="this.className = ''">
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
