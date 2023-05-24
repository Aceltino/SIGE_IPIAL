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


                <div class=" col form-group " >
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
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


            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class=" col area-input form-group "  >
                        <label for=""> Ano Lectivo:</label><input type="text" name="" value="2020-2021" >
                    </div>
                    <div class=" col area-input form-group " style="margin-left: 10px;" >
                        <label for=""> Vagas:</label><input type="text" name="" value="50" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option  disabled>CURSO</option>
                        <option value ="Informática" selected>Informática</option>
                        <option value="Desenhador projetista">Desenhador projetista</option>
                        <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas</option>
                        <option value="contrução civil">contrução civil</option>
                        <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
                    </select>
                </div>
            </div>

                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="/turmas" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;">Atualizar</button>
                    </div>
                </div>
        </div>
        
    </form> 
</main>
@endsection