@extends('layouts.main')

@section('title', 'Registrar Aluno')

@section('conteudo')
<main id="main" class="main" >

    <form method="POST" action="" id="regForm" action="" class="formulario-layout">

        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

        <div class="tab">     

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>VERIFIQUE SE HÁ VAGAS SEGUNDO A SUA PREFERÊNCIA</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option selected disabled>CURSO</option>
                    <option value ="I">Informática - I</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div>

            <div class="row">
                
                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                            <option  selected disabled>Classe</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                    </select>
                </div>

                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                            <option selected disabled>Turno</option>
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>
                    </select>
                </div>

                <div class="col">
                    <input type="text" readonly="true" value="VAGAS: 00 " name="" desable="">
                </div>
            </div>
        </div>
        
        <div class="tab"> 
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style="  text-align: center;">
                        <h2>INTRODUZA OS DADOS PESSOAIS</h2>
                    </div>
                </div>
            </div>
                
            <div class="form-group">
                <input type="text" placeholder="Nome Completo do aluno" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nome Completo do pai" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nome Completo da mãe" name="" oninput="this.className = ''">
            </div>

            <div class="row">

                <div class="col">
                    <p><input type="date" name="" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" class="form-control" readonly="true" value="00" name="" disabled>
                </div>

                <div class="col">
                    <input type="text" placeholder="Naturalidade" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <LAbel > Sexo: </LAbel><input  style=" margin-left: 8px;"type="radio" id="masculino" name="genero" checked><label for="masculino"> Masculino</label>
                        <input type="radio" id="feminino" name="genero"><label for="feminino"> Feminino</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            
            <div class="row">

                <div class="col-lg-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div>
            </div>
        </div> 

        <div class="tab">     
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style=" text-align: center;">
                        <h2>INTRODUZA OS DADOS DA ESCOLA DE PROVIDÊNCIA</h2>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="form-group">
                    <input type="text" placeholder="Nome da escola de proveniência" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Turno" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Nº do aluno" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Turma" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" placeholder=" Número do aluno" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" placeholder=" Ano letivo" name="" oninput="this.className = ''">
                </div>
            </div>      
        </div>

        <div class="tab">     
            <!--  //  //  Inicio do formulario da ficha biografica  //  //--> 
            <div class="volta-tabela" id="assiduidades">

                <div class="form-ficha">
                <!--1a Disiciplina-->
                <div class="assidd-diciplina" style="padding-top: 10px;">     

                    <div class="container">
                        <div class="row">
                        <div class="col-lg-3">
                            <div class="area-input-fb form-group">
                            <label>Classe: </label><input type="text" readonly="true" disabled name="" value="10ª Classe">
                            </div>
                            
                        </div>

                        <div class="col-lg-2">
                            <div class="area-input-fb form-group">
                            <label>Turma: </label><input type="text" name="">
                            </div>
                            
                        </div>

                        <div class="col">
                            <div class="area-input-fb form-group">
                            <label>Numero: </label><input type="text" placeholder="Numero do aluno" name="">
                            </div>
                            
                        </div>

                        <div class="col">
                            <div class="area-input-fb form-group">
                            <label>Anolec: </label><input type="text" placeholder="Ano lectivo" name="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                            <div class="area-input-fb form-group">
                                <label>Escola: </label><input type="text" placeholder="Nome da escola de proveniência" name="">
                            </div>
                            
                            </div>

                            <div class="col-lg-1">
                            <div class="accordion">
                            <a href="#" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUm" aria-expanded="true" aria-controls="collapseUm" style="padding: 0;background-color: transparent; color: #fff;"></a>
                                
                            </div>
                            
                            </div>
                        </div>
                        </div>
                    </div>

                    <div id="collapseUm" class="accordion-collapse collapse show" aria-labelledby="headingUm" data-bs-parent="#assiduidades">
                        <!-- /  Inicio da tabela de ficha biografica -->
                        <table class="tabelassd">
                        <thead>
                            <tr style="background-color: var(--bs-cor-principal); color: #fff;">
                            <th scope="col" style="text-align: left;">Disciplina</th>
                            <th scope="col">1ºT</th>
                            <th scope="col">2ºT</th>                  
                            <th scope="col">3ºT</th>                  
                            <th scope="col">CF</th>
                            <th scope="col">CF</th>                  
                            <th scope="col">PG</th>
                            <th scope="col">PG</th>                                   
                            <th scope="col">CA</th>                  
                            <th scope="col">F-1ºT</th>
                            <th scope="col">F-2ºT</th>
                            <th scope="col">F-3ºT</th>
                            <th scope="col">1ºE</th>                  
                            <th scope="col">2ºE</th>                  
                            <th scope="col">3ºE</th>                  
                            <th scope="col">CDF</th>      
                            </tr>
                        </thead>
                        <tbody>
            
                            <tr>
                            <td style="text-align: left;">Lingua Portuguesa</td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>
                            
                            </tr>

                            <tr>
                            <td style="text-align: left;">Matematica</td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>
                            
                            </tr>

                            <tr>
                            <td style="text-align: left;">Projecto Tecnologico</td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>
                            
                            </tr>

                        

                            <tr>
                            <td colspan="15" style="text-align: left; background-color: #96abce;">
                                
                                <span class="tb-negrito">Situação Final do Aluno: </span><span class="tb-azul">Transferido</span>
                            </td>
                            </tr>
                            

                        </tbody>
                        </table>
                        <!-- Termina a tabela de ficha biogrfica -->
                        
                    </div>
                    
                    
                </div>
        
                <!--Selecacao das classes-->
                <div class="assidd-diciplina">
                    <div class="container">
                        <div class="row" style="padding-top: 10px;">
                        <div class="col-lg-3">
                            <div class="area-input-fb form-group">
                            <label>Classe: </label><input type="text" readonly="true" disabled name="" value="11ª Classe">
                            </div>
                            
                        </div>

                        <div class="col">
                            <div class="accordion">
                            <a href="#" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDois" aria-expanded="false" aria-controls="collapseDois" style="background-color: transparent;"></a>
                                
                            </div>
                            
                        </div>


                        </div>
                        
                    </div> 

                    <div id="collapseDois" class="accordion-collapse collapse" aria-labelledby="headingDois" data-bs-parent="#assiduidades">
                    <div class="row" style="padding-top: 10px;">
                        
                        <div class="col-lg-2">
                            <div class="area-input-fb form-group">
                            <label>Turma: </label><input type="text" name="">
                            </div>
                            
                        </div>

                        <div class="col">
                            <div class="area-input-fb form-group">
                            <label>Numero: </label><input type="text" placeholder="Numero do aluno" name="">
                            </div>
                            
                        </div>

                        <div class="col">
                            <div class="area-input-fb form-group">
                            <label>Anolec: </label><input type="text" placeholder="Ano lectivo" name="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                            <div class="area-input-fb form-group">
                                <label>Escola: </label><input type="text" placeholder="Nome da escola de proveniência" name="">
                            </div>
                            
                            </div>

                        </div>
                    </div>

                    <!-- /  Inicio da tabela de ficha biografica -->
                    <table class="tabelassd">
                        <thead>
                        <tr style="background-color: var(--bs-cor-principal); color: #fff;">
                            <th scope="col" style="text-align: left;">Disciplina</th>
                            <th scope="col">1ºT</th>
                            <th scope="col">2ºT</th>                  
                            <th scope="col">3ºT</th>                  
                            <th scope="col">CF</th>
                            <th scope="col">CF</th>                  
                            <th scope="col">PG</th>
                            <th scope="col">PG</th>                                   
                            <th scope="col">CA</th>                  
                            <th scope="col">F-1ºT</th>
                            <th scope="col">F-2ºT</th>
                            <th scope="col">F-3ºT</th>
                            <th scope="col">1ºE</th>                  
                            <th scope="col">2ºE</th>                  
                            <th scope="col">3ºE</th>                  
                            <th scope="col">CDF</th>      
                        </tr>
                        </thead>
                        <tbody>
            
                        <tr>
                            <td style="text-align: left;">Lingua Portuguesa</td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>
                        
                        </tr>

                        <tr>
                            <td style="text-align: left;">Matematica</td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>
                        
                        </tr>

                        <tr>
                            <td style="text-align: left;">Projecto Tecnologico</td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>                  
                            <td><input type="text" name="" maxlength="2"></td>
                        
                        </tr>

                    

                        <tr>
                            <td colspan="15" style="text-align: left; background-color: #96abce;">
                            
                            <span class="tb-negrito">Situação Final do Aluno: </span><span class="tb-azul">Transferido</span>
                            </td>
                        </tr>
                        

                        </tbody>
                    </table>
                    <!-- Termina a tabela de ficha biogrfica -->              
                    
                    </div>
                </div>

                </div>
            </div> 
            <!-- /// Fim do formulario da ficha biografica-->
        </div>

        <div class="tab"> 

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style="  text-align: center;">
                        <h2>INFORMAÇÕES IMPORTANTES PARA O INSTITUTO</h2>
                    </div>
                </div>
            </div>
       
            <div class="form-group">
                <input type="email" placeholder="Digite o E-mail do Aluno" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" placeholder="User name" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="password" placeholder="Passoword" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                
                <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares</option>
                        <option  value="Pai"selected>Pai</option>
                        <option value="mãe">Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div class="col-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name=""  placeholder=" Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div> 
            </div>

            <div class="row">

                <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares</option>
                        <option value="Pai">Pai</option>
                        <option value="mãe" selected>Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
        

                <div class="col-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder=" Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div>
            </div>
            
            <div class="row">

                <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares</option>
                        <option value="Pai">Pai</option>
                        <option value="mãe">Mãe</option>
                        <option value="outro"selected>Outro</option>
                    </select>
                </div>

                <div class="col-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder=" Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div>
            </div>
        </div>  
        <div style="text-align:center;margin-top:10px;">
            <div>
                <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
                <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
            </div>
        </div>
    </form>
</main>
@endsection