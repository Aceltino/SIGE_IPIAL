@extends('layouts.main')

@section('title', 'Editar horário')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout">

    <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Editar dados do horário</h2>
            <h4 class="text-uppercase text-center my-4 color-blue-principal">Informações gerais.</h4>
          
            <div class="row mb-3">
                <div class="col">
                    <input type="text" oninput="this.className = ''" class="form-control" value="Contrução civil" disabled>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <input type="text" oninput="this.className = ''" class="form-control" value="Desenhador Projectista" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="text" oninput="this.className = ''" class="form-control" value="EI10AN" id="input-editar-horario-turma" disabled>
                </div>
            </div>

            <div class="row mb-3" id="editar-horario-div-que-pode-desaparecer-1">
                <div class="col-sm-6">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Primeiro dia de Educação Física">
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
                    <input type="time" title="Hora de início da Educação Física" class="form-control" id="editar-horario-hora-de-inicio-da-educacao-fisica-no-primeiro-dia" name="" oninput="this.className = ''" required>
                </div>

                <div class="col-sm-3">
                    <input type="time" title="Hora de fim da Educação Física" class="form-control" id="editar-horario-hora-de-fim-da-educacao-fisica-no-primeiro-dia" name="" oninput="this.className = ''" required>
                </div>
            </div>

            <div class="row" id="editar-horario-div-que-pode-desaparecer-2">
                <div class="col-sm-6">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Primeiro dia de Educação Física">
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
                    <input type="time" title="Hora de início da Educação Física" class="form-control" id="editar-horario-hora-de-inicio-da-educacao-fisica-no-segundo-dia" name="" oninput="this.className = ''" required>
                </div>

                <div class="col-sm-3">
                    <input type="time" title="Hora de fim da Educação Física" class="form-control" id="editar-horario-hora-de-fim-da-educacao-fisica-no-segundo-dia" name="" oninput="this.className = ''" required>
                </div>
            </div>
        

        
            <h4 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas e Professores</h4>
          
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
        

        
            <h4 class="text-uppercase text-center my-3 color-blue-principal">Segunda-Feira</h4>
          
            <div class="row mb-3">
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
        

        
            <h4 class="text-uppercase text-center my-3 color-blue-principal">Terça-Feira</h4>
          
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
        
        
        
            <h4 class="text-uppercase text-center my-3 color-blue-principal">Quarta-Feira</h4>
          
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
        

        
            <h4 class="text-uppercase text-center my-3 color-blue-principal">Quinta-Feira</h4>
          
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
        

        
            <h4 class="text-uppercase text-center my-3 color-blue-principal">Sexta-Feira</h4>
          
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



            <h4 class="text-uppercase text-center my-3 color-blue-principal">Director de turma</h4>
          
            <div class="row" >
                <div class="col">
                    <select oninput="this.className = ''" class="form-select">
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

        <div style="text-align:center;margin-top:10px;">
            <div class="mt-4">
                <a href="/ano-letivo" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>
                <button type="submit" class="btn btn-success">Atualizar horário</button>
            </div>
        </div>
    </form>
</main>
@endsection