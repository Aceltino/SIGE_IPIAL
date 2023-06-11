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
            <div class="col mt-2">
                 <input type="text" style=" text-align: start;" placeholder="Número do bilhete de identidade" name="" oninput="this.className = ''">
             </div>
            <div class="col  mt-2">
                 <input type="date" style=" text-align: start;" placeholder="" name=""  oninput="this.className = ''">
             </div>
             <div class="col-md-2">
                <div class="form-group">
                  <input type="text" class="form-control" readonly="true" disabled oninput="this.className = ''" value="00">
                </div> 
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
                <input name='municipio' type="text" placeholder="Municipio" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='bairro' type="text" placeholder="Bairro" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='zona' type="text" placeholder="Zona" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='numero_casa' type="number" placeholder="Nº Casa" required='false' oninput="this.className = ''">
              </div> 
            </div>
          </div>

          <div class="row">
            <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                <span style="color: #777;">+244</span>
                <input name='num_tel' type="text" name="" placeholder="Telefone" oninput="this.className = ''">
              </div>

              <div class="col-3">
                  <i id="clonebtn1"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
              </div>
          </div>
        </div>


        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações importantes para o instituto</h2>

          <div class="form-group">
            <input type="email" placeholder="E-mail do  usuário" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Password" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="password" placeholder="Confirme Password " oninput="this.className = ''">
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