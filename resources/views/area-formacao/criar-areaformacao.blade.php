@extends('layouts.main')

@section('title', 'Criar Curso')

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
    <form id="regFormh" action="" class="formulario-layout" method="POST">
        @csrf
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR AREA DE FORMAÇÃO</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" placeholder="Nome da Area de formação" name="nome_curso" id="nome_curso" oninput="this.className = ''" required >
                <span id=" erro_nome"  style="color: red"></span>
            </div>

            <div class="row">

                <div class=" col form-group">
                    <select name="coordenador" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Coordenador:</option>
                        <option value="area">Nome do Prof</option>

                    </select>
                </div>

            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Criar Area de Formação</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
