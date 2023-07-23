@extends('layouts.main')

@section('title', 'Cadastrar sala')

@section('conteudo')
<main id="main" class="main" >
@if (session()->has('erro'))
<div class="alert alert-danger">
    {{session('erro')}}
</div>
@endif
@if(session('sucesso'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    {{(session('sucesso'))}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <form id="regFormh" action="{{ route('store.sala') }}" class="formulario-layout" method="POST">
        @csrf
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CADASTRAR SALA</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" placeholder="Sala" name="sala" id="nome_sala" id="letra2" oninput="this.className = ''" required >
                <span id=" erro_nome"  style="color: red"></span>
            </div>

            <div class="row">

                <div class=" col form-group">
                    <select name="tipo_sala" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Tipo de sala</option>
                        <option value="Laboratorio">Laboratorio</option>
                        <option value="Normal">Normal</option>
                    </select>
                </div>

            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
