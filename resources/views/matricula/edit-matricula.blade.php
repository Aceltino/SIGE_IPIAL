@extends('layouts.main')

@section('title', 'Editar Matriculas')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Dados pessoais</h1>
        </div>

    </div>

    <form method="post" action="{{ route('matricula-update', ['aluno' => $aluno['N_processo']]) }}" class="form-inativo">
    @csrf
    @method('PUT')
        <div class="dados-pessoais">
            <div class="area-input form-group">
                <label>Nome Completo: </label><input type="text" name="nome_completo"value="{{ $aluno['nome'] }}" value="{{old('nome_completo')}}" >
                @error('nome_completo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>
            <div class="area-input form-group">
                <label>Nome do Pai: </label><input type="text" name="nome_pai_cand" value="{{ $aluno['pai'] }}" value="{{old('nome_pai_cand')}}" >
                @error('nome_pai_cand')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>
            <div class="area-input form-group">
                <label>Nome da Mãe: </label><input type="text" name="nome_mae_cand"value="{{ $aluno['mae'] }}" value="{{old('nome_mae_cand')}}" >
                @error('nome_mae_cand')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Data de nascimento: </label><input type="date" readonly="true"  value="{{ $aluno['data_nasc'] }}" disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled value="{{ $aluno['idade'] }}">
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Gênero:</label><input type="radio" checked id="masculino" name="genero" value="Masculino" value="{{old('genero')}}" ><label for="masculino"> Masculino</label>
                        <input type="radio" id="feminino" name="genero" value="Femenino" value="{{old('genero')}}" ><label for="feminino"> Feminino</label>
                        @error('genero')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col area-input form-group" >
                        <label>Número do BI: </label><input type="text" class="form-control" name="num_bi" value="{{ $aluno['num_bi'] }}" value="{{old('num_bi')}}"  disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Naturalidade: </label><input type="text" name="naturalidade_cand" value="{{ $aluno['naturalidade'] }}" value="{{old('naturalidade_cand')}}" >
                        @error('naturalidade_cand')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Telefone: </label><input type="text" name="num_tel" value="{{ $aluno['tel_aluno'] }}" value="{{old('num_tel')}}">
                        @error('num_tel')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>

                    <div class="col form-group" style="margin-left: 10px;">
                        <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
                        Informações do Instituto: <i class="bi bi-row"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="dados-academicos">
                    <div class="row">
                        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                            <h1>Dados Da Escola De Proveniência</h1>
                        </div>

                    </div>

                    <br>

                    <div class="area-input form-group">
                        <label>Escola de proveniência: </label><input type="text"  readonly="true" disabled value="{{ $aluno['escola_prov'] }}" disabled>
                    </div>

                    <div class="container">
                        <div class="row">
                        <div class="col area-input form-group">
                    <label>Turno: </label><input type="text" readonly="true" disabled value="{{ $aluno['turno_prov'] }}">

                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Turma: </label><input type="text" readonly="true" disabled value="{{ $aluno['turma_prov'] }}">

                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Nº aluno: </label>
                    <input type="text" readonly="true" disabled value="{{ $aluno['idade'] }}">
                </div>
                </div>
                </div>

                <div class="container">
            <div class="row">
                    <div class="col area-input form-group" >
                    <label>Ano lectivo: </label><input type="text" class="form-control" readonly="true" disabled  value="{{ $aluno['ano_prov'] }}" >
                    </div>
                </div>
            </div>

            <div class="col area-input form-group">
                    <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled value="{{ $aluno['processo_prov'] }}" >

                    </div>

            <div class="row">
                <div class="col" style="display: flex; justify-content: flex-start; align-items: center; margin-bottom: 15px;">
                    <h1>Dados académicos</h1>
                </div>

            </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Código de Inscrição: </label><input type="text" class="form-control" readonly="true" disabled value="{{ $aluno['cod_inscr'] }}">

                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled value="{{ $aluno['N_processo'] }}">

                        </div>

                            <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Ano Lectivo: </label><input class="form-control" type="text" value="{{ $aluno['anoLectivoA'] }}" readonly disabled>

                            </div>
                    </div>
                </div>

                <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                    <label>Turno: </label><input type="text" class="form-control" value="{{ $aluno['turno'] }}" disabled readonly>

                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Turma: </label><input type="text" class="form-control"  value="{{ $aluno['turma'] }}" disabled readonly>

                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Classe: </label><input type="text" class="form-control" value="{{ $aluno['classe'] }}" disabled readonly>

                    </div>
                </div>
            </div>

                <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Nº do Aluno: </label><input type="text" class="form-control" value="{{ $aluno['N_aluno'] }}" disabled readonly>

                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>{{ $aluno['enc_grau_1'] }} </label><input type="text" name="telefone0"  value="{{ $aluno['tel_grau_1'] }}" value="{{old('telefone0')}}">
                            @error('telefone0')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>{{ $aluno['enc_grau_2'] }} </label><input type="text" name="telefone1" value="{{ $aluno['tel_grau_2'] }}" value="{{old('telefone1')}}" >
                            @error('telefone1')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                        </div>

                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>{{ $aluno['enc_grau_3'] }} </label><input type="text" name="telefone2"value="{{ $aluno['tel_grau_3'] }}" value="{{old('telefone2')}}">
                            @error('telefone2')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Curso: </label><input type="text" class="form-control" value="{{ $aluno['curso'] }}" disabled readonly>

                        </div>
                    </div>
                </div>
                <input type="hidden" name="aluno_id" value="{{ $aluno['N_processo'] }}">
                <input type="hidden" name="id" value="{{ $aluno['cod_inscr'] }}">



                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="/matricula/matriculas" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;">Atualizar</button>
                    </div>
                </div>

    </form>
</main>
@endsection
