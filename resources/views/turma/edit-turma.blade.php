@extends('layouts.main')

@section('title', 'Editar Turma')

@section('conteudo')
<main id="main" class="main" >

<form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:10px;">
          <span class="step"></span>
        </div>
</form>

<div class="tab">     
    <div class="container-fluid">
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>ATUALIZAR DADOS DA TURMA</h2>
                    </div>

                </div>
            </div>
        <form id="regFormh" action="" class="formulario-layout">

            <div class="form-group">
                <input type="text" style=" text-align: center;" value=" I10AM" placeholder="Nome da turma" name="" oninput="this.className = ''">
            </div>

                <div class="row">
                    
                    <div class="col-4 form-group gap-1 ">
                            <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                                <option disabled>Classe:</option>
                                <option value="Décima">10ª</option>
                                <option value="Décima-primeira">11ª</option>
                                <option value="Décima-segunda" selected>12ª</option>
                                <option value="Décima-terceira">13ª</option>
                            </select>
                    </div>
                        
                    <div class="col-4 form-group gap-1 ">
                        <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                            <option  disabled>Turno:</option>
                            <option value="Manhã"selected>Manhã</option>
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
                            <option disabled>CURSO</option>
                                <option value ="I">Informática - I</option>
                                <option value="D.P">Desenhador projetista - D.P</option>
                                <option value="T.E.I.E" selected>Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                                <option value="T.I">Técnico de Informática - T.I</option>
                                <option value="E.T">Electronica e Telecomunicação - E.T</option>
                        
                        </select>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <input type="text" value=" 09" placeholder="Sala" oninput="this.className = ''">
                        </div> 
                    </div>
                </div>

            <div class="form-group">
                <input type="text"  style=" text-align: center;" value=" 2020/2028" placeholder="Ano Lectivo" name="" oninput="this.className = ''">
            </div>

            <div style="text-align:center;margin-top:10px;">
                      <div>
                        <button type="button" class="btn btn-success">Atualizar Turma</button>
                      </div>
            </div>
        </form>     
    </div>
</div>

</main>
@endsection