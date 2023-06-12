@extends('layouts.main')

@section('title', 'Matricular Aluno')

@section('conteudo')
{{-- {{ dd($candidato) }} --}}
<main id="main" class="main" >

    <form method="POST" action="{{ route('matricula-store', ['candidato' => $candidato['Id_inscricao']]) }}" id="regForm" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
        @error('nome_completo')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_pai_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_mae_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('naturalidade_cand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_tel')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_bi')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_escola')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_aluno')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('turma_aluno')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_processo')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('ultimo_anoLectivo')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('telefone1')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('grau1')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_enc1')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('data_nascimento_enc1')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_bi_enc1')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('telefone2')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('grau2')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_enc2')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('data_nascimento_enc2')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_bi_enc2')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('telefone3')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('grau3')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('nome_enc3')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('data_nascimento_enc3')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('num_bi_enc3')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

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
            {{-- Dados do primero encarregado --}}
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
                    <input type="text" name="telefone1" value="{{ old('telefone1') }}" placeholder="Telefone" oninput="this.className = ''">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <input type="text" placeholder="Nome do Primeiro encarregado" value ="{{ $candidato['Pai'] }}" name="nome_enc1" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><input type="date" value="{{ old('data_nascimento_enc1') }}" name="data_nascimento_enc1" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" class="form-control" readonly="true" value="00" disabled>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-group">
                      <input type="radio" id="masculino" name="genero1" value="Masculino" checked><label for="masculino"> Masculino</label>
                      <input type="radio" id="feminino" name="genero1" value="Femenino"><label for="feminino"> Feminino</label>
                    </div>
                  </div>

                <div class="col-8">
                    <div class="form-group">
                        <input type="text" placeholder="Número do bilhete de identidade"  name="num_bi_enc1" value="{{ old('data_nascimento_enc1') }}" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            {{-- Dados do primero encarregado  FIM--}}


            {{-- Dados do Segundo encarregado --}}
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
                <div class="col">
                    <div class="form-group">
                    <input type="text" placeholder="Nome do Segundo encarregado" value ="{{ $candidato['Mae'] }}" name="nome_enc2" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p><input type="date" value="" name="data_nascimento_enc2" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" class="form-control" readonly="true" value="00" disabled>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-group">
                      <input type="radio" id="masculino" name="genero2" value="Masculino" checked><label for="masculino"> Masculino</label>
                      <input type="radio" id="feminino" name="genero2" value="Femenino"><label for="feminino"> Feminino</label>
                    </div>
                  </div>

                <div class="col-8">
                    <div class="form-group">
                        <input type="text" placeholder="Número do bilhete de identidade"  name="num_bi_enc2" value="" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            {{-- Dados do Segundo encarregado FIM --}}

            {{-- Dados do Terceiro encarregado --}}
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
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <input type="text" placeholder="Nome do Terceiro encarregado" value="" name="nome_enc3" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p><input type="date" value="" name="data_nascimento_enc3" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" class="form-control" readonly="true" value="00" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <input type="radio" id="masculino" name="genero3" value="Masculino" checked><label for="masculino"> Masculino</label>
                      <input type="radio" id="feminino" name="genero3" value="Femenino"><label for="feminino"> Feminino</label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" placeholder="Número do bilhete de identidade"  name="num_bi_enc3" value="" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            {{-- Dados do Terceiro encarregado FIM --}}
            <div class="row">
                <div class=" col form-group">
                    <input type="email" placeholder="Digite o E-mail do Aluno" name="email"  value="" oninput="this.className = ''">
                </div>
                <div class="col form-group">
                    <input type="hidden" name="id" value ="{{ $candidato['Id_inscricao'] }}"> {{-- Input para recuperar o id --}}
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:25px;">
            <div>
                <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
                <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
            </div>
        </div>
    </form>
</main>
 @endsection
