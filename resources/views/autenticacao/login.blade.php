@extends('layouts.autentic')

@section('title', 'Entrar')

@section('formulario-aut')
  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span>
    </div>
    <form class="row g-3 needs-validation" novalidate>
      <div class="col-12">
        
        <div class="input-group has-validation">
          <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
          <input type="text" name="username" autocomplete="off" placeholder="Inserir nome de usuário" class="form-control" required>
          <div class="invalid-feedback">Por favor insere o e-mail!</div>
        </div>
      </div>

      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
        <input type="password" name="password" placeholder="Inserir a senha" class="form-control" required>
        <div class="invalid-feedback">Por favor insere a senha!</div>
      </div>

      <div class="container">
        
        <div class="row" style="padding-top: 5px;">
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Lembrar-me</label>
            </div>  
          </div>
          
          <div class="col">

            <a href="/lembrar" class="forgot-password">Esqueceu a senha?</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Entrar</button>
      </div>
    </form>
    
  </div>
@endsection