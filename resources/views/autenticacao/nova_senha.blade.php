@extends('layouts.autentic')

@section('title', 'Criar Nova Senha')

@section('formulario-aut')
  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span>
    </div>

    @if(session('erro_email_001'))
      <div class="alert alert-danger">
          {{session('erro_email_001')}}
      </div>
    @endif
    @if(session('erro_link_001'))
      <div class="alert alert-danger">
          {{session('erro_link_001')}}
      </div>
    @endif
    @if(session('erro_senha_001'))
      <div class="alert alert-danger">
          {{session('erro_senha_001')}}
      </div>
    @endif

    <form action={{route('password-update')}} method="post" class="row g-3 needs-validation" novalidate>
      @csrf

      <input type="hidden" name="token" value="{{ $token }}">
      
      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-at"></i></span>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="form-control" required>
        <div class="invalid-feedback">Por favor insere o seu email!</div>
      </div> 
      @error('email')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror

      <div class="col-12">
        <div class="input-group has-validation">
          <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
          <input type="password" name="password" value="{{old('password')}}" autocomplete="off" placeholder="Nova senha" class="form-control" required>
          <div class="invalid-feedback">Por favor insere a nova Senha!</div>
        </div>
      </div>
      @error('password')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror

      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
        <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirmar nova senha" class="form-control" required>
        <div class="invalid-feedback">Por favor confirma a nova senha!</div>
      </div>
      @error('password_confirmation')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
    
      <div style="text-align:center;margin-top:40px;">
        <div>
          <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
          <button type="submit" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Confirmar</button>
        </div>
      </div>
    </form>
    
  </div>
@endsection