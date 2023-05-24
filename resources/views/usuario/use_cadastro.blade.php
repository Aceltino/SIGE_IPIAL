@extends('layouts.main')

@section('title', 'Cadastrar usuário')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout">

        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
        </div>

        <div class="tab">     
        
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CADASTRAR USUÁRIO</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: start;" placeholder="Nome completo do usuário" name="" oninput="this.className = ''">
            </div>
            <div class="form-group">
              <input type="email" style=" text-align: start;" placeholder="E-mail do usuário" name="" oninput="this.className = ''">
          </div>
          <div class="form-group">
            <input type="password" style=" text-align: start;" placeholder="password do usuário(Auto-preenchimento)" name="" oninput="this.className = ''">
        </div>
                            
            <div class="form-group">
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select" >
                    <option selected disabled>Cargo:</option>
                    <option value="Informática">Professor/a</option>
                    <option value="Contrução civil">Secretário/a</option>
                    <option value="Eletronica">Coordenador/a</option>
                </select><br>
                <div class="col-4">
                  <div class="form-group">
                      <LAbel > Sexo: </LAbel><input  style=" margin-left: 8px;"type="radio" id="masculino" name="genero" checked><label for="masculino"> Masculino</label>
                      <input type="radio" id="feminino" name="genero"><label for="feminino"> Feminino</label>
                  </div> 
              </div>
                <div class="form-group">
                  <label for="imagem_usuario"><span class="btn btn-warning btn-sm" title="inserir imagem"><i class="bi bi-upload"></i></span></label>
                  <input type="file" id="imagem_usuario" hidden>
              </div>
                        
            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="button" class="btn btn-success">Cadastar</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection