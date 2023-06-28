@extends('layouts.autentic')

@section('title', 'Entrar')

@section('formulario-aut')
  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span>
    </div>
    @if(session('erro_login_001'))
      <div class="alert alert-danger">
          {{session('erro_login_001')}}
      </div>
    @endif
    @if(session('erro_login_002'))
      <div class="alert alert-danger">
          {{session('erro_login_002')}}
      </div>
    @endif
    @if(session('erro_login_003'))
      <div class="alert alert-danger">
          {{session('erro_login_003')}}
      </div>
    @endif
    @if(session('registrado'))
      <div class="alert alert-sucess">
        {{session('registrado')}}
    </div>
    @endif
    @if(session('success_reset_001'))
      <div class="alert alert-success">
          {{session('success_reset_001')}}
      </div>
    @endif
    @if(session('erro_sistema_001'))
      <div class="alert alert-danger">
          {{session('erro_sistema_001')}}
      </div>
    @endif
    @if(session('sucess_session_finality'))
      <div class="alert alert-danger">
          {{session('sucess_session_finality')}}
      </div>
    @endif
    @if(session('bloqueado_brutForce'))
      <div class="alert alert-danger">
          {{session('bloqueado_brutForce')}}
      </div>
    @endif
    @if(session('erro_login_004'))
      <div class="alert alert-danger">
          {{session('erro_login_004')}}
      </div>
    @endif
    
    <form action={{route('loginCheck')}} method="post" class="row g-3 needs-validation" novalidate>
      @csrf
      <div class="col-12">
        
        <div class="input-group has-validation">
          <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
          <input type="text" name="username" autocomplete="off" placeholder="Inserir nome de usuário" class="form-control" required>
          <div class="invalid-feedback">Por favor insere o Nome de Usuario!</div>
        </div>
      </div>

      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
        <input type="password" name="password" placeholder="Inserir a senha" class="form-control" required>
        <div class="invalid-feedback">Por favor insere a Senha!</div>
      </div>

      <div class="container">
        
        <div class="row" style="padding-top: 5px;">
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="lembrar" value="true" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Lembrar-me</label>
            </div>  
          </div>
          
          <div class="col">

            <a href={{route('recuperar-senha')}} class="forgot-password">Esqueceu a senha?</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Entrar</button>
      </div>
    </form>
    
  </div>
@endsection