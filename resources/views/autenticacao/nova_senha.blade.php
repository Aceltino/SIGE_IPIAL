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
    @if(session('registrado'))
      <div class="alert alert-sucess">
        {{session('registrado')}}
    </div>
    @endif
    <form action={{route('loginCheck')}} method="post" class="row g-3 needs-validation" novalidate>
      @csrf
      <div class="col-12">
        <div class="input-group has-validation">
          <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
          <input type="password" name="new_password" autocomplete="off" placeholder="Nova senha" class="form-control" required>
          <div class="invalid-feedback">Por favor insere a nova Senha!</div>
        </div>
      </div>

      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
        <input type="password" name="confirmar_new_password" placeholder="Confirmar" class="form-control" required>
        <div class="invalid-feedback">Por favor confirma a nova senha!</div>
      </div>

    
      <div style="text-align:center;margin-top:40px;">
        <div>
          <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
          <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Comfirmar</button>
        </div>
      </div>
    </form>
    
  </div>
@endsection