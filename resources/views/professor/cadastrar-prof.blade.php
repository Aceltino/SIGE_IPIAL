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
          
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}
                      <button class="botaofecharerro">
                        <i class="bi bi-x"></i>
                      </button>
                    </li>
                  @endforeach
              </ul>
            </div>
          @endif

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <input name='nome_completo' type="text" class="input-sm" placeholder="Nome Completo do professor" id="letra" oninput="this.className = ''" minlength="3" maxlength="70">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <input name='formacao' type="text" class="input-sm" placeholder="Formação do professor" id="letra" oninput="this.className = ''" minlength="3" maxlength="70">
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <input name='num_bi' type="text" placeholder="Número do bilhete de identidade" id="bi_input" oninput="this.className = ''" minlength="14" maxlength="14">
                <p role="alert" id="mensagem1"></p>
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <input name='data_nascimento' type="date" id="data-de-nascimento-do-professor-input" oninput="this.className = ''">
                <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-da-idade-do-professor"></p>
              </div> 
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" class="form-control" readonly="true" id="idade-do-professor-input" disabled oninput="this.className = ''" value="00">
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
                  <input class="w-75" name='num_tel' type="text" name="" placeholder="Telefone" id="telefoneinput" oninput="this.className = ''" minlength="9" maxlength="9">
                </div>
                <div class="alert alert-danger mt-2 mensagem-erro  " style="width: 100%;"></div>
              </div>
            </div>
          </div> 

          <div class="row">
            <h5>Endereço</h5>
            <div class="form-group col-md-3">
              <input name='municipio' type="text" placeholder="Municipio" id="municipio-do-professor-input">
            </div>
            
            <div class="form-group col-md-3">
              <input name='bairro' type="text" placeholder="Bairro" id="bairro-do-professor-input">
            </div> 
            <div class="form-group col-md-3">
              <input name='zona' type="text" placeholder="Zona">
            </div> 
            <div class="form-group col-md-3">
              <input name='numero_casa' type="number" placeholder="Nº Casa" min="0" max="800">
            </div> 
          </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas a lecionar e escolha de turno(s)</h2>

          <div class="form-group col-md-6 offset-md-3 mb-3">
            <h6 class="color-blue-principal">Introduza o número de disciplinas que o professor vai lecionar.</h6>
            <input type="number" placeholder="Quantidade de disciplinas" id="quantidade-de-disciplinas" min="1" value="1" max="4" required='false'>
          </div>

          <section class="row align-items-center ms-5 mb-4" id="div-disciplina-1">
            <div class="form-group col-7 mb-0">
              <select name='disciplina' oninput="this.className = ''" class="form-select" id="displina-a-leccionar-1" onchange="verificarSelecoes()">
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
                    <input class="form-check-input" type="checkbox" value="Manhã">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite">
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
                    <input class="form-check-input" type="checkbox" value="Manhã">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite">
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
                    <input class="form-check-input" type="checkbox" value="Manhã">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite">
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
                    <input class="form-check-input" type="checkbox" value="Manhã">
                    <label class="form-check-label" for="checkboxTurnoManha">Manhã</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Tarde">
                    <label class="form-check-label" for="checkboxTurnoTarde">Tarde</label>
                  </div>
                  <div class="form-check form-switch w-25">
                    <input class="form-check-input" type="checkbox" value="Noite">
                    <label class="form-check-label" for="checkboxTurnoNoite">Noite</label>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações importantes para o instituto</h2>

          <h5 class="text-uppercase text-center my-3 color-blue-principal">Sobre o(s) curso(s) que fará parte</h5>

          <div class="form-group col">
            <div class="d-flex justify-content-around flex-wrap">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" value="Desenhador Projectista">
                <label class="form-check-label" for="checkboxCursoDeDesenhadorProjectista">Desenhador Projectista</label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" value="Técnico de Energia e Instalações Eléctricas">
                <label class="form-check-label" for="checkboxCursoTecnicoDeEnergiaEInstalacoesElectricas">Técnico de Energia e Instalações Eléctricas</label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" value="Técnico de Informática">
                <label class="form-check-label" for="checkboxCursoTecnicoDeInformatica">Técnico de Informática</label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" value="Electrônica e Telecomunicação">
                <label class="form-check-label" for="checkboxCursoElectronicaETelecomunicacao">Electrônica e Telecomunicação</label>
              </div>
            </div>
          </div>

          <h5 class="text-uppercase text-center my-3 color-blue-principal">Sobre o cargo</h5>

          <div class="form-group col">
            <select oninput="this.className = ''" class="form-select" id="select-cargo-cadastrar-professor">
              <optgroup label="Cargo">
                <option>Professor</option>
                <option>Coordenador do curso</option>
                <option>Coordenador da área de formação</option>
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
            <input type="email" placeholder="E-mail do professor" id="email-do-professor-input" oninput="this.className = ''" minlength="10" maxlength="40">
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