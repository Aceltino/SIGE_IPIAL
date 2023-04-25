@extends('layouts.main')

@section('title', 'Cadastrar professor')

@section('conteudo')
<main id="main" class="main">
      <form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3">introduza os dados pessoais</h2>
          
          <div class="form-group">
            <input type="text" class="input-sm" placeholder="Nome Completo do professor" name="" oninput="this.className = ''">
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <input type="text" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <input type="date" oninput="this.className = ''">
              </div> 
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" placeholder="idade" oninput="this.className = ''">
              </div> 
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="me-3">Sexo</label>
                <input type="radio" id="masculino" name="genero" checked><label for="masculino" class="me-2"> Masculino</label>
                <input type="radio" id="feminino" name="genero"><label for="feminino"> Feminino</label>
              </div>
            </div>

            <div class="col-md-9">
              <div class="form-group">
                <input type="text" placeholder="Morada" oninput="this.className = ''">
              </div> 
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 d-flex gap-1 justify-content-center align-items-center">
            <span style="color: #777;">+244</span>
            <input type="text" placeholder="Telefone-1" name="" oninput="this.className = ''">
          </div>

            <div class="col">
              <i class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
            </div>
          </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3">introduza os dados da escola de providência</h2>
          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Curso</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

          <div class="row">
            <div class="form-group col">
              <select oninput="this.className = ''" class="form-select">
                <option selected>Turno</option>
                <option>Manhã</option>
                <option>Tarde</option>
                <option>Noite</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Disciplinas</option>
              <option>Educação Física</option>
              <option>Electrotecnia</option>
              <option>Empreendedorismo</option>
              <option>Física</option>
              <option>Formação de Atitudes Integradoras</option>
              <option>Lígua Portuguesa</option>
              <option>Língua Estrangeira</option>
              <option>Geometria Descritiva</option>
              <option>Matemática</option>
              <option>Máquinas Eléctricas</option>
              <option>Organização e Gestão Industrial</option>
              <option>Práticas Oficinais</option>
              <option>Projecto Tecnológico</option>
              <option>Química</option>
              <option>Sistemas de Exploração e Arquitectura de Computadores</option>
              <option>Técnicas e Linguagens de Programação</option>
              <option>Técnicas de Reparação de Equipamentos Informáticos</option>
              <option>Tecnológias de Informação e Comunicação</option>
            </select>
            </div>
          </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3">Escolha o curso segundo a ordem de preferência</h2>

          <div class="form-group">
            <input type="text" placeholder="Digite o nome do professor" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Username do professor (Auto-preenchimento)" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Password do professor (Auto-preenchimento)" oninput="this.className = ''">
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