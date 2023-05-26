@extends('layouts.autentic')

@section('title', 'Cadastrar')

@section('formulario-aut')

  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span><br>
      <span>Cadastro de Usuario</span>
    </div>
    
    
    <form method="POST" action="" id="regForm" class="row g-3 needs-validation">
  
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>

      {{-- Dados da Pessoa - Apagar em Produção --}}
      <div class="tab">

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" class="form-control" placeholder="Nome" required>
          <input type="text" autocomplete="off" class="form-control" placeholder="Sobre-nome" required>
          <div class="invalid-feedback">Por favor insira o Nome Completo</div>
        </div>

        <div class="col">
            <div class="input-group has-validation">
              <input type="text" autocomplete="off" class="form-control" placeholder="Nº BI" required>
              <div class="invalid-feedback">Por favor insira o Número de BI.</div>
            </div>
        </div>
  
        <div class="input-group has-validation">
          <select class="form-select">
            <option value="1" selected>Homem</option>
            <option value="2">Mulher</option>
          </select>
        </div>
  
        <span style="color: rgb(88, 85, 85);">
          Data de Nascimento
          <div class="col">
            <div class="input-group has-validation">
              <input type="date" autocomplete="off" class="form-control" placeholder="Data de Nascimento" required>
              <div class="invalid-feedback">Por favor insira a Data de Nascimento.</div>
            </div>
          </div>
        </span>
    
      </div>

      {{--  Dados do Endereço - Apagar em Produção--}}
      <div class="tab">

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" class="form-control" placeholder="Municipio" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" class="form-control" placeholder="Bairro" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>

        <div class="input-group has-validation">
          <input type="text" autocomplete="off" class="form-control" placeholder="Zona" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>

        <div class="input-group has-validation">
          <input type="number" autocomplete="off" class="form-control" placeholder="Casa Nº" required>
          <div class="invalid-feedback">Por favor insira um Nome Completo</div>
        </div>
       

      </div>

      {{-- Dados do Usuario - Apagar em Produção --}}
      <div class="tab">
        
        <div class="input-group has-validation">
          <input type="number" autocomplete="off" value="+244 " class="form-control" placeholder="Telefone Nº" required>
          <div class="invalid-feedback">Por favor insira um Número de Telefone</div>
        </div>

        <div class="input-group has-validation">
          <select class="form-select">
            <option value="null" selected>*Selecciona o Cargo*</option>
            <option value="1">Administrador</option>
            <option value="2">Professor</option>
            <option value="3">Subdirector Pedagogico</option>
            <option value="4">Secretaria Pedagogica</option>
            <option value="5">Director Geral</option>
            <option value="6">Coordenação</option>
            <option value="7">Usuario - Inscrição</option>
            <option value="8">Usuario - Matricula</option>
          </select>
        </div>

        <div class="input-group has-validation">
          <input type="email" autocomplete="off" class="form-control" placeholder="Email" required>
          <div class="invalid-feedback">Por favor insira um Email</div>
        </div>

        <div class="input-group has-validation">
          <input type="password" autocomplete="off" class="form-control" placeholder="Senha" required>
          <div class="invalid-feedback">Por favor insira uma Senha</div>
        </div>

        <div class="input-group has-validation">
          <input type="password" autocomplete="off" class="form-control" placeholder="Confirmação da Senha" required>
          <div class="invalid-feedback">Por favor insira a confirmação da senha</div>
        </div>

      </div>
      
  <div style="text-align:center;margin-top:10px;">
    <div>
      <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
      <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
    </div>
  </div>

</div>
  
  </form>

  </div>
@endsection