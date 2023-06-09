@extends('layouts.main')

@section('title', 'Editar Ano Lectivo')

@section('conteudo')
<main id="main" class="main" >
    <form id="regFormh" action="{{route('update.ano.lectivo')}}" class="formulario-layout" method="POST">
        @csrf
        @method('put')
        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">editar dados do ano lectivo</h2>
          <h4 class="text-uppercase text-center my-4 color-blue-principal">Informações gerais</h4>

            <div class="row" >
                <div class="col">
                    <p>Designação do ano lectivo<input type="text" name="ano_lectivo" value="{{old('ano_lectivo', $anoLectivo[0]['ano_lectivo'])}}" required></p>
                    @error('ano_lectivo')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <div class="row" >
                <div class="col">
                    <p>Data de início do ano lectivo<input type="date" name="data_inicio_ano_lectivo" value="{{old('data_inicio_ano_lectivo', $anoLectivo[0]['data_inicio_ano_lectivo'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_ano_lectivo')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do ano lectivo<input type="date" name="data_fim_ano_lectivo" value="{{old('data_fim_ano_lectivo', $anoLectivo[0]['data_fim_ano_lectivo'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim_ano_lectivo')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das inscrições<input type="date" name="data_inicio_inscricao" value="{{old('data_inicio_inscricao', $anoLectivo[0]['data_inicio_inscricao'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_inscricao')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim das inscrições<input type="date" name="data_fim_inscricao" value="{{old('data_fim_inscricao', $anoLectivo[0]['data_fim_inscricao'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim_inscricao')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das matriculas<input type="date" name="data_inicio_matricula" value="{{old('data_inicio_matricula', $anoLectivo[0]['data_inicio_matricula'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_matricula')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim das matriculas<input type="date" name="data_fim_matricula" value="{{old('data_fim_matricula', $anoLectivo[0]['data_fim_matricula'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim_matricula')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de alunos nas turmas" name="num_aluno_na_turma" value="{{old('num_aluno_na_turma', $anoLectivo[0]['num_aluno_na_turma'])}}" oninput="this.className = ''" required>
                    @error('num_aluno_na_turma')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de salas" name="num_sala_escola" value="{{old('num_sala_escola', $anoLectivo[0]['num_sala_escola'])}}" oninput="this.className = ''" required>
                    @error('num_sala_escola')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">sobre os trimestres</h4>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 1º trimestre<input type="date" name="data_inicio1" value="{{old('data_inicio1', $trimestre[0]['data_inicio'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio1')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do 1º trimestre<input type="date" name="data_fim1" value="{{old('data_fim1', $trimestre[0]['data_fim'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim1')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 2º trimestre<input type="date" name="data_inicio2" value="{{old('data_inicio2', $trimestre[1]['data_inicio'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio2')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do 2º trimestre<input type="date" name="data_fim2" value="{{old('data_fim2', $trimestre[1]['data_fim'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim2')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 3º trimestre<input type="date" name="data_inicio3" value="{{old('data_inicio3', $trimestre[2]['data_inicio'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio3')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do 3º trimestre<input type="date" name="data_fim3" value="{{old('data_fim3', $trimestre[2]['data_fim'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim3')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">manhã</h4>

            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_manha" value="{{old('hora_inicio_manha', $anoLectivo[0]['hora_inicio_manha'])}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_manha" value="{{old('hora_fim_manha', $anoLectivo[0]['hora_fim_manha'])}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" placeholder="Ex:50" name="duracao_tempo_manha" value="{{old('duracao_tempo_manha', $anoLectivo[0]['duracao_tempo_manha'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_manha" value="{{old('duracao_int_menor_manha', $anoLectivo[0]['duracao_int_menor_manha'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_manha" value="{{old('duracao_int_maior_manha', $anoLectivo[0]['duracao_int_maior_manha'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">tarde</h4>

            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_tarde" value="{{old('hora_inicio_tarde', $anoLectivo[0]['hora_inicio_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_tarde" value="{{old('hora_fim_tarde', $anoLectivo[0]['hora_fim_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" value="{{old('duracao_tempo_tarde', $anoLectivo[0]['duracao_tempo_tarde'])}}" placeholder="Ex:50" name="duracao_tempo_tarde" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_tarde" value="{{old('duracao_int_menor_tarde', $anoLectivo[0]['duracao_int_menor_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_tarde" value="{{old('duracao_int_maior_tarde', $anoLectivo[0]['duracao_int_maior_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">noite</h4>

            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_noite" value="{{old('hora_inicio_noite', $anoLectivo[0]['hora_inicio_noite'])}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_noite" value="{{old('hora_fim_noite', $anoLectivo[0]['hora_fim_noite'])}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" placeholder="Ex:50" name="duracao_tempo_noite" value="{{old('duracao_tempo_noite', $anoLectivo[0]['duracao_tempo_noite'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_noit')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_noite" value="{{old('duracao_int_menor_noite', $anoLectivo[0]['duracao_int_menor_noite'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_noite" value="{{old('duracao_int_maior_noite', $anoLectivo[0]['duracao_int_maior_noite'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:10px;">
            <div class="mt-4">
                <a href="{{route('ano.lectivo')}}" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>
                <button type="submit" class="btn btn-success" name="id" value="{{$anoLectivo[0]['ano_lectivo_id']}}">Atualizar Ano Lectivo</button>
            </div>
        </div>
    </form>
</main>
@endsection
