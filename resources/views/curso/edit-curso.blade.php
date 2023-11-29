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
    <div class="alert alert-danger">
    {{session('erro')}}
    </div>
    @endif
    @if (session()->has('sucesso'))
    <div class="alert alert-success">
        {{session('sucesso')}}
    </div>
    @endif

    <form class="form-inativo" action="{{route('editar.dados.curso', $curso['curso_id'])}}" method="POST">
        @csrf
        @method('put')
        <div class="dados-pessoais">
            <div class="area-input form-group">
                <label>Nome Do Curso: </label><input type="text" id="letra" name="nome_curso" value="{{$curso['nome_curso']}}">
            </div>

            <div class="area-input form-group">
                <label>Sigla do curso: </label><input type="text" id="sigla" name="sigla_curso" value="{{$curso['sigla']}}">
            </div>
            <div class="form-group">
               <label for="">Area de Formação:</label>
               <select name="area_formacao" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option disabled>Area de Formação:</option>
                    @foreach ($areaFormacao as $af)
                        @if ($af['area_formacao_id'] == $curso['area_formacao_id'])
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
                    @if ($curso['coordenador'] !== null)
                        <option value="{{$curso['coordenador']['professor_id']}}" selected>{{$curso['coordenador']['pessoa']['nome_completo']}}</option>
                    @endif
                    @foreach ($coordenador_disponivel as $coord)
                        <option value="{{$coord['professor_id']}}">{{$coord['pessoa']['nome_completo']}}</option>
                    @endforeach
                    @if (!$curso['coordenador'])
                        <option value="Nenhum" selected>Nenhum</option>
                    @else
                        <option value="Nenhum">Nenhum</option>
                    @endif

                </select>
            </div>
                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="{{route('consultar.cursos')}}" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;" name="id" value="{{$curso['curso_id']}}">Atualizar</button>
                    </div>
                </div>

    </form>
</main>
@endsection
