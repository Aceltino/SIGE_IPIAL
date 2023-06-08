@extends('layouts.main')

@section('title', 'Editar dados pessoais do professor')

@section('conteudo')
<main id="main" class="main">
        <div class="d-flex align-items-center bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
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
                      <a class="color-white" href={{ route('avaliacao', ['id' => $professor->professor_id]) }}>Avaliação</a>
                  </div>
                  <div class="col-lg-3">
                      <a class="color-white" href={{ route('professor.dados-pessoais', ['id' => $professor->professor_id]) }}>Dados pessoais</a>
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
            
            <div class="form-group">
              <label for='nome_completo'>Nome Completo</label>
              <input id="nome_completo" type="text" placeholder="Nome do professor" value="{{ $professor->pessoa->nome_completo }}" name="nome_completo" oninput="this.className = ''">
            </div>
    
            <div class="form-group">
              <label for='num_bi'>Número do BI</label>
              <input id="num_bi" type="text" placeholder="Número do BI" value="{{ $professor->pessoa->num_bi }}" name="num_bi" oninput="this.className = ''">
            </div>
    
            <div class="form-group">
              <label for='telefone'>Número de Telefone</label>
              <input id="telefone" type="text" placeholder="Telefone" value="{{ $professor->pessoa->telefone }}" name="telefone" oninput="this.className = ''">
            </div>
    
            <div class="form-group">
              <label for='formacao'>Formação</label>
              <input id="formacao" type="text" placeholder="Formação" value="{{ $professor->formacao }}" name="formacao" oninput="this.className = ''">
            </div>

          <div style="text-align:center;margin-top:40px;">
            <div>
              <button class="btn color-white bg-yellowish-green" id="nextBtn" onclick="nextPrev(1)">Editar dados</button>
            </div>
          </div>
        </form>
    </main>
@endsection