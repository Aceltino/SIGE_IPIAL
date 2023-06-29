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
                <select name="curso" id="curso-select" class="form-select">
                    <option selected disabled>CURSO</option>
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="row">
            
                <div class="form-group col">
                    <span>Classe</span>
                    <select name="classe" id="classe-select" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Classe</option>
                        @foreach ($classe as $classee)
                        <option value="{{$classee->classe_id}}">{{$classee['classe']}}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="form-group col">
                    <span>Turno</span>
                    <select name="opcoes" id="turno-select" oninput="this.className = ''" class="form-select">
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
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
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
                        <input type="text" placeholder="turno" oninput="this.className = ''">
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
                    <input type="text" placeholder="Nome do Primeiro encarregado" name="nome_enc1" value ="3456789"  oninput="this.className = ''">
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
                        <input type="text" placeholder="Número do bilhete de identidade"  name="num_bi_enc1" value="{{ old('num_bi_enc1') }}" oninput="this.className = ''">
                    </div>
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
                <div class="col">
                    <div class="form-group">
                    <input type="text" placeholder="Nome do Segundo encarregado" value ="" name="nome_enc2" oninput="this.className = ''">
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

            <div class="row">
                <div class=" col form-group">
                    <input type="email" placeholder="Digite o E-mail do Aluno" name="email"  value="" oninput="this.className = ''">
                </div>
                <div class="col form-group">
                    <input type="hidden" name="id" value ="123456"> {{-- Input para recuperar o id --}}
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