@extends('layouts.main')

@section('title', 'Matricular Aluno')

@section('conteudo')
{{-- {{ dd($candidato) }} --}}
<main id="main" class="main" >

        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    <form method="POST" action="{{ route('matricula-store', ['candidato' => $candidato['Id_inscricao']]) }}" id="regForm" class="formulario-layout">
        @csrf
        @method('PUT')
        <div class="tab">
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style="  text-align: center;">
                        <h2>DADOS DO INSTITUTO</h2>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col d-flex" style="margin-bottom: 15px;">
                        <div class= "d-flex"style="width: 246px;margin-right: auto; margin-left: auto;">
                            <input class=" form-control codinscricao" style="text-align: center" type="text" name="" value="{{$candidato['Id_inscricao']}}" required="" disabled readonly><button class="fas fa-search codinscricaobotao" id="pesquisa" type="submit" title="Procurar"></button>
                        </div>
                    </div>
                </div>

            <div class="form-group">
                <input class="form-control" style="text-align: center;" type="text" name="nome_completo" value="{{$candidato['Nome']}}" oninput="this.className = ''" disabled readonly>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input class="form-control" style="text-align: center;" type="text" name="curso_escolhido" value="{{$candidato['Curso']}}"  oninput="this.className = ''"  readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col form-group">
                    <input class="form-control" style="text-align: center;" type="text" name="ultimo_anoLectivo" value="{{$candidato['Ultimo_AnoLectivo']}}"  oninput="this.className = ''" disabled readonly>
                </div>
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
                <input type="text" name="nome_completo" value="{{$candidato['Nome']}}" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" name="nome_pai_cand" value ="{{ $candidato['Pai'] }}" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" name="nome_mae_cand" value ="{{ $candidato['Mae'] }}" oninput="this.className = ''">
            </div>

            <div class="row">
                <div class="col">
                    <p><input type="date" name="data_nascimento" value ="{{ $candidato['Data_Nascimento'] }}" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" class="form-control" readonly="true" value ="{{ $candidato['Idade'] }}" disabled>
                </div>

                <div class="col">
                    <input type="text" name="naturalidade_cand" value ="{{ $candidato['Naturalidade'] }}" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <LAbel > Sexo: </LAbel><input  style=" margin-left: 8px;"type="radio" id="masculino" checked><label for="{{ $candidato['Genero'] }}"> Masculino</label>
                        <input type="radio" id="feminino" name="genero"><label for="feminino"> Feminino</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" name="num_bi" value ="{{ $candidato['NumeroBI'] }}" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            <div class="row">

                <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="num_tel" value ="{{ $candidato['Telefone'] }}" oninput="this.className = ''">
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
                    <input type="text" name="nome_escola" value ="{{ $candidato['Escola'] }}" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input type="text" name="turno" value ="{{ $candidato['Turno'] }}" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" value ="{{ $candidato['Numero_Aluno'] }}" name="num_aluno" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" name="turma_aluno" value ="{{ $candidato['Turma'] }}" oninput="this.className = ''">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class=" form-group">
                    <input type="text" name="num_processo" value ="{{ $candidato['Numero_Processo'] }}" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" name="ultimo_anoLectivo" value ="{{ $candidato['Ultimo_AnoLectivo'] }}" oninput="this.className = ''">
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

            <div class=" col form-group">
                <input type="email" placeholder="E-mail" name="email" oninput="this.className = ''">
            </div>

            <div class="row">

                <div class="col-3 form-group gap-1 ">
                    <select name="grau1" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Pai"selected>Pai</option>
                        <option value="Mãe">Mãe</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>

                <div id="clone3"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="telefone1" placeholder="Telefone" oninput="this.className = ''">
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3 form-group gap-1 ">
                    <select name="grau2" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Pai">Pai</option>
                        <option value="Mãe" selected>Mãe</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>

                <div id="clone2"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="telefone2" placeholder="Telefone" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">

                <div class="col-3 form-group gap-1 ">
                    <select name="grau3" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Pai">Pai</option>
                        <option value="Mãe">Mãe</option>
                        <option value="Outro"selected>Outro</option>
                    </select>
                </div>

                <div id="clone" class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="telefone3" placeholder="Telefone" oninput="this.className = ''">
                     <input type="hidden" name="id" value ="{{  $candidato['Id_inscricao'] }}"> {{-- Input para recuperar o id --}}
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
