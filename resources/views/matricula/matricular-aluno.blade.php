@extends('layouts.main')

@section('title', 'Matricular Aluno')

@section('conteudo')
<main id="main" class="main" >
    <form method="POST" action="" id="regForm" class="formulario-layout">

        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
        
        <div class="row" >
            <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                <div style="  text-align: center;">
                    <h2>DADOS DO INSTITUTO</h2>
                </div>
            </div>
        </div>
    <form method="get" action="">
        <div class="row">
            <div class="col d-flex" style="margin-bottom: 15px;">
                <div class= "d-flex"style="width: 246px;margin-right: auto;margin-left: auto">
                    <input class=" form-control codinscricao" type="text" placeholder="Código de inscrição" required=""><button class="fas fa-search codinscricaobotao" id="pesquisa" type="submit" title="Procurar"></button>
                </div>
            </div>
        </div>

        <div class="tab">     
            
            <div class="form-group">
                <input type="text" placeholder="Nome Completo do Aluno" name="nome" oninput="this.className = ''">
            </div>

            <div class="row">
                
            <div class="col form-group gap-1 ">
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option disabled selected>Turno:</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            </div>

                <div class="col form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled selected>Turma:</option>
                        <option value="I10AM">I10AM</option>
                        <option value="I11AM">I11AM</option>
                        <option value="I12BT">I12BT</option>
                        <option value="I13BT">I13BT</option>
                    </select>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" name="n_aluno" placeholder="Nº do Aluno" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            <div class="row">
                @php
                /* Comentei esta input porque, o numero de processo só deve ser gerado após ele ser matriculado...
                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Número de processo" oninput="this.className = ''">
                    </div> 
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Ano lectivo" oninput="this.className = ''">
                    </div> 
                </div>
            </div>

            <div class="row">

                <div class="col form-group gap-1 ">
                    <select name="sala" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled selected>sala:</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                    </select>
                </div>

                <div class="col form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled selected>Classe:</option>
                        <option value="10">10ª</option>
                        <option value="11">11ª</option>
                        <option value="12">12ª</option>
                        <option value="13">13ª</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <input class="form-control" style="text-align: center;" value="2021-2022" type="text" placeholder="Ano Lectivo" name="" oninput="this.className = ''" disabled>
            </div>

        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style="  text-align: center;">
                        <h2>CONFIRME OS DADOS PESSOAIS</h2>
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

                <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>

                <div class="col-3">
                    <i id="clonebtn1"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
                </div>
            </div>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style=" text-align: center;">
                        <h2>CONFIRME OS DADOS DA ESCOLA DE PROVIDÊNCIA</h2>
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

                <div class="col-3 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai"selected>Pai</option>
                        <option value="mãe">Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div id="clone3"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>

                <div class="col-3">
                    <i id="clonebtn3"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
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

                <div id="clone" class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>

                <div class="col-3">
                    <i id="clonebtn" class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
                </div>
            </div>

        </div>

        <div style="text-align:center;margin-top:25px;">
            <div>
                <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
                <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
            </div>
        </div>
    </form>
</main>
 @endsection
