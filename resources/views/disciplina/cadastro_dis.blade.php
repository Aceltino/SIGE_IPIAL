@extends('layouts.main')

@section('title', 'editar disciplina')

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
                        <h2>CADASTRAR DISCIPLINA</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" placeholder="Nome da disciplina" name="" oninput="this.className = ''">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="des-disciplina" rows="6" placeholder="Descrição"></textarea>
              </div>
              <div class="form-group">
                <select oninput="this.className = ''" class="form-select">
                  <option selected>Escolha o curso</option>
                  <option value="D.P">Desenhador projetista </option>
                  <option value="I.E">Técnico de Energia e Instalações Electricas</option>
                  <option value="I">Técnico de Informática</option>
                  <option value="E.T">Electronica e Telecomunicação</option>
                  <option value="T.C">Todos os cursos</option>
                </select>
              </div>
                
            <div style="text-align:center;margin-top:40px;">
                <div>
                    <button type="button" class="btn btn-success">Cadastrar</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection