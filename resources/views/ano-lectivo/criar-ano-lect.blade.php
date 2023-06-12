@extends('layouts.main')

@section('title', 'Criar Ano Lectivo')

@section('conteudo')

<main id="main" class="main">

      <form method="POST" id="regForm" action="{{route('cadastrar.ano.lectivo')}}" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações gerais</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>

          <div class="row" >
                <div class="col">
                    <p>Designação do ano lectivo<input type="text" id="descricao-do-ano-lectivo" name="ano_lectivo" class="form-control" value="{{old('data_fim_matricula')}}" oninput="this.className = ''" disabled readonly></p>
                    @error('ano_lectivo')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>


          <div class="row" >
                <div class="col">
                    <p>Data de início do ano lectivo<input type="date" name="data_inicio_ano_lectivo" id="data-de-inicio-do-ano-lectivo" value="{{old('data_inicio_ano_lectivo')}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_ano_lectivo')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do ano lectivo<input type="date" name="data_fim_ano_lectivo" id="data-de-fim-do-ano-lectivo" value="{{old('data_fim_ano_lectivo')}}" oninput="this.className = ''" required></p>
                    @error('data_fim_ano_lectivo')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das inscrições<input type="date" name="data_inicio_inscricao" id="data-de-inicio-das-inscricoes" value="{{old('data_inicio_inscricao')}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_inscricao')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim das inscrições<input type="date" name="data_fim_inscricao" id="data-de-fim-das-inscricoes" value="{{old('data_fim_inscricao')}}" oninput="this.className = ''" required></p>
                    @error('data_fim_inscricao')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das matriculas<input type="date" name="data_inicio_matricula" id="data-de-inicio-das-matriculas" value="{{old('data_inicio_matricula')}}"  oninput="this.className = ''" required></p>
                    @error('data_inicio_matricula')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim das matriculas<input type="date" name="data_fim_matricula" id="data-de-fim-das-matriculas" value="{{old('data_fim_matricula')}}" oninput="this.className = ''" required></p>
                    @error('data_fim_matricula')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de alunos nas turmas" name="num_aluno_na_turma" id="numero-maximo-de-alunos-nas-turmas" value="{{old('num_aluno_na_turma')}}"  oninput="this.className = ''" required min="0" max="55">
                    @error('num_aluno_na_turma')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de salas" name="num_sala_escola" id="numero-maximo-de-salas" value="{{old('num_sala_escola')}}" oninput="this.className = ''" required min="0" max="30">
                    @error('num_sala_escola')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">sobre os trimestres</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>

          <div class="row" >
                <div class="col">
                    <p>Data de início do 1º trimestre<input type="date" name="data_inicio1" id="data-de-inicio-do-primeiro-trimestre" value="{{old('data_inicio1')}}" oninput="this.className = ''" required></p>
                    @error('data_inicio1')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do 1º trimestre<input type="date" name="data_fim1" id="data-de-fim-do-primeiro-trimestre" value="{{old('data_fim1')}}" oninput="this.className = ''" required></p>
                    @error('data_fim1')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 2º trimestre<input type="date" name="data_inicio2" id="data-de-inicio-do-segundo-trimestre" value="{{old('data_inicio2')}}" oninput="this.className = ''" required></p>
                    @error('data_inicio2')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do 2º trimestre<input type="date" name="data_fim2" id="data-de-fim-do-segundo-trimestre" value="{{old('data_fim2')}}" oninput="this.className = ''" required></p>
                    @error('data_fim2')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 3º trimestre<input type="date" name="data_inicio3" id="data-de-inicio-do-terceiro-trimestre" value="{{old('data_inicio3')}}" oninput="this.className = ''" required></p>
                    @error('data_inicio3')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Data de fim do 3º trimestre<input type="date" name="data_fim3" id="data-de-fim-do-terceiro-trimestre" value="{{old('data_fim3')}}" oninput="this.className = ''" required></p>
                    @error('data_fim3')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">manhã</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>

          <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_manha" id="hora-de-inicio-das-aulas-no-periodo-da-manha"  value="{{old('hora_inicio_manha')}}" min="05:00" max="09:00" oninput="this.className = ''" required></p>
                    @error('hora_inicio_manha')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_manha" id="hora-de-fim-das-aulas-no-periodo-da-manha" value="{{old('hora_fim_manha')}}" min="11:00" max="13:00" oninput="this.className = ''" required></p>
                    @error('hora_fim_manha')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" placeholder="Ex:50" name="duracao_tempo_manha" id="duracao-do-tempo-de-aula-no-periodo-da-manha" value="{{old('duracao_tempo_manha')}}" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_manha')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_manha" id="duracao-do-intervalo-menor-no-periodo-da-manha" value="{{old('duracao_int_menor_manha')}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_manha')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_manha" id="duracao-do-intervalo-maior-no-periodo-da-manha" value="{{old('duracao_int_maior_manha')}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_manha')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">tarde</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>

          <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_tarde" id="hora-de-inicio-das-aulas-no-periodo-da-tarde" value="{{old('hora_inicio_tarde')}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_tarde')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_tarde" id="hora-de-fim-das-aulas-no-periodo-da-tarde" value="{{old('hora_fim_tarde')}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_tarde')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" placeholder="Ex:50" name="duracao_tempo_tarde" id="duracao-do-tempo-de-aula-no-periodo-da-tarde" value="{{old('duracao_tempo_tarde')}}" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_tarde')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_tarde" id="duracao-do-intervalo-menor-no-periodo-da-tarde" value="{{old('duracao_int_menor_tarde')}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_tarde')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_tarde" id="duracao-do-intervalo-maior-no-periodo-da-tarde" value="{{old('duracao_int_maior_tarde')}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_tarde')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">noite</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>

          <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" name="hora_inicio_noite" id="hora-de-inicio-das-aulas-no-periodo-da-noite" value="{{old('hora_inicio_noite')}}" oninput="this.className = ''" required></p>
                    @error('hora_inicio_noite')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" name="hora_fim_noite" id="hora-de-fim-das-aulas-no-periodo-da-noite" value="{{old('hora_fim_noite')}}" oninput="this.className = ''" required></p>
                    @error('hora_fim_noite')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" placeholder="Ex:50" name="duracao_tempo_noite" id="duracao-do-tempo-de-aula-no-periodo-da-noite" value="{{old('duracao_tempo_noite')}}" oninput="this.className = ''" required></p>
                    @error('duracao_tempo_noite')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" placeholder="Ex:5" name="duracao_int_menor_noite" id="duracao-do-intervalo-menor-no-periodo-da-noite" value="{{old('duracao_int_menor_noite')}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_menor_noite')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" placeholder="Ex:15" name="duracao_int_maior_noite" id="duracao-do-intervalo-maior-no-periodo-da-noite" value="{{old('duracao_int_maior_noite')}}" oninput="this.className = ''" required></p>
                    @error('duracao_int_maior_noite')
                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>


    </main>
@endsection
