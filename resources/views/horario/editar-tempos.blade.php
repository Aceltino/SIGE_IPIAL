@extends('layouts.main')

@section('title', 'Editar tempos de aula')

@section('conteudo')
<main id="main" class="main">
    <form  id="regForm"  class="formulario-layout">
    
        <div style="text-align:center;margin-top:0px;">
            <span class="step"></span>
        </div>

        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Editar tempos de aula</h2>
            <h6 class="text-uppercase text-center my-4 color-blue-principal">Seleccione o respectivo turno e introduza os intervalos referentes à cada tempo de aula.</h6>

            <div class="row mb-4">
                <div class="col">
                    <select oninput="this.className = ''" class="form-select" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                        <optgroup label="Turno">
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Primeiro tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" oninput="this.className = ''" required>
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-primeiro-tempo-duracao"></p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Segundo tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" oninput="this.className = ''" required>
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-segundo-tempo-duracao"></p>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Terceiro tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" oninput="this.className = ''" required>
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-terceiro-tempo-duracao"></p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Quarto tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" oninput="this.className = ''" required>
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-quarto-tempo-duracao"></p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Quinto tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" oninput="this.className = ''" required>
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-quinto-tempo-duracao"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" value="Sexto tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" oninput="this.className = ''" required>
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-do-sexto-tempo-duracao"></p>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
            <div>
                <button type="submit" class="btn btn-success">Editar tempos de aula</button>
            </div>
        </div>
    </form>
</main>
@endsection