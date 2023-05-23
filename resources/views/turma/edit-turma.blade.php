@extends('layouts.main')

@section('title', 'Editar Turma')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Dados Da Turma</h1>      
        </div>
        
    </div>

    <form class="form-inativo">
        <div class="dados-pessoais">        
            <div class="area-input form-group">
                <label>Nome Da Turma: </label><input type="text" name="" value="Técnico de Informática">
            </div>

            <div class="row">
                
                <div class="col form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option  disabled>Classe:</option>
                        <option value="Décima">10ª</option>
                        <option value="Décima-primeira">11ª</option>
                        <option value="Décima-segunda" selected>12ª</option>
                        <option value="Décima-terceira">13ª</option>
                    </select>
                </div>
                    
                <div class="col form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Turno:</option>
                        <option value="Manhã">Manhã</option>
                        <option value="Tarde" selected>Tarde</option>
                        <option value="Noite">Noite</option>
                    </select>
                </div>

                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option  disabled>CURSO</option>
                            <option value ="I" selected>Informática - I</option>
                            <option value="D.P">Desenhador projetista - D.P</option>
                            <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                            <option value="T.I">Técnico de Informática - T.I</option>
                            <option value="E.T">Electronica e Telecomunicação - E.T</option>
                    </select>
                </div>


            </div>
            <div class="container">
                <div class="row">

                    <div class=" col area-input form-group " >
                        <label for=""> Sala:</label><input type="text" name="" value="09" >
                    </div>
                    <div class=" col area-input form-group " style="margin-left: 10px;" >
                        <label for=""> Ano Lectivo:</label><input type="text" name="" value="2020-2021" >
                    </div>
                    <div class=" col area-input form-group " style="margin-left: 10px;" >
                        <label for=""> Vagas:</label><input type="text" name="" value="50" disabled>
                    </div>
                </div>
            </div>

                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="#" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;">Atualizar</button>
                    </div>
                </div>
        </div>
        
    </form> 
</main>
@endsection