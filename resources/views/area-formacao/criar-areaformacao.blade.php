@extends('layouts.main')

@section('title', 'Cadastrar área de formação')

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
<span id=" erro_nome"  style="color: red">
    @error('nome_area_formacao')
        <p class="alert alert-danger" role="alert">{{$message}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
            </button>
        </p>
    @enderror
</span>
<span id=" erro_nome"  style="color: red">
    @error('coordenador')
        <p class="alert alert-danger" role="alert">{{$message}}
            <button class="botaofecharerro">
                <i class="bi bi-x"></i>
            </button>
        </p>
    @enderror
</span>
    <form id="regFormh" action="{{route('cadastrar.area.formacao')}}" class="formulario-layout" method="POST">
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
                <input type="text"  id="letra" style=" text-align: center;" placeholder="Nome da Area de formação" name="nome_area_formacao" value="{{old('nome_area_formacao')}}" id="nome_curso" oninput="this.className = ''" required >
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
