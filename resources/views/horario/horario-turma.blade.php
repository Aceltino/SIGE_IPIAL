@extends('layouts.main')

@section('title', 'Horário da turma')

@section('conteudo')
<main id="main" class="main">
    <div class="d-flex align-items-center bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
        <a class="d-flex align-items-center pe-0" href="#">
            <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
            <span class="d-flex align-items-center ps-2">
                <div class="col-sm-3">
                    <a class="color-white" href="/editar-dados-professor">Disciplina(s)</a>
                </div>
                <div class="col-sm-3">
                    <a class="color-white" href="/horario-professor"><strong>Horário</strong></a>
                </div>
                <div class="col-sm-3">
                    <a class="color-white" href="/avaliacao-professor">Avaliação</a>
                </div>
                <div class="col-sm-3">
                    <a class="color-white" href="/editar-dados-pessoais-professor">Dados pessoais</a>
                </div>
            </span>
        </a>
    </div>

    <form method="POST" action="">
        <div>
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-end">
                    <select class="form-select bg-blue-principal color-white my-3 w-25 ms-auto" title="Professor em actividade">
                        <optgroup label="Ano lectivo">
                            <option>2022 - 2023</option>
                            <option>2023 - 2024</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <p><strong>Área de formação: </strong>Informática</p>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <p><strong>Curso: </strong>Técnico de Informática</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <p><strong>Horário da turma: I10AM</strong> (Regime Diurno) / 10ª Classe_2023-2024</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- /  Inicio da tabela do horário -->
                    <table class="table table-striped align-middle text-center" style="margin-top: 5px;">
                    <thead>
                        <tr>
                            <th scope="col-sm-4" class="text-uppercase">Hora</th>
                            <th scope="col-sm-2" class="text-uppercase">Tempo</th>
                            <th scope="col-sm-2" class="text-uppercase">Segunda</th>
                            <th scope="col-sm-2" class="text-uppercase">Terça</th>
                            <th scope="col-sm-2" class="text-uppercase">Quarta</th>
                            <th scope="col-sm-2" class="text-uppercase">Quinta</th>
                            <th scope="col-sm-2" class="text-uppercase">Sexta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
                                07:20 <br>
                                08:05
                            </td>
                            <td>1º</td>
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                        </tr>
                        
                        <tr>
                        <td scope="row">
                                08:10 <br>
                                08:55
                            </td>
                            <td>2º</td>
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                09:00 <br>
                                09:45
                            </td>
                            <td>3º</td>
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                09:50 <br>
                                10:35
                            </td>
                            <td>4º</td>
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                10:40 <br>
                                11:25
                            </td>
                            <td>5º</td>
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                11:30 <br>
                                12:15
                            </td>
                            <td>6º</td>
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                            <td>
                                TLP
                            <td>
                                TLP
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    <!-- Termina a tabela do horário -->
                </div>
            </div>

            <!-- Início da tabela de observações -->
            <table class="table border align-middle mt-4">
                <thead>
                    <tr>
                        <th scope="col-sm-12" class="text-uppercase">Disciplinas</th>
                        <th scope="col-sm-12" class="text-uppercase">Nomes dos professores</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Língua Portuguesa (PORT)</td>
                        <td>Lucrécia Miguel</td>
                    </tr>
                    <tr>
                        <td>Língua Portuguesa (PORT)</td>
                        <td>Lucrécia Miguel</td>
                    </tr>
                    <tr>
                        <td>Língua Portuguesa (PORT)</td>
                        <td>Lucrécia Miguel</td>
                    </tr>
                    <tr>
                        <td>Matemática (MAT)</td>
                        <td>José Kombo</td>
                    </tr>
                    <tr>
                        <td>Matemática (MAT)</td>
                        <td>José Kombo</td>
                    </tr>
                    <tr>
                        <td>Matemática (MAT)</td>
                        <td>José Kombo</td>
                    </tr>
                    <tr>
                        <td>Sistemas de Exploração e Arquitectura de Computadores (SEAC)</td>
                        <td>Rosa António</td>
                    </tr>
                    <tr>
                        <td>Sistemas de Exploração e Arquitectura de Computadores (SEAC)</td>
                        <td>Rosa António</td>
                    </tr>
                    <tr>
                        <td>Sistemas de Exploração e Arquitectura de Computadores (SEAC)</td>
                        <td>Rosa António</td>
                    </tr>
                    <tr>
                        <td>Técnicas e Linguagens de Programação (TLP)</td>
                        <td>Sungo Afonso</td>
                    </tr>
                    <tr>
                        <td>Técnicas e Linguagens de Programação (TLP)</td>
                        <td>Sungo Afonso</td>
                    </tr>
                    <tr>
                        <td>Técnicas e Linguagens de Programação (TLP)</td>
                        <td>Sungo Afonso</td>
                    </tr>
                    <tr>
                        <td><strong>Delegado da Turma</strong></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Director de Turma</strong></td>
                        <td>Sungo Afonso</td>
                    </tr>
                    <tr>
                        <td><strong>Coordenador de Área / Coordenador de Curso</strong></td>
                        <td><strong>Sivi Lando / Anatoli Lussati</strong></td>
                    </tr>
                </tbody>
            </table>
            <!-- Termina a tabela de observações -->
            
        </div>

        <div style="text-align:center;margin-top:30px;">
            <div>
                <button type="button" class="btn color-white bg-blue-principal mt-2" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            </div>
        </div>
    </form>

</main>
@endsection