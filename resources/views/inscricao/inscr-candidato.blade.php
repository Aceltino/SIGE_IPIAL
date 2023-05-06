@extends('layouts.main')

@section('title', 'Inscrever-se')

@section('conteudo')
<main id="main" class="main">
      <form id="regFormh" action="" class="form-nscricao">
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

        <div class="tab">
          <h2>introduza os dados pessoais</h2>
          
          <div class="form-group">
            <input type="text" placeholder="Nome Completo" name="" oninput="this.className = ''">
          </div>
          
          <div class="row">
            <div class="col">
              <div class="form-group">
                <input type="text" placeholder="Nome do Pai" oninput="this.className = ''">
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <input type="text" placeholder="Nome da Mãe" oninput="this.className = ''">
              </div> 
            </div>
          </div>
          
          <div class="row">
            <div class="col">
              <p><input type="date" name="" oninput="this.className = ''"></p>
            </div>

            <div class="col">
              <input type="text" readonly="true" value="00" name="" desable="">
            </div>
            <div class="col">
              <input type="text" placeholder="Naturalidade" name="" oninput="this.className = ''">
            </div>
          </div>
          
          <div class="row">
            <div class="col">
              <div class="form-group">
                <input type="radio" id="masculino" name="genero" checked><label for="masculino"> Masculino</label>
                <input type="radio" id="feminino" name="genero"><label for="feminino"> Feminino</label>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <input type="text" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
              </div> 
            </div>
          </div>

          <div class="row">
            <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
              <span style="color: #777;">+244</span>
              <input type="text" value="" name="" placeholder="Telefone" oninput="this.className = ''">
            </div>

            <div class="col-3">
                <i id="clonebtn1"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
            </div>
          </div>
        </div>

        <div class="tab">
          <h2>introduza os dados da escola de providência</h2>
          <div class="form-group">
            <input type="text" placeholder="Nome da escola de providência" oninput="this.className = ''">
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

            <div class="form-group col">
              <input type="text" placeholder="Nº de estudante" oninput="this.className = ''">
            </div>

            <div class="form-group col">
              <input type="text" placeholder="Turma" oninput="this.className = ''">
            </div>

          </div>

          <div class="row">
            <div class="form-group col">
              <input type="text" placeholder="Processo nº" oninput="this.className = ''">
            </div>

            <div class="form-group col">
              <input type="text" placeholder="Ano Lectivo" oninput="this.className = ''">
            </div>
            
          </div>
        </div>

        <div class="tab">
          <h2>Escolha o curso segundo a ordem de preferência</h2>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a primeira opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a segunda opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a terceira opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a quarta opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

        </div>

        <div class="tab">
          <h2>Digite as médias para cada disciplina solicitada</h2>
          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Língua Portuguesa</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Matemática</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Física</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Química</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
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