@extends('layouts.main')

@section('title', 'Editar sala')

@section('conteudo')
<main id="main" class="main" >
@if (session()->has('erro'))
<div class="alert alert-danger">
    {{session('erro')}}
</div>
@endif
@if (session()->has('sucesso'))
<div class="alert alert-success">
    {{session('sucesso')}}
</div>
@endif
    <form id="regFormh" action="{{ route('update.sala', ['sala_id' => $salas->sala_id ])}}" class="formulario-layout" method="POST">
        @csrf
        @method('PUT')
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>EDITAR SALA</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" placeholder="Sala" name="sala" id="nome_sala" oninput="this.className = ''" value="{{ $salas->sala }}" required >
                <span id=" erro_nome"  style="color: red"></span>
            </div>

            <div class="row">

                <div class=" col form-group">
                    <select name="tipo_sala" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected valeu="{{ $salas->tipo_sala }}" >{{ $salas->tipo_sala }}</option>
                        <option value="Laboratorio">Laboratorio</option>
                        <option value="Normal">Normal</option>
                    </select>
                </div>

            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection

