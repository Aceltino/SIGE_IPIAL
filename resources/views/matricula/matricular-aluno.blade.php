@extends('layouts.main')

@section('title', 'Matricular Aluno')

@section('conteudo')

<main id="main" class="main" >

    <form method="POST" action="{{ route('matricula-store', ['candidato' => $candidato['Id_inscricao']]) }}" id="regForm" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

        <div class="tab">

        @if(session()->has('ErroEncarregado'))
        <div class="alert alert-danger">
          {{session('ErroEncarregado')}}
        </div>
      @endif
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
                        <input class="form-control codinscricao" style="text-align: center" type="text" value="{{$candidato['Id_inscricao']}}"  required="" disabled readonly>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input class="form-control" style="text-align: center;" type="text" value="{{$candidato['Nome']}}" value="{{old('nome_completo')}}" oninput="this.className = ''" disabled readonly>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input class="form-control" style="text-align: center;" type="text" name="curso_escolhido" value="{{$candidato['Curso']}}"  oninput="this.className = ''" readonly>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col form-group">
                    <input class="form-control" style="text-align: center;" type="text" value="{{$candidato['Ultimo_AnoLectivo']}}"  oninput="this.className = ''" disabled readonly>
                    @error('ultimo_anoLectivo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
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

                <input type="text" name="nome_completo" value="{{$candidato['Nome']}}" value="{{old('nome_completo')}}" oninput="this.className = ''">
                @error('nome_completo')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" name="nome_pai_cand" value ="{{ $candidato['Pai'] }}" value="{{old('nome_pai_cand')}}" oninput="this.className = ''">
                @error('nome_pai_cand')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" name="nome_mae_cand" value ="{{ $candidato['Mae'] }}" value="{{old('nome_mae_cand')}}" oninput="this.className = ''">
                @error('nome_mae_cand')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

            </div>

            <div class="row">
                <div class="col">
                    <p><input class="form-control" type="date" value ="{{ $candidato['Data_Nascimento'] }}" readonly disabled oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" class="form-control" readonly="true"  value ="{{ $candidato['Idade'] }}" disabled>
                </div>

                <div class="col">

                    <input type="text" name="naturalidade_cand" value ="{{ $candidato['Naturalidade'] }}" value="{{old('naturalidade_cand')}}" oninput="this.className = ''">
                    @error('naturalidade_cand')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                    <input type="radio" id="masculino" name="genero" value="Masculino" checked><label for="masculino"> Masculino</label>
                    <input type="radio" id="feminino" name="genero" value="Femenino"><label for="feminino"> Feminino</label>
                    </div>
                  </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" id="bi_input" name="num_bi" value ="{{ $candidato['NumeroBI'] }}" value="{{old('num_bi')}}" oninput="this.className = ''" maxlength="14">
                        <div id="mensagem1" style="color: red;"></div>
                        @error('num_bi')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">

                <div id="clone1"class="col-lg-3 justify-content-center align-items-center">
                    <div>
                        <span style="color: #777;">Telefone (+244):</span>
                    </div>
                    <div class=" col aa" style="display: flex; flex-direction: column;">
                        <input type="text" name="num_tel" id="telefoneinput" value ="{{ $candidato['Telefone'] }}" value="{{old('num_tel')}}"  oninput="this.className = ''">
                        <div class="mensagem-erro" style="width: 100%;"></div>
                        @error('num_tel')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
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

                    <input type="text" placeholder="Nome da Escola" name="nome_escola" value ="{{ $candidato['Escola'] }}" value ="{{old('nome_escola')}}" oninput="this.className = ''">
                    @error('nome_escola')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Turno" name="turno" value ="{{ $candidato['Turno'] }}" value="{{old('turno')}}" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">

                        <input type="text" placeholder="Número do aluno" id="numeroinput" name="num_aluno" value ="{{ $candidato['Numero_Aluno'] }}" value="{{old('num_aluno')}}"  oninput="this.className = ''">
                        @error('num_aluno')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>

                <div class="col">
                    <div class="form-group">

                        <input type="text" placeholder="Turma" name="turma_aluno" value ="{{ $candidato['Turma'] }}" value="{{old('turma_aluno')}}" oninput="this.className = ''">
                        @error('turma_aluno')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>
            </div>


            <div class="row">
                <div class=" form-group">

                    <input type="text" placeholder="Número de Processo" id="numeroinput1" name="num_processo" value ="{{ $candidato['Numero_Processo'] }}" value="{{old('num_processo')}}" oninput="this.className = ''">
                    @error('num_processo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" placeholder="Ultimo Ano Letivo" name="ultimo_anoLectivo" value ="{{ $candidato['Ultimo_AnoLectivo'] }}" value="{{old('ultimo_anoLectivo')}}" oninput="this.className = ''">
                </div>
                @error('ultimo_anoLectivo1')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
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
            <div class="row" style="display: flex; flex-direction: row;">

                <div class="col-3 form-group gap-1 ">
                    <select name="grau1" value="{{old('grau1')}}" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Pai"selected>Pai</option>
                    </select>
                    @error('grau1')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div id="clone3"class="col-lg-3 justify-content-center align-items-center">
                    
                    <div class=" col aa" style="display: flex; flex-direction: column;">
                        <input type="text" id="telefoneinput2" name="telefone1" value="{{ old('telefone1') }}" placeholder="Telefone" oninput="this.className = ''">
                        <div class="mensagem-erro" style="color: red;"></div>
                        @error('telefone1')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">

                        <input type="text" placeholder="Nome do Primeiro encarregado" name="nome_enc1"  value="{{ old('nome_enc1') }}" value ="{{ $candidato['Pai'] }}"   oninput="this.className = ''">
                        @error('nome_enc1')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <span>Data de Nascimento</span>
                    <input type="date" id="datainput2" name="data_nascimento_enc1" value="{{ old('data_nascimento_enc1') }}"  oninput="this.className = ''">
                    @error('data_nascimento_enc1')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col">
                    <span>Idade</span>
                    <input type="text" id="idadeinput2" class="form-control" readonly="true" style="text-align: center" value="IDADE" disabled>
                    <div id="mensagem08" style="color: red;"></div>
                </div>
            </div>
            <div class="row" >

                <div class="col">
                    <div class="form-group">
                    <input type="radio" id="masculino" name="genero1" value="Masculino" checked><label for="masculino"> Masculino</label>
                    <input type="radio" id="feminino" name="genero1" value="Femenino"><label for="feminino"> Feminino</label>
                    </div>
                  </div>

                <div class="col-8">
                    <div class="form-group">
                        <input type="text" id="bi_input1" placeholder="Número do bilhete de identidade"  name="num_bi_enc1" value="{{ old('num_bi_enc1') }}" oninput="this.className = ''" maxlength="14">
                        <div id="mensagem2" style="color: red;"></div>
                        @error('num_bi_enc1')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Dados do primero encarregado  FIM--}}


            {{-- Dados do Segundo encarregado --}}
            <div class="row" style="display: flex; flex-direction: row;">
                <div class="col-lg-3 form-group gap-1 ">
                    <select name="grau2" value="{{old('grau2')}}" id="opcoes"  oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Mãe" selected>Mãe</option>
                    </select>
                    @error('grau2')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div id="clone2"class="col-lg-3 justify-content-center align-items-center">

                    <div class=" col aa" style="display: flex; flex-direction: column;">

                        <input type="text" id="telefoneinput3" name="telefone2" value="{{old('telefone2')}}" placeholder="Telefone" oninput="this.className = ''">
                        <div class="mensagem-erro" style="color: red;"></div>
                        @error('telefone2')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">

                        <input type="text" placeholder="Nome do Segundo encarregado" name="nome_enc2" value ="{{ $candidato['Mae'] }}"  value="{{ old('nome_enc2') }}"  oninput="this.className = ''">
                        @error('nome_enc2')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col">
                    <span>Data de Nascimento</span>
                    <p><input type="date" id="datainput10" name="data_nascimento_enc2" value="{{old('data_nascimento_enc2')}}"  oninput="this.className = ''"></p>
                    @error('data_nascimento_enc2')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col">
                    <span>Idade</span>
                    <input type="text" id="idadeinput10" value="IDADE" class="form-control" readonly="true"  style="text-align: center" disabled>
                    <div id="mensagem10" style="color: red;"></div>
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
                        <input type="text" id="bi_input2" placeholder="Número do bilhete de identidade"  name="num_bi_enc2" value="{{old('num_bi_enc2')}}" oninput="this.className = ''"maxlength="14">
                        <div id="mensagem3" style="color: red;"></div>
                        @error('num_bi_enc2')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Dados do Segundo encarregado FIM --}}

            {{-- Dados do Terceiro encarregado --}}
            <div class="row" style="display: flex; flex-direction: row;">

                <div class="col-3 form-group gap-1 ">
                    <select name="grau3" id="opcoes" value="{{old('grau3')}}" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Outro"selected>Outro</option>
                    </select>
                    @error('grau3')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div id="clone" class="col-lg-3 justify-content-center align-items-center">
        
                    <div class=" col aa" style="display: flex; flex-direction: column;">
                        <input type="text" id="telefoneinput4" name="telefone3" value="{{old('telefone3')}}" placeholder="Telefone" oninput="this.className = ''">
                        <div class="mensagem-erro" style="color: red;"></div>
                        @error('telefone3')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Nome do Terceiro encarregado" name="nome_enc3" value="{{old('nome_enc3')}}" oninput="this.className = ''">
                        @error('nome_enc3')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 10px;">
                <div class="col">
                    <span>Data de Nascimento</span>
                    <input type="date" id="datainput20" name="data_nascimento_enc3" value="{{old('data_nascimento_enc3')}}" oninput="this.className = ''">
                    @error('data_nascimento_enc3')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col">
                    <span>Idade</span>
                    <input type="text" id="idadeinput20" class="form-control" readonly="true"  style="text-align: center" value="IDADE" disabled>
                    <div id="mensagem080" style="color: red;"></div>
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
                        <input type="text" id="bi_input4" name="num_bi_enc3" value="{{old('num_bi_enc3')}}" placeholder="Número do bilhete de identidade" oninput="this.className = ''"maxlength="14">
                        <div id="mensagem5" style="color: red;"></div>
                        @error('num_bi_enc3')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- Dados do Terceiro encarregado FIM --}}
            <div class="row">
                <div class=" col form-group">

                    <input type="email" placeholder="Digite o E-mail do Aluno" name="email" value="{{old('email')}}" oninput="this.className = ''">
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

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
