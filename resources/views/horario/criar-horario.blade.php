@extends('layouts.main')

@section('title', 'Criar horário da turma')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action="" id="regForm" action="" class="formulario-layout formulario-horario">
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Dados do horário</h2>
            <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione a turma.</h6>

            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''" name='turma' class="form-select" id="horario-select-turma">
                        <optgroup id="optgroup-turma" label="Turma">
                            <option value="Turma">Escolha uma turma</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas, Professores e Sala</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione os professores para as disciplinas apresentadas e os locais em que serão lecionadas.</h6>
          
          <div class="row d-flex mb-3">
                <div class="col-6" id="div-disciplinas-no-horario">
                    
                </div>

                <div class="col-4" id="div-professores-no-horario">

                </div>

                <div class="col-2" id="div-salas-no-horario">

                </div>

                <div class="col-12 mt-4">
                <button type="button" class="w-100 btn btn-outline-success" id="btn-gerar-horario">Gerar horário</button>
            </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Segunda-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <input type="hidden" value="Segunda-Feira" name="dia-semana-1">
          
          <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="1º TEMPO" name="segunda-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" name="horario-segunda-feira-primeiro-tempo" id="segunda-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="segunda-feira-disciplina-do-primeiro-tempo" id="segunda-feira-disciplina-do-primeiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="2º TEMPO" name="segunda-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-segunda-feira-segundo-tempo" id="segunda-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="segunda-feira-disciplina-do-segundo-tempo" id="segunda-feira-disciplina-do-segundo-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="3º TEMPO" name="segunda-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-segunda-feira-terceiro-tempo" id="segunda-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="segunda-feira-disciplina-do-terceiro-tempo" id="segunda-feira-disciplina-do-terceiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="4º TEMPO" name="segunda-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-segunda-feira-quarto-tempo" id="segunda-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="segunda-feira-disciplina-do-quarto-tempo" id="segunda-feira-disciplina-do-quarto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="5º TEMPO" name="segunda-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-segunda-feira-quinto-tempo" id="segunda-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="segunda-feira-disciplina-do-quinto-tempo" id="segunda-feira-disciplina-do-quinto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="6º TEMPO" name="segunda-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-segunda-feira-sexto-tempo" id="segunda-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="segunda-feira-disciplina-do-sexto-tempo" id="segunda-feira-disciplina-do-sexto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Terça-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <input type="hidden" value="Terça-Feira" name="dia-semana-2">

          <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="1º TEMPO" name="terca-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-terca-feira-primeiro-tempo" id="terca-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="terca-feira-disciplina-do-primeiro-tempo" id="terca-feira-disciplina-do-primeiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="2º TEMPO" name="terca-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-terca-feira-segundo-tempo" id="terca-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="terca-feira-disciplina-do-segundo-tempo" id="terca-feira-disciplina-do-segundo-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="3º TEMPO" name="terca-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-terca-feira-terceiro-tempo" id="terca-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="terca-feira-disciplina-do-terceiro-tempo" id="terca-feira-disciplina-do-terceiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="4º TEMPO" name="terca-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-terca-feira-quarto-tempo" id="terca-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="terca-feira-disciplina-do-quarto-tempo" id="terca-feira-disciplina-do-quarto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="5º TEMPO" name="terca-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-terca-feira-quinto-tempo" id="terca-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="terca-feira-disciplina-do-quinto-tempo" id="terca-feira-disciplina-do-quinto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="6º TEMPO" name="terca-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-terca-feira-sexto-tempo" id="terca-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="terca-feira-disciplina-do-sexto-tempo" id="terca-feira-disciplina-do-sexto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>
        </div>
        
        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quarta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <input type="hidden" value="Quarta-Feira" name="dia-semana-3">

          <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="1º TEMPO" name="quarta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quarta-feira-primeiro-tempo" id="quarta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quarta-feira-disciplina-do-primeiro-tempo" id="quarta-feira-disciplina-do-primeiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="2º TEMPO" name="quarta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quarta-feira-segundo-tempo" id="quarta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quarta-feira-disciplina-do-segundo-tempo" id="quarta-feira-disciplina-do-segundo-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="3º TEMPO" name="quarta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quarta-feira-terceiro-tempo" id="quarta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quarta-feira-disciplina-do-terceiro-tempo" id="quarta-feira-disciplina-do-terceiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="4º TEMPO" name="quarta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quarta-feira-quarto-tempo" id="quarta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quarta-feira-disciplina-do-quarto-tempo" id="quarta-feira-disciplina-do-quarto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="5º TEMPO" name="quarta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quarta-feira-quinto-tempo" id="quarta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quarta-feira-disciplina-do-quinto-tempo" id="quarta-feira-disciplina-do-quinto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="6º TEMPO" name="quarta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quarta-feira-sexto-tempo" id="quarta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quarta-feira-disciplina-do-sexto-tempo" id="quarta-feira-disciplina-do-sexto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quinta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
            <input type="hidden" value="Quinta-Feira" name="dia-semana-4">

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="1º TEMPO" name="quinta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quinta-feira-primeiro-tempo" id="quinta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quinta-feira-disciplina-do-primeiro-tempo" id="quinta-feira-disciplina-do-primeiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="2º TEMPO" name="quinta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quinta-feira-segundo-tempo" id="quinta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quinta-feira-disciplina-do-segundo-tempo" id="quinta-feira-disciplina-do-segundo-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="3º TEMPO" name="quinta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quinta-feira-terceiro-tempo" id="quinta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quinta-feira-disciplina-do-terceiro-tempo" id="quinta-feira-disciplina-do-terceiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="4º TEMPO" name="quinta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quinta-feira-quarto-tempo" id="quinta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quinta-feira-disciplina-do-quarto-tempo" id="quinta-feira-disciplina-do-quarto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="5º TEMPO" name="quinta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quinta-feira-quinto-tempo" id="quinta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quinta-feira-disciplina-do-quinto-tempo" id="quinta-feira-disciplina-do-quinto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="6º TEMPO" name="quinta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-quinta-feira-sexto-tempo" id="quinta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="quinta-feira-disciplina-do-sexto-tempo" id="quinta-feira-disciplina-do-sexto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Sexta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>

          <input type="hidden" value="Sexta-Feira" name="dia-semana-5">
          
          <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="1º TEMPO" name="sexta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-sexta-feira-primeiro-tempo" id="sexta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="sexta-feira-disciplina-do-primeiro-tempo" id="sexta-feira-disciplina-do-primeiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="2º TEMPO" name="sexta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-sexta-feira-segundo-tempo" id="sexta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="sexta-feira-disciplina-do-segundo-tempo" id="sexta-feira-disciplina-do-segundo-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="3º TEMPO" name="sexta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-sexta-feira-terceiro-tempo" id="sexta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="sexta-feira-disciplina-do-terceiro-tempo" id="sexta-feira-disciplina-do-terceiro-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="4º TEMPO" name="sexta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-sexta-feira-quarto-tempo" id="sexta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="sexta-feira-disciplina-do-quarto-tempo" id="sexta-feira-disciplina-do-quarto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="5º TEMPO" name="sexta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-sexta-feira-quinto-tempo" id="sexta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="sexta-feira-disciplina-do-quinto-tempo" id="sexta-feira-disciplina-do-quinto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <input type="text" value="6º TEMPO" name="sexta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="horario-sexta-feira-sexto-tempo" id="sexta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="sexta-feira-disciplina-do-sexto-tempo" id="sexta-feira-disciplina-do-sexto-tempo" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>
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
    <script>
        

        
    </script>
@endsection