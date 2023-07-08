@extends('layouts.main')

@section('title', 'Registrar Aluno')

@section('conteudo')
<main id="main" class="main" >

    <form method="POST" action="{{route('registrar-store')}}" id="regForm" action="" class="formulario-layout">
    @csrf
        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

        <div class="tab">     

        @if(session()->has('Sucesso'))
    <div class="alert alert-success no-print">
    {{session('Sucesso')}}
    </div>
    @endif
    @if(session()->has('ErroPessoa'))
    <div class="alert alert-danger no-print">
    {{session('ErroPessoa')}}
    </div>
    @endif
    @if(session()->has('ErroEncarregado'))
    <div class="alert alert-danger no-print">
    {{session('ErroEncarregado')}}
    </div>
    @endif
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>VERIFIQUE SE HÁ VAGAS SEGUNDO A SUA PREFERÊNCIA</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <select name="curso_escolhido" value="{{ old('curso_escolhido') }}" id="curso-select" class="form-select">
                    <option selected disabled>CURSO</option>
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="row">
            
                <div class="form-group col">
                    <span>Classe</span>
                    <select name="classe_escolhido" value="{{ old('classe_escolhido') }}" id="classe-select" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Classe</option>
                        <option value="2">11ª</option>
                        <option value="3">12ª</option>
                        <option value="4">13ª</option>
                       
                    </select>
                </div>
            
                <div class="form-group col">
                    <span>Turno</span>
                    <select name="turno_escolhido" value="{{ old('turno_escolhido') }}" id="turno-select" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Turno</option>
                        <option value="Manhã">Manhã</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noite">Noite</option>
                    </select>
                </div>
            
                <div class="col">
                    <span>Nº Vagas</span>
                    <input id="vagas-input" class="form-control" type="number" readonly>
                    <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-da-quantidade-de-vagas"></p>
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
                <input type="text" placeholder="Nome Completo do aluno" value="{{ old('nome_completo') }}" name="nome_completo" oninput="this.className = ''">
                @error('nome_completo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nome Completo do pai" value="{{ old('nome_pai_cand') }}" name="nome_pai_cand" oninput="this.className = ''">
                @error('nome_pai_cand')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nome Completo da mãe" value="{{ old('nome_mae_cand') }}" name="nome_mae_cand" oninput="this.className = ''">
                @error('nome_mae_cand')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>

            <div class="row">

                <div class="col">
                    <p><input type="date" name="data_nascimento" value="{{ old('data_nascimento') }}" oninput="this.className = ''" id="datainput"></p>
                    @error('data_nascimento')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col">
                    <input type="text" class="form-control" id="idadeinput" readonly="true" value="00" name="" disabled>
                    <div id="mensagem" style="color: red;"></div>
                </div>

                <div class="col">
                    <input type="text" placeholder="Naturalidade" value="{{ old('naturalidade_cand') }}" name="naturalidade_cand" oninput="this.className = ''">
                    @error('naturalidade_cand')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <LAbel > Sexo: </LAbel><input  style=" margin-left: 8px;"type="radio" id="masculino" value="Masculino" name="genero" checked><label for="masculino"> Masculino</label>
                        <input type="radio" id="feminino" value="Femenino" name="genero"><label for="feminino"> Feminino</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" id="bi_input" placeholder="Número do bilhete de identidade" value="{{ old('num_bi') }}" name="num_bi" oninput="this.className = ''">
                        <div class="" id="mensagem1" style="color: red;" maxlength="14"></div>
                        @error('num_bi')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">

                <div class="col-lg-4 gap-1 justify-content-center align-items-center">
                    <div>
                        <span style="color: #777;">Telefone (+244):</span>
                    </div>
                    <div class=" col aa" style="display: flex; flex-direction: column;">
                        <input  type="text" id="telefoneinput2" name="num_tel" placeholder="Telefone" value="{{ old('num_tel') }}" oninput="this.className = ''">
                        <div class=" mensagem-erro  " style="width: 100%;"></div>
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
                        <h2>INTRODUZA OS DADOS DA ESCOLA DE PROVIDÊNCIA</h2>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="form-group">
                    <input type="text" placeholder="Nome da escola de proveniência" value="{{ old('nome_escola') }}" name="nome_escola" oninput="this.className = ''">
                    @error('nome_escola')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row">

                <div class="form-group col">
                    <select oninput="this.className = ''" class="form-select"  value="{{ old('turno') }}" name="turno">
                      <option value="1">Manhã</option>
                      <option value="2">Tarde</option>
                      <option value="3">Noite</option>
                    </select>
                    @error('turno')
                     <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>

                

                <div class="col">
                    <div class="form-group">
                        <input type="text" name="num_aluno" id="numeroinput1" value="{{ old('num_aluno') }}" placeholder="Nº do aluno" oninput="this.className = ''">
                        @error('num_aluno')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" name="turma_aluno" value="{{ old('turma_aluno') }}" placeholder="Turma" oninput="this.className = ''">
                        @error('turma_aluno')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text"id="numeroinput" placeholder=" Número de processo" value="{{ old('num_processo') }}" name="num_processo" oninput="this.className = ''">
                    @error('num_processo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" placeholder=" Ano letivo" value="{{ old('ultimo_anoLectivo') }}" name="ultimo_anoLectivo" oninput="this.className = ''">
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
                        <h2>INFORMAÇÕES IMPORTANTES PARA O INSTITUTO</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-3 form-group gap-1 ">
                    <select name="grau1" value="{{ old('grau1') }}" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Pai"selected>Pai</option>
                    </select>
                </div>

                <div id="clone3"class="col-lg-3  gap-1 justify-content-center align-items-center">
                    <div class=" col aa" style="display: flex; flex-direction: column;">
                        <input type="text" id="telefoneinput4" name="telefone1" value="{{ old('telefone1') }}" placeholder="Telefone" oninput="this.className = ''">
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
                    <input type="text" placeholder="Nome do Primeiro encarregado" name="nome_enc1" value="{{ old('nome_enc1') }}"  oninput="this.className = ''">
                    @error('nome_enc1')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><input type="date" id="datainput2" value="{{ old('data_nascimento_enc1') }}" name="data_nascimento_enc1" oninput="this.className = ''"></p>
                    @error('data_nascimento_enc1')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col">
                    <input type="text"  id="idadeinput2" class="form-control" readonly="true" value="00" disabled>
                    <div id="mensagem08" style="color: red;"></div>
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
                        <input type="text" id="bi_input1" placeholder="Número do bilhete de identidade"  name="num_bi_enc1" value="{{ old('num_bi_enc1') }}" oninput="this.className = ''">
                        <div id="mensagem2" style="color: red;" maxlength="14"></div>
                        @error('num_bi_enc1')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 form-group gap-1 ">
                    <select name="grau2" value="{{ old('grau2') }}" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Mãe" selected>Mãe</option>
                    </select>
                </div>

                <div id="clone2" class="col-lg-3 gap-1 justify-content-center align-items-center">
                    <div class=" col aa" style="display: flex; flex-direction: column;">
                        <input id="telefoneinput3" type="text" name="telefone2"  value="{{ old('telefone2') }}" placeholder="Telefone" oninput="this.className = ''">
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
                    <input type="text" placeholder="Nome do Segundo encarregado" value="{{ old('nome_enc2') }}" name="nome_enc2" oninput="this.className = ''">
                    @error('nome_enc2')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="date" id="datainput10" value="{{ old('data_nascimento_enc2') }}"  name="data_nascimento_enc2" oninput="this.className = ''">
                    @error('data_nascimento_enc2')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col">
                    <input type="text" id="idadeinput10" class="form-control" readonly="true" value="00" disabled>
                    <div id="mensagem10" style="color: red;"></div>
                </div>
            </div>
            <div class="row"  style="margin-top: 15px;">

                <div class="col">
                    <div class="form-group">
                      <input type="radio" id="masculino" name="genero2" value="Masculino" checked><label for="masculino"> Masculino</label>
                      <input type="radio" id="feminino" name="genero2" value="Femenino"><label for="feminino"> Feminino</label>
                    </div>
                  </div>

                <div class="col-8">
                    <div class="form-group">
                        <input type="text" id="bi_input2"  placeholder="Número do bilhete de identidade"  name="num_bi_enc2" value="{{ old('num_bi_enc2') }}" oninput="this.className = ''">
                        <div id="mensagem3" style="color: red;" maxlength="14"></div>
                        @error('num_bi_enc2')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-3 form-group gap-1 ">
                    <select name="grau3" value="{{ old('grau3') }}" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="Outro"selected>Outro</option>
                    </select>
                </div>

                <div id="clone" class="col-lg-3 gap-1 justify-content-center align-items-center">
                    <div class=" col aa" style="display: flex; flex-direction: column;">
                        <input type="text" name="telefone3" id="telefoneinput" value="{{ old('telefone3') }}" placeholder="Telefone" oninput="this.className = ''">
                        <div class=" mensagem-erro  " style="width: 100%;"></div>
                        @error('telefone3')
                            <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                    <i class="bi bi-x"></i>
                                </button>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <input type="text" placeholder="Nome do Terceiro encarregado" value="{{ old('nome_enc3') }}" name="nome_enc3" oninput="this.className = ''">
                    @error('nome_enc3')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror   
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="date" id="datainput20" value="{{ old('data_nascimento_enc3') }}" name="data_nascimento_enc3" oninput="this.className = ''">
                    @error('data_nascimento_enc3')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col">
                    <input type="text" id="idadeinput20" class="form-control" readonly="true" value="00" disabled>
                    <div id="mensagem080" style="color: red;"></div>
                </div>
            </div>

            <div class="row" style="margin-top: 15px;">
                <div class="col">
                    <div class="form-group">
                      <input type="radio" id="masculino" name="genero3" value="Masculino" checked><label for="masculino"> Masculino</label>
                      <input type="radio" id="feminino" name="genero3" value="Femenino"><label for="feminino"> Feminino</label>
                    </div>
                </div>
                <div class="col-8" >
                    <div class="form-group">
                        <input type="text" style="margin-top: 5px;" id="bi_input4" placeholder="Número do bilhete de identidade"  name="num_bi_enc3" value="{{ old('num_bi_enc3') }}" oninput="this.className = ''" maxlength="14">
                        <div id="mensagem5" style="color: red;"></div>
                        @error('num_bi_enc3')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col form-group">
                    <input type="email" placeholder="Digite o E-mail do Aluno" name="email"  value="{{ old('email') }}" oninput="this.className = ''">
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col form-group"></div>
            </div>

        </div>  
        <div style="text-align:center;margin-top:10px;">
            <div>
                <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
                <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
            </div>
        </div>
    </form>
    <script>
        const cursoSelect = document.getElementById('curso-select');
        const classeSelect = document.getElementById('classe-select');
        const turnoSelect = document.getElementById('turno-select');
        const vagasInput = document.getElementById('vagas-input');
    
        cursoSelect.addEventListener('change', updateVagasInput);
        classeSelect.addEventListener('change', updateVagasInput);
        turnoSelect.addEventListener('change', updateVagasInput);
    
        function updateVagasInput() {
            const cursoId = cursoSelect.value;
            const classeId = classeSelect.value;
            const turno = turnoSelect.value;
            const vagas = @json($vagas);
    
            let totalVagas = 0;
    
            for (let i = 0; i < vagas.length; i++) {
                if (vagas[i].cursoId == cursoId && vagas[i].classeId == classeId && vagas[i].turno === turno) {
                    totalVagas = vagas[i].totalVagas;
                    break;
                }
            }
    
            vagasInput.value = totalVagas;
        }
    </script>
</main>
@endsection