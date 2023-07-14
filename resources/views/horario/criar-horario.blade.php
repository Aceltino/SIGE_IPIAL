@extends('layouts.main')

@section('title', 'Criar horário da turma')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action="" id="regForm" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:40px;">
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
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Dados do horário</h2>
            <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione a área de formação, o curso, a turma,
            os dias de educação física (turmas da 12ª, 13ª e noite não inclusas), sem esquecer as horas de início e fim.</h6>

            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''"name='curso' class="form-select">
                        <optgroup label="Curso">
                        <option value="Desenhador Projectista">Desenhador Projetista</option>
                        <option value="Técnico de Energia e Instalações Eléctricas">Técnico de Energia e Instalações Eléctricas</option>
                        <option value="Técnico de Informática ">Técnico de Informática</option>
                        <option value="Electrônica e Telecomunicação">Electrônica e Telecomunicação</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''" name='turma' class="form-select" id="horario-select-turma">
                        <optgroup label="Turma">
                            <option value="I10AM">I10AM</option>
                            <option value="I11BM">I11BM</option>
                            <option value="I12CM">I12CM</option>
                            <option value="I13DM">I13DM</option>
                            <option value="I10AM">I10AT</option>
                            <option value="I11BM">I11BT</option>
                            <option value="I12CM">I12CT</option>
                            <option value="I13DM">I13DT</option>
                            <option value="I11AN">I11AN</option>
                            <option value="I13DN">I13DN</option>
                            <option value="EI10AM">EI10AM</option>
                            <option value="EI11BM">EI11BM</option>
                            <option value="EI12CM">EI12CM</option>
                            <option value="EI13DM">EI13DM</option>
                            <option value="EI10AM">EI10AT</option>
                            <option value="EI11BM">EI11BT</option>
                            <option value="EI12CM">EI12CT</option>
                            <option value="EI13DM">EI13DT</option>
                            <option value="EI11AN">EI11AN</option>
                            <option value="EI13DM">EI13AN</option>
                            <option value="CP10AM">CP10AM</option>
                            <option value="CP11BM">CP11BM</option>
                            <option value="CP12CM">CP12CM</option>
                            <option value="CP13DM">CP13DM</option>
                            <option value="CP10AM">CP10AT</option>
                            <option value="CP11BM">CP11BT</option>
                            <option value="CP12CM">CP12CT</option>
                            <option value="CP13DM">CP13DT</option>
                            <option value="CP11AN">CP11AN</option>
                            <option value="CP13DN">CP13DN</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row mb-3" id="horario-div-que-pode-desaparecer-1">
                <div class="col-sm-6">
                    <select oninput="this.className = ''" name='ed_fisica_dia1' class="form-select" id="criar-horario-select-primeiro-dia-de-educacao-fisica" onchange="verificarSelecoesEducacaoFisica()">
                        <optgroup label="Primeiro dia de Educação Física"> 
                            <option value="Segunda-Feira">Segunda-Feira</option>
                            <option value="Terça-Feira">Terça-Feira</option>
                            <option value="Quarta-Feira">Quarta-Feira</option>
                            <option value="Quinta-Feira">Quinta-Feira</option>
                            <option value="Sexta-Feira">Sexta-Feira</option>
                        </optgroup>
                    </select>
                </div>

                <div class="col-sm-3">
                    <select oninput="this.className = ''" name='ed_fisica_dia1' class="form-select" id="criar-horario-select-tempo-de-aula-1">
                        <optgroup label="Tempos de aula"> 
                            <option value="1">Primeiro tempo</option>
                            <option value="2">Segundo tempo</option>
                            <option value="3">Terceiro tempo</option>
                            <option value="4">Quarto tempo</option>
                            <option value="5">Quinto tempo</option>
                            <option value="6">Sexto tempo</option>
                        </optgroup>
                    </select>
                </div>

                <div class="col-sm-3">
                    <input type="text" title="Hora de fim da Educação Física" class="form-control" name='ed_fisica_hora1' value="00:00 - 00:00" id="criar-horario-hora-de-fim-da-educacao-fisica-no-primeiro-dia" name="" oninput="this.className = ''" disabled required>
                </div>
            </div>

            <div class="row" id="horario-div-que-pode-desaparecer-2">
                <div class="col-sm-6">
                    <select oninput="this.className = ''" class="form-select" id="criar-horario-select-segundo-dia-de-educacao-fisica">
                        <optgroup label="Segundo dia de Educação Física">
                            <option value="Nenhum">Nenhum</option>
                            <option value="Segunda-Feira">Segunda-Feira</option>
                            <option value="Terça-Feira">Terça-Feira</option>
                            <option value="Quarta-Feira">Quarta-Feira</option>
                            <option value="Quinta-Feira">Quinta-Feira</option>
                            <option value="Sexta-Feira">Sexta-Feira</option>
                        </optgroup>
                    </select>
                </div>

                <div class="col-sm-3">
                    <select oninput="this.className = ''" name='ed_fisica_dia1' class="form-select" id="criar-horario-select-tempo-de-aula-2">
                        <optgroup label="Tempos de aula"> 
                            <option value="1">Primeiro tempo</option>
                            <option value="2">Segundo tempo</option>
                            <option value="3">Terceiro tempo</option>
                            <option value="4">Quarto tempo</option>
                            <option value="5">Quinto tempo</option>
                            <option value="6">Sexto tempo</option>
                        </optgroup>
                    </select>
                </div>

                <div class="col-sm-3">
                    <input type="text" title="Hora de fim da Educação Física" class="form-control" name='ed_fisica_hora1' value="00:00 - 00:00" id="criar-horario-hora-de-fim-da-educacao-fisica-no-segundo-dia" name="" oninput="this.className = ''" disabled required>
                </div>
            </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas e Professores</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione os professores para as disciplinas apresentadas.</h6>
          
          <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="disciplina1" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" name='professor1' class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Segunda-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="hora_segunda1" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Terça-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="hora_terça1" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quarta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quinta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Sexta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Disciplina">
                            <option>Educação Física</option>
                            <option>Electrotecnia</option>
                            <option>Empreendedorismo</option>
                            <option>Física</option>
                            <option>Formação de Atitudes Integradoras</option>
                            <option>Língua Portuguesa</option>
                            <option>Língua Estrangeira</option>
                            <option>Geometria Descritiva</option>
                            <option>Matemática</option>
                            <option>Máquinas Eléctricas</option>
                            <option>Organização e Gestão Industrial</option>
                            <option>Práticas Oficinais</option>
                            <option>Projecto Tecnológico</option>
                            <option>Química</option>
                            <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                            <option>Técnicas e Linguagens de Programação</option>
                            <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                            <option>Tecnologias de Informação e Comunicação</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Finalizando</h2>
            <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione o director da turma.</h6>
          
            <div class="row" >
                <div class="col">
                    <select oninput="this.className = ''" name='coordenador_turma' class="form-select">
                        <optgroup label="Director de turma">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>


    </main>
@endsection