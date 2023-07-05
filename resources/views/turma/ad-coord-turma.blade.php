@extends('layouts.main')

@section('title', 'Adicionar Coordenador')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Adicionar coordenador de turma:</h1>      
        </div>
        
    </div>

    <form class="form-inativo" method="POST">
        <div class="dados-pessoais">        
            <div class="col form-group gap-1 ">
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option  disabled selected>Escolher Professor:</option>
                    <option value="Décima">Prof 1</option>
                    <option value="Décima-primeira">Prof 2</option>
                    <option value="Décima-segunda">Prof 3</option>
                    <option value="Décima-terceira">Prof 4</option>
                </select>
            </div>
            <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                <button type="submit" class="btn btn-success">Adicionar</button>
            </div>
        </div>
        
    </form> 
</main>
@endsection