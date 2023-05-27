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
              <input type="text" autocomplete="off" class="form-control" placeholder="Nº BI" required>
              <div class="invalid-feedback">Por favor insira o Número de BI.</div>
            </div>
        </div>
        @error('cargo')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <select class="form-select">
            <option value="1" selected>Homem</option>
            <option value="2">Mulher</option>
          </select>
        </div>
        @error('cargo')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <span style="color: rgb(88, 85, 85);">
          Data de Nascimento
          <div class="col">
            <div class="input-group has-validation">
              <input type="date" autocomplete="off" class="form-control" placeholder="Data de Nascimento" required>
              <div class="invalid-feedback">Por favor insira a Data de Nascimento.</div>
            </div>
            @error('cargo')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
        </span>
    
      </div>

      {{--  Dados do Endereço - Apagar em Produção--}}
      <div class="tab">

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" name="municipio" class="form-control" placeholder="Municipio" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('municipio')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" name="bairro" class="form-control" placeholder="Bairro" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('bairro')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" name="zona" class="form-control" placeholder="Zona" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('zona')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="number" autocomplete="off" name="num_casa" class="form-control" placeholder="Casa Nº" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
        @error('num_casa')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
       

      </div>

      {{-- Dados do Usuario - Apagar em Produção --}}
      <div class="tab">
        
        <div class="input-group has-validation">
          <input type="number" autocomplete="off" name='num_telefone' class="form-control" placeholder="Telefone Nº" required>
          <div class="invalid-feedback">Por favor insira um Número de Telefone</div>
        </div>
        @error('num_telefone')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <select class="form-select">
            <option value="1">Administrador</option>
            <option value="2">Professor</option>
            <option value="3">Subdirector Pedagogico</option>
            <option value="4">Secretaria Pedagogica</option>
            <option value="5">Director Geral</option>
            <option value="6" selected>Coordenação</option>
            <option value="7">Usuario - Inscrição</option>
            <option value="8">Usuario - Matricula</option>
          </select>
        </div>

        <div class="input-group has-validation">
          <input type="email" autocomplete="off" name="email" class="form-control" placeholder="Email" required>
          <div class="invalid-feedback">Por favor insira um Email</div>
        </div>
        @error('email')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="password" autocomplete="off" name="password" class="form-control" placeholder="Senha" required>
          <div class="invalid-feedback">Por favor insira uma Senha</div>
        </div>
        @error('password')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="input-group has-validation">
          <input type="password" autocomplete="off" name='password_confirmation' class="form-control" placeholder="Confirmação da Senha" required>
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