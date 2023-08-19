@extends('layouts.main')

@section('title', 'Cadastrar professor')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action={{ route('prof.postRegistar') }} id="regForm" action="" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
 
        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">introduza os dados pessoais </h2>
          
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}
                      <button class="botaofecharerro">
                        <i class="bi bi-x"></i>
                      </button>
                    </li>
                  @endforeach
              </ul>
            </div>
          @endif

          @if(session()->has('error'))
            <div class="alert alert-danger"> 
              {{ session('error') }}
            </div>
          @endif

          @if(session()->has('success'))
            <div class="alert alert-success"> 
              {{ session('success') }}
            </div>
          @endif

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                  <input name='nome' value="{{ old('nome') }}" type="text" class="input-sm" placeholder="Nome do professor" id="letra" oninput="this.className = ''" minlength="3" maxlength="70">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                  <input name='sobrenome' value="{{ old('sobrenome') }}" type="text" class="input-sm" placeholder="Sobrenome do professor" id="letra" oninput="this.className = ''" minlength="3" maxlength="70">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <input name='formacao' value="{{ old('formacao') }}" type="text" class="input-sm" placeholder="Formação do professor" id="letra" oninput="this.className = ''" minlength="3" maxlength="70">
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <input name='num_bi' value="{{ old('num_bi') }}" type="text" placeholder="Número do bilhete de identidade" id="bi_input" oninput="this.className = ''" minlength="14" maxlength="14">
                <p role="alert" id="mensagem1"></p>
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <input name='data_nascimento' value="{{ old('data_nascimento') }}" type="date" id="data-de-nascimento-do-professor-input" oninput="this.className = ''">
                <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-da-idade-do-professor"></p>
              </div> 
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" class="form-control" readonly="true" id="idade-do-professor-input" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled oninput="this.className = ''" value="00">
              </div> 
            </div>
          </div>

 
          <div class="row d-flex align-items-center">
            <div class="col-md-9">
              <div class="form-group">
                <label class="me-3">Sexo:</label>
                <input type="radio" id="masculino" name="genero" value="Masculino" {{ old('genero') == 'Masculino' ? 'checked' : '' }} checked>
                <label for="masculino" class="me-2"> Masculino</label>
                <input type="radio" id="feminino" name="genero" value="Femenino" {{ old('genero') == 'Femenino' ? 'checked' : '' }}>
                <label for="feminino"> Feminino</label>
              </div>
            </div>

            <div id="col-md-3"class="col-lg-3 gap-1 justify-content-center align-items-center">
              <div class=" col aa" style="display: flex; flex-direction: column;">
                <div class="row align-items-center">
                  <span style="color: #777;" class="w-25">+244</span>
                  <input class="w-75" name='num_tel' value="{{ old('num_tel') }}" type="text" placeholder="Telefone" id="telefoneinput" oninput="this.className = ''" minlength="9" maxlength="9">
                </div>
                <div class="alert alert-danger mt-2 mensagem-erro  " style="width: 100%;"></div>
              </div>
            </div>
          </div> 

          <div class="row">
            <h5>Endereço</h5>
            <div class="form-group col-md-3">
              <input name='municipio' value="{{ old('municipio') }}" type="text" placeholder="Municipio">
            </div>
            
            <div class="form-group col-md-3">
              <input name='bairro' value="{{ old('bairro') }}" type="text" placeholder="Bairro" id="bairro-do-professor-input">
            </div> 
            <div class="form-group col-md-3">
              <input name='zona' value="{{ old('zona') }}" type="text" placeholder="Zona">
            </div> 
            <div class="form-group col-md-3">
              <input name='numero_casa' value="{{ old('numero_casa') }}" type="number" placeholder="Nº Casa" min="1">
            </div> 
          </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas a lecionar e escolha de turno(s)</h2>

          <div class="form-group col-md-6 offset-md-3 mb-3">
            <h6 class="color-blue-principal">Introduza o número de disciplinas que o professor vai lecionar.</h6>
            <input name="qtd_disciplinas" value="1" type="number" placeholder="Quantidade de disciplinas" id="quantidade-de-disciplinas" min="1" value="1" max="4" required='false'>
          </div>

          <section class="row align-items-center ms-5 mb-4" id="div-disciplina-1">
            <div class="form-group col-7 mb-0">
              <select name="disciplina[]" oninput="this.className = ''" class="form-select" id="displina-a-leccionar-1" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                  @foreach($disciplinas as $disciplina)
                    <option value="{{ $disciplina->disciplina_id }}"  {{ old('disciplina') == $disciplina->disciplina_id ? 'selected' : '' }}>{{ $disciplina->nome_disciplina }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="1" name="turno[1][]" id="turno-manha-disciplina-1">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="2" name="turno[1][]" id="turno-tarde-disciplina-1">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="3" name="turno[1][]" id="turno-noite-disciplina-1">
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="row align-items-center ms-5 mb-4 d-none" id="div-disciplina-2">
            <div class="form-group col-7 mb-0">
              <select name="disciplina[]" oninput="this.className = ''" class="form-select" id="displina-a-leccionar-2" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                  @foreach($disciplinas as $disciplina)
                    <option value="{{ $disciplina->disciplina_id }}">{{ $disciplina->nome_disciplina }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="1" name="turno[2][]" id="turno-manha-disciplina-2">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="2" name="turno[2][]" id="turno-tarde-disciplina-2">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="3" name="turno[2][]" id="turno-noite-disciplina-2">
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="row align-items-center ms-5 mb-4 d-none" id="div-disciplina-3">
            <div class="form-group col-7 mb-0">
              <select name="disciplina[]" oninput="this.className = ''" class="form-select" id="displina-a-leccionar-3" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                  @foreach($disciplinas as $disciplina)
                    <option value="{{ $disciplina->disciplina_id }}">{{ $disciplina->nome_disciplina }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="1" name="turno[3][]" id="turno-manha-disciplina-3">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="2" name="turno[3][]" id="turno-tarde-disciplina-3">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="3" name="turno[3][]" id="turno-noite-disciplina-3">
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="row align-items-center ms-5 mb-4 d-none" id="div-disciplina-4">
            <div class="form-group col-7 mb-0">
              <select name="disciplina[]" oninput="this.className = ''" class="form-select" id="displina-a-leccionar-4" onchange="verificarSelecoes()">
                <optgroup label="Disciplinas">
                  @foreach($disciplinas as $disciplina)
                    <option value="{{ $disciplina->disciplina_id }}">{{ $disciplina->nome_disciplina }}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="col-5">
              <div class="col-8 offset-2">
                <div class="row justify-content-between">
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="1" name="turno[4][]" id="turno-manha-disciplina-4">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="2" name="turno[4][]" id="turno-tarde-disciplina-4">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="3" name="turno[4][]" id="turno-noite-disciplina-4">
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações importantes para o instituto</h2>

          <h5 class="text-uppercase text-center my-3 color-blue-principal">Sobre o cargo</h5>

          <div class="form-group col">
            <select name='cargo' oninput="this.className = ''" class="form-select" id="select-cargo-cadastrar-professor">
              <optgroup label="Cargo">
                <option value="Professor">Professor</option>
                <option value="Coordenador Curso">Coordenador do curso</option>
                <option value="Coordenador Area">Coordenador da área de formação</option>
              </optgroup>
            </select>
          </div>

          <div class="col mb-3 d-none" id="div-do-select-do-curso">
            <select name='course' oninput="this.className = ''" class="form-select">
              <optgroup label="Curso">
                @foreach($cursos as $curso)
                  <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso}}</option>
                @endforeach
              </optgroup>
            </select>
          </div>

          <div class="col mb-3 d-none" id="div-do-select-da-area-de-formacao">
            <select name="area_formacao" oninput="this.className = ''" class="form-select">
              <optgroup label="Área de formação">
                @foreach ($area_formacao as $af)
                  <option value="{{ $af->area_formacao_id }}">{{ $af->nome_area_formacao }}</option>
                @endforeach
              </optgroup>
            </select>
          </div>

          <div class="form-group">
            <input name="email" type="email" placeholder="E-mail do professor" id="email-do-professor-input" oninput="this.className = ''">
            <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-do-email-do-professor"></p>
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