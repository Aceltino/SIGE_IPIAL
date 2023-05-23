@extends('layouts.main')

@section('title', 'Criar Turma')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:10px;">
        <span class="step"></span>
        </div>

        <div class="tab">     

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR TURMA</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" placeholder="Nome da turma" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                
                <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Classe:</option>
                        <option value="Décima">10ª</option>
                        <option value="Décima-primeira">11ª</option>
                        <option value="Décima-segunda">12ª</option>
                        <option value="Décima-terceira">13ª</option>
                    </select>
                </div>
                    
                <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Turno:</option>
                        <option value="Manhã">Manhã</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noite">Noite</option>
                    </select>
                </div>

                <div class="col">
                    <input type="text" readonly="true" value="VAGAS: 50" name="" desable="">
                </div>
            </div>

            <div class="row">

                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>CURSO</option>
                            <option value ="I">Informática - I</option>
                            <option value="D.P">Desenhador projetista - D.P</option>
                            <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                            <option value="T.I">Técnico de Informática - T.I</option>
                            <option value="E.T">Electronica e Telecomunicação - E.T</option>
                    </select>
                </div>

                <div class="col form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
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
            </div>

            <div class="form-group">
                <input type="text"  style=" text-align: center; "placeholder="Ano Lectivo" name="" oninput="this.className = ''">
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="button" class="btn btn-success">Criar Turma</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection