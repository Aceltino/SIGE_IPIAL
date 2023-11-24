@extends('layouts.main')

@section('title', 'Criar horário da turma')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action="" id="regForm" action="" class="formulario-layout">
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
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas e Professores</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione os professores para as disciplinas apresentadas.</h6>
          
          <div class="row d-flex mb-3">
                <div class="col row" id="div-disciplinas-no-horario">
                    
                </div>

                <div class="col" id="div-professores-no-horario">

                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Segunda-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" name="hora_segunda1" id="segunda-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="segunda-feira-disciplina-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="segunda-feira-sala-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-segunda-feira-sala-do-primeiro-tempo"></option>
                            <option id="option-lab-select-1"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="segunda-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="segunda-feira-disciplina-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="segunda-feira-sala-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-segunda-feira-sala-do-segundo-tempo"></option>
                            <option id="option-lab-select-2"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="segunda-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="segunda-feira-disciplina-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="segunda-feira-sala-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-segunda-feira-sala-do-terceiro-tempo"></option>
                            <option id="option-lab-select-3"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="segunda-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="segunda-feira-disciplina-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="segunda-feira-sala-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-segunda-feira-sala-do-quarto-tempo"></option>
                            <option id="option-lab-select-4"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="segunda-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="segunda-feira-disciplina-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="segunda-feira-sala-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-segunda-feira-sala-do-quinto-tempo"></option>
                            <option id="option-lab-select-5"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="segunda-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="segunda-feira-disciplina-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="segunda-feira-sala-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-segunda-feira-sala-do-sexto-tempo"></option>
                            <option id="option-lab-select-6"></option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Terça-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="hora_terça1" id="terca-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="terca-feira-disciplina-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="terca-feira-sala-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-terca-feira-sala-do-primeiro-tempo"></option>
                            <option id="option-lab-select-7"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="terca-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="terca-feira-disciplina-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="terca-feira-sala-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-terca-feira-sala-do-segundo-tempo"></option>
                            <option id="option-lab-select-8"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="terca-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="terca-feira-disciplina-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="terca-feira-sala-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-terca-feira-sala-do-terceiro-tempo"></option>
                            <option id="option-lab-select-9"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="terca-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="terca-feira-disciplina-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="terca-feira-sala-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-terca-feira-sala-do-quarto-tempo"></option>
                            <option id="option-lab-select-10"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="terca-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="terca-feira-disciplina-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="terca-feira-sala-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-terca-feira-sala-do-quinto-tempo"></option>
                            <option id="option-lab-select-11"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="terca-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="terca-feira-disciplina-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="terca-feira-sala-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-terca-feira-sala-do-sexto-tempo"></option>
                            <option id="option-lab-select-12"></option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quarta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quarta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quarta-feira-disciplina-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quarta-feira-sala-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quarta-feira-sala-do-primeiro-tempo"></option>
                            <option id="option-lab-select-13"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quarta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quarta-feira-disciplina-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quarta-feira-sala-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quarta-feira-sala-do-segundo-tempo"></option>
                            <option id="option-lab-select-14"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quarta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quarta-feira-disciplina-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quarta-feira-disciplina-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quarta-feira-sala-do-terceiro-tempo"></option>
                            <option id="option-lab-select-15"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quarta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quarta-feira-disciplina-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quarta-feira-sala-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quarta-feira-sala-do-quarto-tempo"></option>
                            <option id="option-lab-select-16"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quarta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quarta-feira-disciplina-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quarta-feira-sala-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quarta-feira-sala-do-quinto-tempo"></option>
                            <option id="option-lab-select-17"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quarta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quarta-feira-disciplina-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quarta-feira-sala-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quarta-feira-sala-do-sexto-tempo"></option>
                            <option id="option-lab-select-18"></option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quinta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quinta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quinta-feira-disciplina-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quinta-feira-sala-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quinta-feira-sala-do-primeiro-tempo"></option>
                            <option id="option-lab-select-19"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quinta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quinta-feira-disciplina-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quinta-feira-sala-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quinta-feira-sala-do-segundo-tempo"></option>
                            <option id="option-lab-select-20"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quinta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quinta-feira-disciplina-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quinta-feira-sala-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quinta-feira-sala-do-terceiro-tempo"></option>
                            <option id="option-lab-select-21"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quinta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quinta-feira-disciplina-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quinta-feira-sala-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quinta-feira-sala-do-quarto-tempo"></option>
                            <option id="option-lab-select-22"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quinta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quinta-feira-disciplina-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quinta-feira-sala-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quinta-feira-sala-do-quinto-tempo"></option>
                            <option id="option-lab-select-23"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="quinta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="quinta-feira-disciplina-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="quinta-feira-sala-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-quinta-feira-sala-do-sexto-tempo"></option>
                            <option id="option-lab-select-24"></option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Sexta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="sexta-feira-primeiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="sexta-feira-disciplina-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="sexta-feira-sala-do-primeiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-sexta-feira-sala-do-primeiro-tempo"></option>
                            <option id="option-lab-select-25"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="sexta-feira-segundo-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="sexta-feira-disciplina-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="sexta-feira-sala-do-segundo-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-sexta-feira-sala-do-segundo-tempo"></option>
                            <option id="option-lab-select-26"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="sexta-feira-terceiro-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="sexta-feira-disciplina-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="sexta-feira-sala-do-terceiro-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-sexta-feira-sala-do-terceiro-tempo"></option>
                            <option id="option-lab-select-27"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="sexta-feira-quarto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="sexta-feira-disciplina-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="sexta-feira-sala-do-quarto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-sexta-feira-sala-do-quarto-tempo"></option>
                            <option id="option-lab-select-28"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="sexta-feira-quinto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="sexta-feira-disciplina-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="sexta-feira-sala-do-quinto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-sexta-feira-sala-do-quinto-tempo"></option>
                            <option id="option-lab-select-29"></option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="" name="" id="sexta-feira-sexto-tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                </div>

                <div class="col-sm-5">
                    <select id="sexta-feira-disciplina-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">

                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="sexta-feira-sala-do-sexto-tempo" oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option id="option-sala-sexta-feira-sala-do-sexto-tempo"></option>
                            <option id="option-lab-select-30"></option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg last-shot" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>
    </main>
    <script>
        

        
    </script>
@endsection