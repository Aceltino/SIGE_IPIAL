@extends('layouts.main')

@section('title', ' Editar Registro de Aluno')

@section('conteudo')
<main id="main" class="main" >
    <form id="regFormh" action="" class="formulario-layout">
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
                    <option disabled>CURSO</option>
                    <option value ="I" selected>Informática - I</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div>

            <div class="row">
                
                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Classe</option>
                        <option value="10" selected>10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                </div>

                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Turno</option>
                        <option value="Manhã">Manhã</option>
                        <option value="Tarde" selected>Tarde</option>
                        <option value="Noite">Noite</option>
                    </select>
                </div>

                <div class="col">
                    <input type="text" readonly="true" value="VAGAS: 500 " name="" desable="">
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
                <input type="text" value="Márcio Celestino" placeholder="Nome Completo do aluno" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" value="fulano fulano" placeholder="Nome Completo do pai" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" value="fulana fualana" placeholder="Nome Completo da mãe" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                <div class="col">
                    <p><input type="date"  value="2000-04-01" name="" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" readonly="true" value="23" name="" desable="">
                </div>

                <div class="col">
                    <input type="text" value="Rocha" placeholder="Naturalidade" name="" oninput="this.className = ''">
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
                        <input type="text" value="00393930LA32"  placeholder="Número do bilhete de identidade" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            
            <div class="row">

                <div class="col-lg-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name=""  value="939393939" placeholder="Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
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
                    <input type="text" value="Alda Lara" placeholder="Nome da escola de proveniência" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input type="text" value="Manhã" placeholder="Turno" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" value="55" placeholder="Nº do aluno" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" value="A"placeholder="Turma" oninput="this.className = ''">
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" value="9393939393" placeholder=" Número do aluno" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" value="2020/2023" placeholder=" Ano letivo" name="" oninput="this.className = ''">
                </div>
            </div>     
        </div>

        <div class="tab">     
            
            Faz a Tabela aqui nessa página eliseu
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
                <input type="email" value="email@gmail.com" placeholder="Digite o E-mail do Aluno" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" value="marciocelestino" placeholder="User name" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="password" value="12345" placeholder="Passoword" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                    
                <div class="col-3 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai"selected>Pai</option>
                        <option value="mãe">Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
            
                <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>

                <div class="col-3">
                    <i id="clonebtn1"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai">Pai</option>
                        <option value="mãe" selected>Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
            
                <div id="clone2"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>

                <div class="col-3">
                    <i id="clonebtn2"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
                </div>
            </div>
                
            <div class="row">

                <div class="col-3 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai">Pai</option>
                        <option value="mãe">Mãe</option>
                        <option  value="outro"selected>Outro</option>
                    </select>
                </div>
        
                <div id="clone"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>

                <div class="col-3">
                    <i id="clonebtn"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
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