@extends('layouts.autentic')

@section('title', 'Recuperar a senha')

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
    @if(session('status'))
      <div class="alert alert-success" role="alert">
        {{session('status')}}
      </div>
    @endif
    
    <form action={{route('password-email')}} method="post" class="row g-3 needs-validation" novalidate>
    @csrf
      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-at"></i></span>
        <input type="email" name="email" value="{{old('email')}}" placeholder="Inserir o e-mail" class="form-control" required autofocus> 

        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <div class="invalid-feedback">Por favor insere um e-mail!</div>
      </div>

      <div class="container">
        
        <div class="row" style="padding-top: 5px;">
          <div class="col">
             
          </div>
          
          <div class="col">
            <a href={{route('login')}}>Lembrou? Entre</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Recuperar</button>
      </div>
    </form>
    
  </div>
@endsection