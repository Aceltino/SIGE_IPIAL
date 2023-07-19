@extends('layouts.main')

@section('title', 'Ver tempos de aula (Definições)')

@section('conteudo')
<main id="main" class="main">
    <form  id="regForm"  class="formulario-layout">
        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Ver definições dos tempos de aula</h2>

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
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Segundo tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Terceiro tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Quarto tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" value="Quinto tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" value="Sexto tempo" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>

                <div class="col">
                    <input type="text" id="primeiro-tempo-duracao" placeholder="Ex: 07:00-70:50" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled readonly>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
            <div>
                <a href="/ver-tempos" class="btn btn-outline-secondary">Retroceder</a>
            </div>
        </div>
    </form>
</main>
@endsection