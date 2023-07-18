@extends('layouts.main')

@section('title', 'Criar Calendário de Prova')

@section('conteudo')
<main id="main" class="main">
    <form method="POST" action="{{ route('store.calendario') }}" id="regForm" class="form-nscricao" method ="POST">
    @csrf
        <div style="text-align:center;margin-top:0px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
 
        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Criar calendário de Provas</h2>
                <span class="subtitulo-calend">Selecione o curso, a classe e o turno</span>
            </div>

        <!-- Tras de forma dinamica-->
            <div class="form-group">
                <select oninput="this.className = ''" class="form-select"  name="curso">
                    <option selected disabled>Curso</option> 
                    @foreach ($curso as $curs)
                        <option value="{{ $curs['curso_id'] }}">{{ $curs['nome_curso'] }}</option>
                    @endforeach
                </select>
            </div>
<!-- Tras de forma dinamica-->
            <div class="form-group">
                <select oninput="this.className = ''" class="form-select"  name="classe">
                    <option selected disabled>Classe</option>
                    @foreach ($classe as $class)
                        <option value="{{ $class['classe_id'] }}">{{ $class['classe'] }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Tras de forma dinamica-->
            <div class="form-group">
                <select oninput="this.className = ''" class="form-select" name="turno">
                    <option selected disabled>Turno</option>
                    @foreach ($turno as $turn)
                        <option value="{{ $turn['turno_id'] }}">{{ $turn['nome_turno'] }}</option>
                    @endforeach
                </select>
            </div>
<!-- Tras de forma dinamica-->
            <div class="form-group">
                <select oninput="this.className = ''" class="form-select">
                    <option selected disabled>Tipo de Prova</option>
                    <option value="trimestral">Timestral</option>
                    <option value="global">Global</option>
                    <option value="exame">Exame</option>
                    <option value="examespec">Exame especial</option>
                </select>
            </div>


            <div class="row dv-com-span">
                <div class="col-lg-6">
                    <span class="span-calend">Data da primeira prova</span>
                    <input type="date" oninput="this.className = ''" name="dataI">
                </div>

                
                <div class="col-lg-6">
                    <span class="span-calend">Data da ultima prova</span>
                    <input type="date" oninput="this.className = ''" name="dataU">
                </div>
            </div>

            <br>
        <!--Envia esse manbo para tabela horario-->
            <div class="row dv-com-span">
                <div class="col-lg-6">
                    <span class="span-calend">Horário da primeira prova</span>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input type="time" name="Time1">
                            </div>
                        </div>

                        <div class="col-lg-2" style="display: flex;justify-content: center;align-items: center;">Até</div>

                        <div class="col-lg-5">
                            <div class="form-group">
                                <input type="time" name="Time2">
                            </div>
                        </div>

                    </div>
                </div>

                <!--Envia esse manbo para tabela horario-->
                <div class="col-lg-6">
                    <span class="span-calend">Horário da segunda prova</span>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input type="time" name="TimeS1">
                            </div>
                        </div>

                        <div class="col-lg-2" style="display: flex;justify-content: center;align-items: center;">Até</div>

                        <div class="col-lg-5">
                            <div class="form-group">
                                <input type="time" name="TimeS2">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Primeiro dia</h2>
                <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
            </div>

            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Data da prova</span>  
                    <input type="date" oninput="this.className = ''" name="DataP">
                </div>

              <!--Trazer de forma dinamica-->  
                <div class="col-lg-6">
                    <span class="span-calend">.</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Dia_semana1">
                            <option selected disabled>Dia da semana</option>
                            <option value="segunda-f">Segunda-Feira</option>
                            <option value="terca-f">Terça-Feira</option>
                            <option value="quarta-f">Quarta-Feira</option>
                            <option value="quinta-f">Quinta-Feira</option>
                            <option value="sexta-f">Sexta-Feira</option>
                        </select>
                    </div>
                </div>
            
            </div>


            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Primeira prova</span>  
                    <div class="form-group">
                        <!--Trazer de forma dinamica-->
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina1">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>

                
                <div class="col-lg-6">
                    <span class="span-calend">Segunda prova</span>
                    <div class="form-group">
                        <!--Trazer de forma dinamica-->
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina2">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
       
        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Segundo dia</h2>
                <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
            </div>

            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Data da prova</span>  
                    <input type="date" oninput="this.className = ''" name="Data_prova">
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">.</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Dia_semana2">
                            <option selected disabled>Dia da semana</option>
                            <option value="segunda-f">Segunda-Feira</option>
                            <option value="terca-f">Terça-Feira</option>
                            <option value="quarta-f">Quarta-Feira</option>
                            <option value="quinta-f">Quinta-Feira</option>
                            <option value="sexta-f">Sexta-Feira</option>
                        </select>
                    </div>
                </div>
            
            </div>

        <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Primeira prova</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina3">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">Segunda prova</span>
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina4">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Terceiro dia</h2>
                <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
            </div>

            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Data da prova</span>  
                    <input type="date" oninput="this.className = ''">
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">.</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Dia_semana3">
                            <option selected disabled>Dia da semana</option>
                            <option value="segunda-f">Segunda-Feira</option>
                            <option value="terca-f">Terça-Feira</option>
                            <option value="quarta-f">Quarta-Feira</option>
                            <option value="quinta-f">Quinta-Feira</option>
                            <option value="sexta-f">Sexta-Feira</option>
                        </select>
                    </div>
                </div>
            
            </div>

            <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Primeira prova</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina5">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">Segunda prova</span>
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina6">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>        

        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Quarto dia</h2>
                <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
            </div>
            <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Data da prova</span>  
                    <input type="date" oninput="this.className = ''">
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">.</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Dia_semana4">
                            <option selected disabled>Dia da semana</option>
                            <option value="segunda-f">Segunda-Feira</option>
                            <option value="terca-f">Terça-Feira</option>
                            <option value="quarta-f">Quarta-Feira</option>
                            <option value="quinta-f">Quinta-Feira</option>
                            <option value="sexta-f">Sexta-Feira</option>
                        </select>
                    </div>
                </div>
            
            </div>

            <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Primeira prova</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina7 ">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">Segunda prova</span>
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina8">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Quinto dia</h2>
                <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
            </div>
            <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Data da prova</span>  
                    <input type="date" oninput="this.className = ''">
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">.</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Dia_semana5">
                            <option selected disabled>Dia da semana</option>
                            <option value="segunda-f">Segunda-Feira</option>
                            <option value="terca-f">Terça-Feira</option>
                            <option value="quarta-f">Quarta-Feira</option>
                            <option value="quinta-f">Quinta-Feira</option>
                            <option value="sexta-f">Sexta-Feira</option>
                        </select>
                    </div>
                </div>
            
            </div>

            <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Primeira prova</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina9">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">Segunda prova</span>
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina10">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <!--Trazer de forma dinamica-->
        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Sexto dia</h2>
                <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
            </div>

            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Data da prova</span>  
                    <input type="date" oninput="this.className = ''">
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">.</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Dia_semana6">
                            <option selected disabled>Dia da semana</option>
                            <option value="segunda-f">Segunda-Feira</option>
                            <option value="terca-f">Terça-Feira</option>
                            <option value="quarta-f">Quarta-Feira</option>
                            <option value="quinta-f">Quinta-Feira</option>
                            <option value="sexta-f">Sexta-Feira</option>
                        </select>
                    </div>
                </div>
            
            </div>

            <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Primeira prova</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina11">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">Segunda prova</span>
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina12">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab">
            <div class="card-titulo-calend">
                <h2>Sétimo dia (Último)</h2>
                <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
            </div>

            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Data da prova</span>  
                    <input type="date" oninput="this.className = ''">
                </div>

                <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">.</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Dia_semana7">
                            <option selected disabled>Dia da semana</option>
                            <option value="segunda-f">Segunda-Feira</option>
                            <option value="terca-f">Terça-Feira</option>
                            <option value="quarta-f">Quarta-Feira</option>
                            <option value="quinta-f">Quinta-Feira</option>
                            <option value="sexta-f">Sexta-Feira</option>
                        </select>
                    </div>
                </div>
            
            </div>

            <!--Trazer de forma dinamica-->
            <div class="row dv-sel-dias">
                <div class="col-lg-6">
                    <span class="span-calend">Primeira prova</span>  
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control"name="Disciplina13">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>

                    <!--Trazer de forma dinamica-->
                <div class="col-lg-6">
                    <span class="span-calend">Segunda prova</span>
                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select form-control" name="Disciplina14">
                            <option selected disabled>Disciplina</option>
                            <option>Português</option>
                            <option>Inglês</option>
                            <option>TIC</option>
                            <option>Empreendedorismo</option>
                            <option>FAI</option>
                            <option>Electrotecnia</option>
                            <option>SEAC</option>
                            <option>Quimica</option>
                            <option>Fisica</option>
                            <option>TLP</option>
                            <option>Matematica</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>


        <div style="text-align:center;margin-top:20px;">
            <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
            </div>
        </div>
    </form>
</main>

@endsection