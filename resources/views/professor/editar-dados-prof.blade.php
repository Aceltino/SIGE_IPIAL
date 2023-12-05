@extends('layouts.main')

@section('title', 'Editar dados do professor')

@section('conteudo')
  <main id="main" class="main">
    <div class="d-flex align-items-center justify-content-around bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
      <a class="d-flex align-items-center pe-0" href="#">
        <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
        <span class="d-flex align-items-center ps-2">
          <div class="col-lg-3">
              <a class="color-white" href={{ route('professor.Editar', ['id' => $professor->professor_id]) }}><strong>Disciplina(s)</strong></a>
          </div>
          <div class="col-lg-3">
              <a class="color-white" href={{ route('horarioProfessor', ['id' => $professor->professor_id]) }}>Horário</a>
          </div>
          <div class="col-lg-3">
              <a class="color-white" href={{ route('professor.dados-pessoais', ['id' => $professor->professor_id]) }}>Dados pessoais</a>
          </div>
        </span>
      </a>
    </div>

    <form method="">
            
      @csrf
      
      <div class="tabss">
        <div class="row">
          @if(session('success'))
            <div class="col-sm-12 mt-4">
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            </div>
          @endif
          <div class="col-sm-8">
              <span class="btn bg-green color-white my-3 w-25" title="Professor em actividade">Activo</span>
          </div>
          <div class="col-sm-4 d-flex">
            <select class="form-select bg-blue-principal color-white my-3 w-50 ms-auto" title="Professor em actividade">
                <optgroup label="Ano lectivo">
                    <option>2022 - 2023</option>
                    <option>2023 - 2024</option>
                </optgroup>
            </select>
          </div>
        </div>

        <h3 class="text-uppercase text-center my-3 color-blue-principal">Disciplina(s) e turno(s)</h3>

          <div class="form-group col-md-6 offset-md-3 mb-3">
            <h6 class="color-blue-principal">Número de disciplinas que o professor vai lecionar.</h6> 
            <input type="number" placeholder="Quantidade de disciplinas" id="quantidade-de-disciplinas" min="1" value="{{ count($professor->disciplina) }}" max="4" required='false'>
            
          </div>

          <section class="row align-items-center ms-5 mb-4" id="div-disciplina-1">
            <div class="form-group col-7 mb-0">
              <select name='disciplina[]' oninput="this.className = ''" class="form-select" id="displina-a-leccionar-1" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                    <option 
                      value="{{ !empty($professor->disciplina[0]->disciplina_id) ? $professor->disciplina[0]->disciplina_id : " " }}" 
                      selected>
                      {{ !empty($professor->disciplina[0]->disciplina_id) ? $professor->disciplina[0]->disciplina_id : " " }}
                    </option>
                    @foreach($cursos as $curso)
                      <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>{{ $professor->professorDisciplina[0]->turno }}
                    @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Manhã" name="turno[1][]" {{ @$professor->professorDisciplina[0]->turno->nome_turno == "Manhã" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde" name="turno[1][]" {{ @$professor->professorDisciplina[0]->turno->nome_turno == 'Tarde' ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite" name="turno[1][]" {{ @$professor->professorDisciplina[0]->turno->nome_turno == 'Noite' ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="row align-items-center ms-5 mb-4 d-none" id="div-disciplina-2">
            <div class="form-group col-7 mb-0">
              <select name='disciplina' oninput="this.className = ''" class="form-select" id="displina-a-leccionar-2" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                  <option 
                      value="{{ !empty($professor->disciplina[1]->disciplina_id) ? $professor->disciplina[1]->disciplina_id : " " }}" 
                      selected>
                      {{ !empty($professor->disciplina[1]->disciplina_id) ? $professor->disciplina[1]->disciplina_id : " " }}
                  </option>
                  @foreach($cursos as $curso)
                    <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Manhã" name="turno[2][]" {{ @$professor->professorDisciplina[1]->turno->nome_turno == "Manhã" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde" name="turno[2][]" {{ @$professor->professorDisciplina[1]->turno->nome_turno == "Tarde" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite" name="turno[2][]" {{ @$professor->professorDisciplina[1]->turno->nome_turno == "Noite" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="row align-items-center ms-5 mb-4 d-none" id="div-disciplina-3">
            <div class="form-group col-7 mb-0">
              <select name='disciplina' oninput="this.className = ''" class="form-select" id="displina-a-leccionar-3" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                  <option 
                      value="{{ !empty($professor->disciplina[2]->disciplina_id) ? $professor->disciplina[2]->disciplina_id : " " }}" 
                      selected>
                      {{ !empty($professor->disciplina[2]->disciplina_id) ? $professor->disciplina[2]->disciplina_id : " " }}
                  </option>
                  @foreach($cursos as $curso)
                    <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Manhã" name="turno[3][]" {{ @$professor->professorDisciplina[2]->turno->nome_turno == "Manhã" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde" name="turno[3][]" {{ @$professor->professorDisciplina[2]->turno->nome_turno == "Tarde" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite" name="turno[3][]" {{ @$professor->professorDisciplina[2]->turno->nome_turno == "Noite" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="row align-items-center ms-5 mb-4 d-none" id="div-disciplina-4">
            <div class="form-group col-7 mb-0">
              <select name='disciplina' oninput="this.className = ''" class="form-select" id="displina-a-leccionar-4" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                  <option 
                      value="{{ !empty($professor->disciplina[3]->disciplina_id) ? $professor->disciplina[3]->disciplina_id : " " }}" 
                      selected>
                      {{ !empty($professor->disciplina[3]->disciplina_id) ? $professor->disciplina[3]->disciplina_id : " " }}
                  </option>
                  @foreach($cursos as $curso)
                    <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Manhã" name="turno[4][]" {{ @$professor->professorDisciplina[3]->turno->nome_turno == "Manhã" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde" name="turno[4][]" {{ @$professor->professorDisciplina[3]->turno->nome_turno == "Tarde" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite" name="turno[4][]" {{ @$professor->professorDisciplina[3]->turno->nome_turno == "Noite" ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <h3 class="text-uppercase text-center my-3 color-blue-principal">informações importantes para o instituto</h3>

          <h5 class="text-uppercase text-center my-3 color-blue-principal">Sobre o cargo</h5>

          <div class="form-group col">
            <select oninput="this.className = ''" class="form-select" id="select-cargo-cadastrar-professor">
              <optgroup label="Cargo">
                <option value="Professor" {{ $professor->cargo == "Professor" ? "checked" : "" }}>Professor</option>
                <option value="Coordenador Curso" {{ $professor->cargo == "Coordenador Curso" ? "checked" : "" }}>Coordenador do curso</option>
                <option value="Coordenador Area" {{ $professor->cargo == "Coordenador Area" ? "checked" : "" }}>Coordenador da área de formação</option>
              </optgroup>
            </select>
          </div>

          <div class="col mb-3 d-none" id="div-do-select-do-curso">
            <select oninput="this.className = ''" class="form-select">
              <optgroup label="Curso">
                <option value="Desenhador Projectista">Desenhador Projetista</option>
                <option value="Técnico de Energia e Instalações Eléctricas">Técnico de Energia e Instalações Eléctricas</option>
                <option value="Técnico de Informática ">Técnico de Informática</option>
                <option value="Electrônica e Telecomunicação">Electrônica e Telecomunicação</option>
              </optgroup>
            </select>
          </div>

          <div class="col mb-3 d-none" id="div-do-select-da-area-de-formacao">
            <select oninput="this.className = ''" class="form-select">
              <optgroup label="Área de formação">
                  <option value="Informática">Informática</option>
                  <option value="Contrução civil">Electricidade</option>
                  <option value="Eletronica">Electrônica</option>
                  <option value="Contrução civil">Construção civil</option>
              </optgroup>
            </select>
          </div>

          <div class="form-group">
            
            <input value=" {{!empty($profAtual->email) ? $profAtual->email: "" }} " type="email" placeholder="E-mail do professor" id="email-do-professor-input" oninput="this.className = ''" minlength="10" maxlength="40">
            <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-do-email-do-professor"></p>
          </div>

      </div> 

      <div style="text-align:center;margin-top:40px;">
        <div>
          <a href="{{ route('professor.dados-pessoais', ['id' => $professor->professor_id]) }}" class="btn color-white bg-yellowish-green" id="nextBtn" onclick="nextPrev(1)">Editar dados</a>
        </div>
      </div>
    </form>
    <script>
      if(parseInt(quantidadeDeDisciplinas.value) < 1 || parseInt(quantidadeDeDisciplinas.value) > 4){
        quantidadeDeDisciplinas.value = "1";
      }

      if(parseInt(quantidadeDeDisciplinas.value) === 1){
          // Habilitar todas as opções nos selects
          habilitarOpcoes(disciplinaALeccionar1);

          if(!divDoSelectSegundaDisciplina.classList.contains("d-none")){
            divDoSelectSegundaDisciplina.classList.add("d-none");
          }

          if(!divDoSelectTerceiraDisciplina.classList.contains("d-none")){
            divDoSelectTerceiraDisciplina.classList.add("d-none");
          }

          if(!divDoSelectQuartaDisciplina.classList.contains("d-none")){
            divDoSelectQuartaDisciplina.classList.add("d-none");
          }
      }
      
      if(parseInt(quantidadeDeDisciplinas.value) === 2){
        // Habilitar todas as opções nos selects
        habilitarOpcoes(disciplinaALeccionar1);
        habilitarOpcoes(disciplinaALeccionar2);

        if(divDoSelectSegundaDisciplina.classList.contains("d-none")){
          divDoSelectSegundaDisciplina.classList.remove("d-none");
        }

        if(!divDoSelectTerceiraDisciplina.classList.contains("d-none")){
          divDoSelectTerceiraDisciplina.classList.add("d-none");
        }

        if(!divDoSelectQuartaDisciplina.classList.contains("d-none")){
          divDoSelectQuartaDisciplina.classList.add("d-none");
        }
      }

      if(parseInt(quantidadeDeDisciplinas.value) === 3){
        // Habilitar todas as opções nos selects
        habilitarOpcoes(disciplinaALeccionar1);
        habilitarOpcoes(disciplinaALeccionar2);
        habilitarOpcoes(disciplinaALeccionar3);
        
        if(divDoSelectSegundaDisciplina.classList.contains("d-none")){
          divDoSelectSegundaDisciplina.classList.remove("d-none");
        }

        if(divDoSelectTerceiraDisciplina.classList.contains("d-none")){
          divDoSelectTerceiraDisciplina.classList.remove("d-none");
        }

        if(!divDoSelectQuartaDisciplina.classList.contains("d-none")){
          divDoSelectQuartaDisciplina.classList.add("d-none");
        }
      }

      if(parseInt(quantidadeDeDisciplinas.value) === 4){
        // Habilitar todas as opções nos selects
        habilitarOpcoes(disciplinaALeccionar1);
        habilitarOpcoes(disciplinaALeccionar2);
        habilitarOpcoes(disciplinaALeccionar3);
        habilitarOpcoes(disciplinaALeccionar4);

        if(divDoSelectSegundaDisciplina.classList.contains("d-none")){
          divDoSelectSegundaDisciplina.classList.remove("d-none");
        }

        if(divDoSelectTerceiraDisciplina.classList.contains("d-none")){
          divDoSelectTerceiraDisciplina.classList.remove("d-none");
        }

        if(divDoSelectQuartaDisciplina.classList.contains("d-none")){
          divDoSelectQuartaDisciplina.classList.remove("d-none");
        }
      }
    </script>
  </main>
@endsection