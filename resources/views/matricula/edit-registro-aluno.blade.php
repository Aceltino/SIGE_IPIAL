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
                <label>Nome Completo: </label><input type="text" name="" value="Bruno dos Santos Manuel">
            </div>
            <div class="area-input form-group">
                <label>Nome do Pai: </label><input type="text" name="" value="Bruno dos Santos Manuel">
            </div>
            <div class="area-input form-group">
                <label>Nome da Mãe: </label><input type="text" name="" value="Fernanda MIiles Manuel">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Data de nascimento: </label><input type="text" name="" value="05/04/2023">
                
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled name="" value="16">
                
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Gênero: </label><input type="text" name="" value="Masculino">
                
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col area-input form-group" >
                        <label>Número do BI: </label><input type="text" class="form-control" readonly="true" disabled name="" value="0002505QL014">
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Naturalidade: </label><input type="text" name="" value="Masculino">
                    
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Tel-1: </label><input type="text" name="" value="998 766 656">
                
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Tel-2: </label><input type="text" name="" value="998 766 656">
                
                    </div>
                </div>              
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Tel-3: </label><input type="text" name="" value="998 766 656">
                    </div>

                    <div class="col form-group" style="margin-left: 10px;">
                        <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
                        Informações do Instituto: <i class="bi bi-row"></i>
                        </button>
                    </div>
                </div>
            </div>
                
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="dados-academicos">
                    <div class="row">
                        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                            <h1>Dados Da Escola De Proveniência</h1>      
                        </div>

                    </div>

                    <br>

                    <div class="area-input form-group">
                        <label>Escola de proveniência: </label><input type="text" name="" value="Escola Pública">
                    </div>

                    <div class="container">
                        <div class="row">
                        <div class="col area-input form-group">
                    <label>Turno: </label><input type="text" name="" value="Manhã">
                    
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Turma: </label><input type="text" name="" value="IJ12">
                    
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Nº aluno: </label>
                    <input type="text" name="" value="21">
                </div>
                </div>              
                </div>

                <div class="container">
            <div class="row">
                    <div class="col area-input form-group" >
                    <label>Ano lectivo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="2022-2023">
                    </div>
                </div>
            </div>

            <div class="col area-input form-group">
                    <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="76656">
                    
                    </div>

            <div class="row">
                <div class="col" style="display: flex; justify-content: flex-start; align-items: center; margin-bottom: 15px;">
                    <h1>Dados académicos</h1>      
                </div>
                
            </div>
            
                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Código de Inscrição: </label><input type="text" class="form-control" readonly="true" disabled name="" value="49656">
                            
                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="56656">
                        
                        </div>

                            <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Ano Lectivo: </label><input type="text" name="" value="2020-2021">
                            
                            </div>
                    </div>
                </div>

                <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                    <label>Turno: </label><input type="text" name="" value="Manhã">
                    
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Turma: </label><input type="text" name="" value="I12BT">
                    
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Classe: </label><input type="text" name="" value="12ª">
                    
                    </div>
                </div>
            </div>

                <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Nº do Aluno: </label><input type="text" name="" value="14">
                    
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                         <label>Sala: </label><input type="text" name="" value="09">
                    
                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Pai Tel-1: </label><input type="text" name="" value="920303030">
                        
                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Pai Tel-2: </label><input type="text" name="" value="920303030">
                        
                        </div>

                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Pai Tel-3: </label><input type="text" name="" value="920303030">
                        
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Mãe Tel-1: </label><input type="text" name="" value="16">
                        
                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Mãe Tel-2: </label><input type="text" name="" value="920303030">
                        
                        </div>

                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Mãe Tel-3: </label><input type="text" name="" value="920303030">
                        
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Outro Tel-1: </label><input type="text" name="" value="920303030">
                        
                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Outro Tel-2: </label><input type="text" name="" value="920303030">
                        
                        </div>

                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Outro Tel-3: </label><input type="text" name="" value="920303030">
                        
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Curso: </label><input type="text" name="" value="Técnico de Informática">
                        
                        </div>
                    </div>
                </div>

                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="/matriculas" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;">Atualizar</button>
                    </div>
                </div>
        
    </form> 
</main>
@endsection