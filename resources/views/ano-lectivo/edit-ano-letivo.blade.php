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
                    <p>Designação do ano lectivo<input type="text" id="descricao-do-ano-lectivo" name="ano_lectivo" value="{{old('ano_lectivo', $anoLectivo[0]['ano_lectivo'])}}" required disabled readonly></p>
                    @error('ano_lectivo')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <div class="row" >
                <div class="col">
                    <p>Data de início do ano lectivo<input type="date" name="data_inicio_ano_lectivo" id="data-de-inicio-do-ano-lectivo" value="{{old('data_inicio_ano_lectivo', $anoLectivo[0]['data_inicio_ano_lectivo'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_ano_lectivo')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-do-ano-lectivo"></p>
                </div>

                <div class="col">
                    <p>Data de fim do ano lectivo<input type="date" name="data_fim_ano_lectivo" id="data-de-fim-do-ano-lectivo" value="{{old('data_fim_ano_lectivo', $anoLectivo[0]['data_fim_ano_lectivo'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim_ano_lectivo')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-do-ano-lectivo"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das inscrições<input type="date" name="data_inicio_inscricao" id="data-de-inicio-das-inscricoes" value="{{old('data_inicio_inscricao', $anoLectivo[0]['data_inicio_inscricao'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_inscricao')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-das-inscricoes"></p>
                </div>

                <div class="col">
                    <p>Data de fim das inscrições<input type="date" name="data_fim_inscricao" id="data-de-fim-das-inscricoes" value="{{old('data_fim_inscricao', $anoLectivo[0]['data_fim_inscricao'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim_inscricao')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-das-inscricoes"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das matriculas<input type="date" name="data_inicio_matricula" id="data-de-inicio-das-matriculas" value="{{old('data_inicio_matricula', $anoLectivo[0]['data_inicio_matricula'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_matricula')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-das-matriculas"></p>
                </div>

                <div class="col">
                    <p>Data de fim das matriculas<input type="date" name="data_fim_matricula" id="data-de-fim-das-matriculas" value="{{old('data_fim_matricula', $anoLectivo[0]['data_fim_matricula'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim_matricula')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-das-matriculas"></p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de alunos nas turmas" name="num_aluno_na_turma" id="numero-maximo-de-alunos-nas-turmas" value="{{old('num_aluno_na_turma', $anoLectivo[0]['num_aluno_na_turma'])}}" oninput="this.className = ''" required>
                    @error('num_aluno_na_turma')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-numero-maximo-de-alunos-nas-turmas"></p>
                </div>

                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de salas" name="num_sala_escola" id="numero-maximo-de-salas" value="{{old('num_sala_escola', $anoLectivo[0]['num_sala_escola'])}}" oninput="this.className = ''" required>
                    @error('num_sala_escola')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-numero-maximo-de-salas"></p>
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">sobre os trimestres</h4>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 1º trimestre<input type="date" name="data_inicio1" id="data-de-inicio-do-primeiro-trimestre" value="{{old('data_inicio1', $trimestre[0]['data_inicio'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio1')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-do-primeiro-trimestre"></p>
                </div>

                <div class="col">
                    <p>Data de fim do 1º trimestre<input type="date" name="data_fim1" id="data-de-fim-do-primeiro-trimestre" value="{{old('data_fim1', $trimestre[0]['data_fim'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim1')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-do-primeiro-trimestre"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 2º trimestre<input type="date" name="data_inicio2" id="data-de-inicio-do-segundo-trimestre" value="{{old('data_inicio2', $trimestre[1]['data_inicio'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio2')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-do-segundo-trimestre"></p>
                </div>

                <div class="col">
                    <p>Data de fim do 2º trimestre<input type="date" name="data_fim2" id="data-de-fim-do-segundo-trimestre" value="{{old('data_fim2', $trimestre[1]['data_fim'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim2')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-do-segundo-trimestre"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 3º trimestre<input type="date" name="data_inicio3" id="data-de-inicio-do-terceiro-trimestre" value="{{old('data_inicio3', $trimestre[2]['data_inicio'])}}" oninput="this.className = ''" required></p>
                    @error('data_inicio3')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-do-terceiro-trimestre"></p>
                </div>

                <div class="col">
                    <p>Data de fim do 3º trimestre<input type="date" name="data_fim3" id="data-de-fim-do-terceiro-trimestre" value="{{old('data_fim3', $trimestre[2]['data_fim'])}}" oninput="this.className = ''" required></p>
                    @error('data_fim3')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-do-terceiro-trimestre"></p>
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">manhã</h4>

            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_manha" id="hora-de-inicio-das-aulas-no-periodo-da-manha" value="{{old('hora_inicio_manha', $anoLectivo[0]['hora_inicio_manha'])}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-hora-de-inicio-das-aulas-no-periodo-da-manha"></p>
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_manha" id="hora-de-fim-das-aulas-no-periodo-da-manha" value="{{old('hora_fim_manha', $anoLectivo[0]['hora_fim_manha'])}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-hora-de-fim-das-aulas-no-periodo-da-manha"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" placeholder="Ex:50" name="duracao_tempo_manha" id="duracao-do-tempo-de-aula-no-periodo-da-manha" value="{{old('duracao_tempo_manha', $anoLectivo[0]['duracao_tempo_manha'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-tempo-de-aula-no-periodo-da-manha"></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_manha" id="duracao-do-intervalo-menor-no-periodo-da-manha" value="{{old('duracao_int_menor_manha', $anoLectivo[0]['duracao_int_menor_manha'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-intervalo-menor-no-periodo-da-manha"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_manha" id="duracao-do-intervalo-maior-no-periodo-da-manha" value="{{old('duracao_int_maior_manha', $anoLectivo[0]['duracao_int_maior_manha'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_manha')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-intervalo-maior-no-periodo-da-manha"></p>
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">tarde</h4>

            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_tarde" id="hora-de-inicio-das-aulas-no-periodo-da-tarde" value="{{old('hora_inicio_tarde', $anoLectivo[0]['hora_inicio_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-hora-de-inicio-das-aulas-no-periodo-da-tarde"></p>
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_tarde" id="hora-de-fim-das-aulas-no-periodo-da-tarde" value="{{old('hora_fim_tarde', $anoLectivo[0]['hora_fim_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-hora-de-fim-das-aulas-no-periodo-da-tarde"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" value="{{old('duracao_tempo_tarde', $anoLectivo[0]['duracao_tempo_tarde'])}}" placeholder="Ex:50" name="duracao_tempo_tarde" id="duracao-do-tempo-de-aula-no-periodo-da-tarde" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-tempo-de-aula-no-periodo-da-tarde"></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_tarde" id="duracao-do-intervalo-menor-no-periodo-da-tarde" value="{{old('duracao_int_menor_tarde', $anoLectivo[0]['duracao_int_menor_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-intervalo-menor-no-periodo-da-tarde"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_tarde" id="duracao-do-intervalo-maior-no-periodo-da-tarde" value="{{old('duracao_int_maior_tarde', $anoLectivo[0]['duracao_int_maior_tarde'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_tarde')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-intervalo-maior-no-periodo-da-tarde"></p>
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">noite</h4>

            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_noite" id="hora-de-inicio-das-aulas-no-periodo-da-noite" value="{{old('hora_inicio_noite', $anoLectivo[0]['hora_inicio_noite'])}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-hora-de-inicio-das-aulas-no-periodo-da-noite"></p>
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_noite" id="hora-de-fim-das-aulas-no-periodo-da-noite" value="{{old('hora_fim_noite', $anoLectivo[0]['hora_fim_noite'])}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-hora-de-fim-das-aulas-no-periodo-da-noite"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" placeholder="Ex:50" name="duracao_tempo_noite" id="duracao-do-tempo-de-aula-no-periodo-da-noite" value="{{old('duracao_tempo_noite', $anoLectivo[0]['duracao_tempo_noite'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_noit')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-tempo-de-aula-no-periodo-da-noite"></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_noite" id="duracao-do-intervalo-menor-no-periodo-da-noite" value="{{old('duracao_int_menor_noite', $anoLectivo[0]['duracao_int_menor_noite'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-intervalo-menor-no-periodo-da-noite"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_noite" id="duracao-do-intervalo-maior-no-periodo-da-noite" value="{{old('duracao_int_maior_noite', $anoLectivo[0]['duracao_int_maior_noite'])}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_noite')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-duracao-do-intervalo-maior-no-periodo-da-noite"></p>
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
