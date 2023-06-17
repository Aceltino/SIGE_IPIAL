@extends('layouts.main')

@section('title', 'Editar Registros')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Dados pessoais</h1>      
        </div>
        
    </div>

    <form class="form-inativo">
        <div class="dados-pessoais">        
            <div class="area-input form-group">
                <label>Nome Completo: </label><input type="text" name="" value="Mauro António">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Data de nascimento: </label><input type="text" name="" value="05/10/2020">
                
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled name="" value="16">
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Genero: </label><input type="text" class="form-control" readonly="true"  name="" value="Masculino">
                    </div>
                    
                   
                
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col area-input form-group" >
                        <label>Número do BI: </label><input type="text" class="form-control" readonly="true" disabled name="" value="0002505QL014">
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Tel: </label><input type="text" name="" value="924323657">
                    
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Município: </label><input type="text" name="" value="Maianga">
                
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Bairro: </label><input type="text" name="" value="Samba">
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Zona: </label><input type="text" name="" value="zamba2">
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>N° Casa: </label><input type="text" name="" value="99">
                    </div>
                </div>              
            </div>

  

                    <div class="col form-group" style="margin-left: 10px; justify-items: center">
                        <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
                        Informações do Instituto: <i class="bi bi-row"></i>
                        </button>
                    </div>
                </div>
            </div>
                
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="dados-academicos">
                    <div class="row">
                     

                    <br>

                    <div class="area-input form-group">
                        <label>Email: </label><input type="text" name="" value="mauroantonio@gmail.com">
                    </div>

                    <div class="container">
                        <div class="row">
                        <div class="col area-input form-group">
                    <label>password: </label><input type="password" name="" value="">
                    
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Nova password: </label><input type="password" name="" value="">
                    
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Confirme: </label>
                    <input type="password" name="" value="">
                </div>
                </div>              
                </div>

                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="use_editar" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;">Atualizar</button>
                    </div>
                </div>
        
    </form> 
</main>
@endsection