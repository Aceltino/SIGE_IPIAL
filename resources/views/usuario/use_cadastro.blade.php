@extends('layouts.main')

@section('title', 'Cadastrar usuário')

@section('conteudo')
<main id="main" class="main">
      <form action="" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
         
        </div>
 
        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal"> Dados pessoais</h2>
          

          <div class="form-group">
            <input name='nome_completo' type="text" class="input-sm" placeholder="Nome Completo do usuário" name="" oninput="this.className = ''">
          </div>
          
          <div class="row">
            <div class="col-5">
                 <input type="text" class="form-control" id="bi_input" style=" text-align: start;" placeholder="Número do bilhete de identidade" name="" oninput="this.className = ''">
                 <div id="mensagem1" style="color: red;"></div>
             </div>
            <div class="col-5">
                 <input type="date" id="datainput" class="form-control" style=" text-align: start;" placeholder="" name=""  oninput="this.className = ''">
                 <div id="mensagem" style="color: red;"></div>
             </div>
             <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" id="idadeinput" style="text-align: center;" readonly="true" disabled oninput="this.className = ''" value="00">
                </div> 
              </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-md-4">
                <div class="form-group">
                  <label class="me-3">Sexo:</label>
                  <input type="radio" id="masculino" name="genero" value="Masculino">
                  <label for="masculino" class="me-2"> Masculino</label>
                  <input type="radio" id="feminino" name="genero" value="Feminino" >
                  <label for="feminino"> Feminino</label>
                </div>
            </div>
            <div class="col-md-8 mt-3" style=" display: flex; justify-content: flex-end;align-items: center; gap: 10px;">
              <h5>Endereço</h5>
              <div class="form-group">
                <input name='municipio' type="text" placeholder="Municipio"  oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='bairro' type="text" placeholder="Bairro"  oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='zona' type="text" placeholder="Zona"  oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='numero_casa' type="number" id="numeroinput" placeholder="Nº Casa"  oninput="this.className = ''">
              </div> 
            </div>
          </div>

          <div class="row">
            <div id="clone1"class="col-lg-3  gap-1 justify-content-center align-items-center">
              <div>
                <span style="color: #777;">Telefone (+244):</span>
              </div>
              <div class=" col aa" style="display: flex; flex-direction: column;">
                <input type="text" value="" id="telefoneinput" placeholder="Telefone"  value="{{ old('num_tel') }}" name="num_tel" oninput="this.className = ''">
                <div class="mensagem-erro" style="width: 100%;"></div>
              </div>
              
            </div>
           
           
          </div>

        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações importantes do Usuário</h2>

          <div class="form-group">
            <input type="email" placeholder="E-mail do  usuário" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select" name="Fisic">
              <option selected disabled>Cargo</option>
              <option value="Professor">Professor</option>
              <option value="Subdirector">Subdirector Pedagogico</option>
              <option value="Secretaria">Secretaria Pedagogica</option>
              <option value="Director">Director Geral</option>
              <option value="Coordenacao">Coordenador</option>
              <option value="insc_user">Colaborador-Inscrição</option>
              <option value="matri_user">Colaborador-Matricula</option>
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