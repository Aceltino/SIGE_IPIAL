@extends('layouts.main')

@section('title', 'Criar Curso')

@section('conteudo')
<main id="main" class="main" >
@if (session()->has('erro'))
    {{session('erro')}}
@endif
@if (session()->has('sucesso'))
    {{session('sucesso')}}
@endif
    <form id="regFormh" action="{{route('cadastrar.curso')}}" class="formulario-layout" method="POST">
        @csrf
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR CURSO</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" value="" placeholder="Nome do Curso" name="nome_curso" oninput="this.className = ''" required>
            </div>

            <div class="row">
                <div class="col form-group">
                    <select name="area_formacao" id="opcoes" oninput="this.className = ''" class="form-select" >
                        <option selected disabled>Area de Formação:</option>
                        @foreach ($areaFormacao as $af)
                            <option value="{{$af->area_formacao_id}}">{{$af->nome_area_formacao}}</option>
                        @endforeach
                    </select>
                </div>

                <div class=" col form-group">
                    <select name="coordenador" id="opcoes" oninput="this.className = ''" class="form-select" >
                        <option selected disabled>Coordenador:</option>
                        @foreach ($dados as $coord)
                            <option value="{{$coord['coordenador_id']}}">{{$coord['nome_completo']}}</option>
                        @endforeach

                    </select>
                </div>

            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" value="" placeholder="Sigla do Curso" name="sigla_curso" oninput="this.className = ''" maxlength="4" required>
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Criar Curso</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
