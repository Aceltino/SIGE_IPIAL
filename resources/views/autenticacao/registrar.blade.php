@extends('layouts.autentic')

@section('title', 'Cadastrar')

@section('formulario-aut')
  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span>
    </div>
    <form  method="POST" class="row g-3 needs-validation" novalidate style="padding-top: 10px;">
      <div class="container">      
        
        <div class="row">
          <div class="col">
            <div class="input-group has-validation">
              <input type="text" autocomplete="off" class="form-control" placeholder="Nome" required>
              <div class="invalid-feedback">Por favor insira um Nome.</div>
            </div>
          </div>
          <div class="col">
            <div class="input-group has-validation">
              <input type="text" autocomplete="off" class="form-control" placeholder="Apelido" required>
              <div class="invalid-feedback">Por favor insira um Apelido.</div>
            </div>
          </div>
        </div>  

      </div>

      <div class="input-group has-validation">
        <select class="form-select">
          <option value="1" selected>Homem</option>
          <option value="2">Mulher</option>
        </select>
      </div>

      <span style="color: rgb(88, 85, 85);">
        Data de Nascimento
      </span>
      <div class="input-group has-validation" style="margin-top: 10px;">
        <div class="row w-100">
          <div class="col">
            <select class="form-select">
              <option value="1" selected>01</option>
              <option value="2">02</option>
            </select>
          </div>
          <div class="col">
            <select class="form-select">
              <option value="1" selected>01</option>
              <option value="2">02</option>
            </select>
          </div>
          <div class="col px-0">
            <select class="form-select">
              <option value="1" selected>1998</option>
              <option value="2">1999</option>
            </select>
          </div>
        </div>
      </div>

          <div class="input-group has-validation">
            <input type="text" autocomplete="off" class="form-control" placeholder="E-mail" required>
            <div class="invalid-feedback">Por favor insira um E-mail.</div>
          </div>

          <div class="input-group has-validation">
            <input type="text" autocomplete="off" class="form-control" placeholder="Senha" required>
            <div class="invalid-feedback">Por favor insira uma senha.</div>
          </div>





  
          <div class="input-group has-validation">
            <input type="text" autocomplete="off" class="form-control" placeholder="Confirmar senha" required>
            <div class="invalid-feedback">Por favor confirme a senha.</div>
          </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Registrar</button>
      </div>
    </form>
    
  </div>
@endsection