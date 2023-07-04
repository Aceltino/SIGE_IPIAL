@extends('layouts.main')

@section('title', 'Editar Calendário de Prova')

@section('conteudo')
<main id="main" class="main">
    <form method="POST" action="" id="regForm" class="form-nscricao">
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
            <h2>Editar dados do calendário de Provas</h2>
            <span class="subtitulo-calend">Selecione o curso, a classe e o turno</span>
        </div>


        <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
                <option disabled>Curso</option>
                <option value="D.P">Desenhador projetista - D.P</option>
                <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                <option value="T.I" selected>Técnico de Informática - T.I</option>
                <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
        </div>

        <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
                <option disabled>Classe</option>
                <option value="10" selected>10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
            </select>
        </div>
        
        <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
                <option disabled>Turno</option>
                <option value="manha">Manhã</option>
                <option value="tarde" selected>Tarde</option>
                <option value="noite">Noite</option>
            </select>
        </div>

        <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
                <option disabled>Tipo de Prova</option>
                <option value="trimestral" selected>Timestral</option>
                <option value="global">Global</option>
                <option value="exame">Exame</option>
                <option value="examespec">Exame especial</option>
            </select>
        </div>


        <div class="row dv-com-span">
            <div class="col-lg-6">
                <span class="span-calend">Data da primeira prova</span>
                <input type="date" oninput="this.className = ''" value="2023-03-28">
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">Data da ultima prova</span>
                <input type="date" oninput="this.className = ''" value="2023-04-05">
            </div>
        </div>

        <br>

        <div class="row dv-com-span">
            <div class="col-lg-6">
                <span class="span-calend">Horário da primeira prova</span>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <input type="time" value="07:30">
                        </div>
                    </div>

                    <div class="col-lg-2" style="display: flex;justify-content: center;align-items: center;">Até</div>

                    <div class="col-lg-5">
                        <div class="form-group">
                            <input type="time" value="09:00">
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">Horário da segunda prova</span>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <input type="time" value="09:10">
                        </div>
                    </div>

                    <div class="col-lg-2" style="display: flex;justify-content: center;align-items: center;">Até</div>

                    <div class="col-lg-5">
                        <div class="form-group">
                            <input type="time" value="10:40">
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
                <input type="date" oninput="this.className = ''" value="2023-03-28">
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">.</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Dia da semana</option>
                        <option value="segunda-f" selected>Segunda-Feira</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option selected>Português</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option selected>Inglês</option>
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
                <input type="date" oninput="this.className = ''" value="2023-03-29">
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">.</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Dia da semana</option>
                        <option value="segunda-f">Segunda-Feira</option>
                        <option value="terca-f" selected>Terça-Feira</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option selected>TIC</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>TIC</option>
                        <option selected>Empreendedorismo</option>
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
                <input type="date" oninput="this.className = ''" value="2023-03-30">
            </div>

        
            <div class="col-lg-6">
                <span class="span-calend">.</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Dia da semana</option>
                        <option value="segunda-f">Segunda-Feira</option>
                        <option value="terca-f">Terça-Feira</option>
                        <option value="quarta-f" selected>Quarta-Feira</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>TIC</option>
                        <option>Empreendedorismo</option>
                        <option selected>FAI</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>TIC</option>
                        <option>Empreendedorismo</option>
                        <option>FAI</option>
                        <option selected>Electrotecnia</option>
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

        <div class="row dv-sel-dias">
            <div class="col-lg-6">
                <span class="span-calend">Data da prova</span>  
                <input type="date" oninput="this.className = ''" value="2023-03-31">
            </div>

            <div class="col-lg-6">
                <span class="span-calend">.</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Dia da semana</option>
                        <option value="segunda-f">Segunda-Feira</option>
                        <option value="terca-f">Terça-Feira</option>
                        <option value="quarta-f">Quarta-Feira</option>
                        <option value="quinta-f" selected>Quinta-Feira</option>
                        <option value="sexta-f">Sexta-Feira</option>
                    </select>
                </div>
            </div>
        
        </div>


        <div class="row dv-sel-dias">
            <div class="col-lg-6">
                <span class="span-calend">Primeira prova</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>TIC</option>
                        <option>Empreendedorismo</option>
                        <option>FAI</option>
                        <option>Electrotecnia</option>
                        <option selected>SEAC</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option selected disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>TIC</option>
                        <option>Empreendedorismo</option>
                        <option>FAI</option>
                        <option>Electrotecnia</option>
                        <option>SEAC</option>
                        <option selected>Quimica</option>
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

        <div class="row dv-sel-dias">
            <div class="col-lg-6">
                <span class="span-calend">Data da prova</span>  
                <input type="date" oninput="this.className = ''" value="2023-04-01">
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">.</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Dia da semana</option>
                        <option value="segunda-f">Segunda-Feira</option>
                        <option value="terca-f">Terça-Feira</option>
                        <option value="quarta-f">Quarta-Feira</option>
                        <option value="quinta-f">Quinta-Feira</option>
                        <option value="sexta-f" selected>Sexta-Feira</option>
                    </select>
                </div>
            </div>
        
        </div>


        <div class="row dv-sel-dias">
            <div class="col-lg-6">
                <span class="span-calend">Primeira prova</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>TIC</option>
                        <option>Empreendedorismo</option>
                        <option>FAI</option>
                        <option>Electrotecnia</option>
                        <option>SEAC</option>
                        <option>Quimica</option>
                        <option selected>Fisica</option>
                        <option>TLP</option>
                        <option>Matematica</option>
                    </select>
                </div>
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">Segunda prova</span>
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>TIC</option>
                        <option>Empreendedorismo</option>
                        <option>FAI</option>
                        <option>Electrotecnia</option>
                        <option>SEAC</option>
                        <option>Quimica</option>
                        <option>Fisica</option>
                        <option selected>TLP</option>
                        <option>Matematica</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

    <div class="tab">
        <div class="card-titulo-calend">
            <h2>Sexto dia</h2>
            <span class="subtitulo-calend">Selecione as disciplinas e as horas(de inicio das provas respectivamente)</span>
        </div>

        <div class="row dv-sel-dias">
            <div class="col-lg-6">
                <span class="span-calend">Data da prova</span>  
                <input type="date" oninput="this.className = ''" value="2023-04-05">
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">.</span>  
                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Dia da semana</option>
                        <option value="segunda-f">Segunda-Feira</option>
                        <option value="terca-f" selected>Terça-Feira</option>
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
                    <select oninput="this.className = ''" class="form-select form-control">
                        <option disabled>Disciplina</option>
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
                        <option selected>Matematica</option>
                    </select>
                </div>
            </div>

            
            <div class="col-lg-6">
                <span class="span-calend">Segunda prova</span>
                <div class="form-group">
                <select oninput="this.className = ''" class="form-select form-control" disabled>
                    <option selected disabled>Disciplina</option>
                    <option value="matematica">Matemática</option>
                    <option value="tic">Tecnologia de Informação e Comunicação</option>
                    <option value="tlp">Técnicas de Linguagens de Programação</option>
                    <option value="ogi">Organização e Gestão Industrial</option>
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