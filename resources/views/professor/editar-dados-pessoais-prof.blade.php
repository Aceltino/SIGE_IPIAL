@extends('layouts.main')

@section('title', 'Editar dados pessoais do professor')

@section('conteudo')
<main id="main" class="main">
        <div class="d-flex align-items-center justify-content-around bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
            <a class="d-flex align-items-center pe-0" href="#">
                <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
                <span class="d-flex align-items-center ps-2">
                  <div class="col-lg-3">
                      <a class="color-white" href={{ route('professor.Editar', ['id' => $professor->professor_id]) }}>Disciplina(s)</a>
                  </div>
                  <div class="col-lg-3">
                      <a class="color-white" href={{ route('horarioProfessor', ['id' => $professor->professor_id]) }}>Horário</a>
                  </div>
                  <div class="col-lg-3">
                      <a class="color-white" href={{ route('professor.dados-pessoais', ['id' => $professor->professor_id]) }}><strong>Dados pessoais</strong></a>
                  </div>
                </span>
            </a>
        </div>
        <form method="POST" action="{{ route('professor.atualizar', ['id' => $professor->professor_id]) }}">
            
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
            
            <h3 class="text-uppercase text-center my-3 color-blue-principal">dados pessoais</h3>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input id="nome_completo" type="text" placeholder="Nome do professor" value="{{ $professor->pessoa->nome_completo }}" name="nome_completo" id="letra" oninput="this.className = ''" minlength="3" maxlength="70">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <input id="formacao" type="text" placeholder="Formação" value="{{ $professor->formacao }}" name="formacao" id="letra" oninput="this.className = ''" minlength="3" maxlength="70">
                </div>
              </div>
            </div>
          
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                <input id="num_bi" type="text" placeholder="Número do BI" value="{{ $professor->pessoa->num_bi }}" name="num_bi" id="bi_input" oninput="this.className = ''" minlength="14" maxlength="14">
                  <p role="alert" id="mensagem1"></p>
                </div>
              </div>

              <div class="col-md-5">
                <div class="form-group">
                  <input name='data_nascimento' type="date" value="{{ $professor->pessoa->data_nascimento }}" id="data-de-nascimento-do-professor-input" oninput="this.className = ''">
                  <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-da-idade-do-professor"></p>
                </div> 
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <input type="text" class="form-control" readonly="true" id="idade-do-professor-input" oninput="this.className = ''" value="00" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                </div> 
              </div>
            </div>

 
            <div class="row d-flex align-items-center">
              <div class="col-md-9">
                <div class="form-group">
                  <label class="me-3">Sexo:</label>
                  <input type="radio" id="masculino" name="genero" value="Masculino" {{ $professor->pessoa->genero == 'Masculino' ? 'checked' : '' }} checked>
                  <label for="masculino" class="me-2"> Masculino</label>
                  <input type="radio" id="feminino" name="genero" value="Femenino" {{ $professor->pessoa->genero == 'Femenino' ? 'checked' : '' }}>
                  <label for="feminino"> Feminino</label>
                </div>
              </div>

              <div id="col-md-3"class="col-lg-3 gap-1 justify-content-center align-items-center">
                <div class=" col aa" style="display: flex; flex-direction: column;">
                  <div class="row align-items-center">
                    <span style="color: #777;" class="w-25">+244</span>
                    <input id="telefone" type="text" placeholder="Telefone" value="{{ $professor->pessoa->telefone }}" name="telefone" id="telefoneinput" oninput="this.className = ''" minlength="9" maxlength="9">
                  </div>
                  <div class="alert alert-danger mt-2 mensagem-erro " style="width: 100%;"></div>
                </div>
              </div>
            </div> 

            <div class="row">
              <h5>Endereço</h5>
              <div class="form-group col-md-3">
                <input name='municipio' value="{{ $professor->pessoa->endereco->municipio }}" type="text" placeholder="Municipio" id="municipio-do-professor-input">
              </div>
              
              <div class="form-group col-md-3">
                <input name='bairro' value="{{ $professor->pessoa->endereco->bairro }}" type="text" placeholder="Bairro" id="bairro-do-professor-input">
              </div> 
              <div class="form-group col-md-3">
                <input name='zona' value="{{ $professor->pessoa->endereco->zona }}" type="text" placeholder="Zona">
              </div> 
              <div class="form-group col-md-3">
                <input name='numero_casa' value="{{ $professor->pessoa->endereco->numero_casa }}" type="number" placeholder="Nº Casa" min="0" max="800">
              </div> 
            </div>

          <div style="text-align:center;margin-top:40px;">
            <div>
              <button class="btn color-white bg-yellowish-green" id="nextBtn" onclick="nextPrev(1)">Editar dados</button>
            </div>
          </div>
        </form>
    </main>
@endsection