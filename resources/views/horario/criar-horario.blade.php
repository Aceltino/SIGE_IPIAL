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
        </div>

        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Dados do horário</h2>
            <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione a turma e a respectiva sala.</h6>

            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''" name='turma' class="form-select" id="horario-select-turma">
                        <optgroup id="optgroup-turma" label="Turma">
                            
                        </optgroupb>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''" name='turma' class="form-select" id="horario-select-turma">
                        <optgroup label="Salas">
                            <option value="Sala 7">Sala 1</option>
                            <option value="Sala 2">Sala 2</option>
                            <option value="Sala 3">Sala 3</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas e Professores</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione os professores para as disciplinas apresentadas.</h6>
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="disciplina1" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="hora_segunda1" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="hora_terça1" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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
          
            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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
          
          <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
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

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>
    </main>
    <script>
        

        
    </script>
@endsection