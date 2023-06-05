@extends('layouts.main')

@section('title', 'Editar Curso')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Dados Do Curso</h1>
        </div>

    </div>

    @if (session()->has('erro'))
    {{session('erro')}}
    @endif
    @if (session()->has('sucesso'))
        {{session('sucesso')}}
    @endif
    <form class="form-inativo" action="{{route('editar.dados.curso', $dd['curso_id'])}}" method="POST">
        @csrf
        @method('put')
        <div class="dados-pessoais">
            <div class="area-input form-group">
                <label>Nome Do Curso: </label><input type="text" name="nome_curso" value="{{$dd['nome_curso']}}">
            </div>

            <div class="area-input form-group">
                <label>Sigla do curso: </label><input type="text" name="sigla_curso" value="{{$dd['sigla']}}">
            </div>
            <div class="form-group">
               <label for="">Area de Formação:</label>
               <select name="area_formacao" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option disabled>Area de Formação:</option>
                    @foreach ($areaFormacao as $af)
                        @if ($af['area_formacao_id'] == $dd['area_formacao_id'])
                            <option value="{{$af['area_formacao_id']}}" selected>{{$af['nome_area_formacao']}}</option>
                        @else
                            <option value="{{$af['area_formacao_id']}}" >{{$af['nome_area_formacao']}}</option>
                        @endif
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="">Coordenador:</label>
                <select name="coordenador" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option  disabled>Coordenador:</option>
                    @foreach ($valores as $coord)
                        @if ($coord['coordenador_id'] == $dd['coordenador_id'])
                            <option value="{{$coord['coordenador_id']}}" selected>{{$coord['nome_completo']}}</option>
                        @else
                            <option value="{{$coord['coordenador_id']}}">{{$coord['nome_completo']}}</option>
                        @endif

                    @endforeach

                </select>
            </div>
                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="{{route('consultar.cursos')}}" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;" name="id" value="{{$dd['curso_id']}}">Atualizar</button>
                    </div>
                </div>

    </form>
</main>
@endsection
