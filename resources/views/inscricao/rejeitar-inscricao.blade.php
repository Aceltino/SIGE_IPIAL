@extends('layouts.main')

@section('title', 'Rejeitar inscrição')

@section('conteudo')
<main id="main" class="main">
    <form>
        <i class="voltar bi bi-arrow-left-circle-fill"></i>
        <div class="row decidir-insc">
            <div class="col-lg-6">
                <div class="area-info-insc info-rej-insc">
                    <ul>
                        <li><span class="titulo">Nome completo: </span><span class="conteudo">Danilo Lopes</span></li>
                        <li><span class="titulo">Nome do Pai: </span><span class="conteudo">Mauro Fernandes</span></li>
                        <li><span class="titulo">Nome da Mãe: </span><span class="conteudo">Mili Fernandes</span></li>
                        <li><span class="titulo">Nº do Bilhete: </span><span class="conteudo">0000000000KJ000</span></li>
                        <li><span class="titulo">Sexo: </span><span class="conteudo">Masculino</span></li>
                        <li><span class="titulo">Naturalidade: </span><span class="conteudo">Angolana</span></li>
                        <li><span class="titulo">Morada: </span><span class="conteudo">Luanda, Luanda</span></li>
                    </ul>
                
                    <hr>

                    <ul>
                        <li>
                            <span class="titulo">Escola: </span><span class="conteudo">Escola Petrolifera de Luanda</span>
                        </li>
                        <li><span class="titulo">Turno: </span><span class="conteudo">Manhã</span></li>
                        <li><span class="titulo">Turma: </span><span class="conteudo">AM</span></li>
                        <li><span class="titulo">Número: </span><span class="conteudo">16</span></li>
                        <li><span class="titulo">Número de processo: </span><span class="conteudo">2312</span></li>
                        <li><span class="titulo">Ano Lectivo: </span><span class="conteudo">2020 - 2021</span></li>
                        <li>
                            <div class="row">
                                <div class="col-lg-6">
                                    <span class="titulo">Língua Portuguesa: </span><span class="conteudo">17</span>
                                </div>  
                                
                                <div class="col-lg-6" style="display: flex; justify-content: flex-end; align-items: center;">
                                    <span class="titulo">Matemática: </span><span class="conteudo">18</span>
                                </div>  
                            </div>
                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-6">
                                    <span class="titulo">Química: </span><span class="conteudo">13</span>
                                </div>

                                <div class="col-lg-6" style="display: flex; justify-content: flex-end; align-items: center;">
                                    <span class="titulo">Física: </span><span class="conteudo">16</span>
                                </div>  
                            </div>
                        </li>   
                    </ul>

                </div>    
            </div>
    
            <div class="col-lg-6">
                <div class="info-rej-insc">
                <ul>
                    <li><span class="titulo"><input type="checkbox" class="form-check-input" name="1" value="true" id="1"> Blilhete caducado </span></li> 
                    <li><span class="titulo"><input type="checkbox" class="form-check-input" name="2" value="true" id="2"> Divergência entre as notas inseridas e as notas do certificado </span></li>
                    <li><span class="titulo"><input type="checkbox" class="form-check-input" name="3" value="true" id="3"> Divergência entre a data de nascimento inserida e a data no bilhete de identidade </span></li>
                    <li><span class="titulo"><input type="checkbox" class="form-check-input" name="4" value="true" id="4"> Comprovativo de rupe não válido compareça no Instituto </span></li>
                </ul>

                </div>
                <div class="row" style="margin-top: 25px;">
                <div class="col-lg-6">
                    <button class="btn" style="background-color: #070b17; color: #fff;">Cancelar rejeição</button>
                </div>
                <div class="col-lg-6" style="display: flex; justify-content: flex-end; align-items: center;">
                    <button class="btn btn-danger">Confirmar rejeição</button>                
                </div>
                </div>
            </div> 
        </div>
    </form>

</main>