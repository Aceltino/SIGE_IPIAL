@extends('layouts.main')

@section('title', 'Ficha biográfica - documento')

@section('conteudo')
<main id="main" class="main">
    <section class="main-ficha-biografica">
            <div class="div-ficha-biografica-primeira-linha">
                <section class="section-ficha-biografica-top-left">
                    <img src={{URL::asset("img/logo.png")}} alt="Logo">
                </section>
                <section class="section-ficha-biografica-top-center">
                        <div class="div-insignia-img">
                            <img src={{URL::asset("img/insignia.jpg")}} alt="Insígnia">
                        </div>
                        <article class="article-insignia-text">
                            <p>República de Angola</p>
                            <p>Ministério da educação</p>
                            <p>
                                <b>Instituto Politécnico Industrial Alda Lara</b>
                            </p>
                        </article>
                        <section class="section-title">
                            <h1 class="text-uppercase color-black">Ficha de registro de dados biográficos e académicos</h1>
                        </section>
                </section>
                <section class="section-ficha-biografica-top-right">
                    
                </section>
            </div>

            <div class="div-ficha-biografica-segunda-linha">
                <section class="section-subtitle-and-personal-data">
                        <div class="div-subtitle">
                            <h3 class="text-uppercase fw-bold text-red">Área de formação: Informática</h3>
                            <h3 class="text-uppercase fw-bold text-red">Curso: Técnico de Informática</h3>
                            <h3 class="text-uppercase fw-bold mr-10">Processo nº 27</h3>
                        </div>
                </section>

                <section class="section-table-ficha-biografica">
                    <div class="div-personal-data">
                        <p class="first-p-div-personal-data">
                            Nome_____________________________________________________________________________________________________ 
                            Filho de __________________________________________________________________________________________ 
                        </p>
                        <p class="second-p-div-personal-data">
                            e de _______________________________________________________________________________ 
                            Natural de ________________________________ Nascido aos ______/______/_________ 
                            BI Nº __________________________________
                        </p>
                        <p class="third-p-div-personal-data">
                            Telefone pessoal _________________________________ 
                            parente/grau _________/_______________________________________  
                            Morada _____________________________________
                        </p>
                    </div>
                    <!------------------------------------------------------------------------------------->
                <!----------------------------------- x Tabela 1 x ------------------------------------>
                <!------------------------------------------------------------------------------------->
                    <table>
                        <thead>
                            <!-- Primeira linha -->
                            <tr>
                                <!-- Primeira Coluna da primeira linha -->
                                <td colspan="2" rowspan="3" class="text-uppercase">
                                    <p class="text-center separate"><b>Disciplinas</b></p>
                                </td>
                                <!-- Segunda Coluna da primeira linha -->
                                <td colspan="12" rowspan="1">
                                    <p class="text-center mb-3">_____ª Classe</p>
                                    <p class="mb-3">Turma ______ Nº _____ Ano Lectivo _______</p>
                                    <p class="mb-3">Escola de proveniência __________________</p>
                                </td>
                                <!-- Terceira Coluna da primeira linha -->
                                <td colspan="12" rowspan="1">
                                    <p class="text-center">_____ª Classe</p>
                                    <p class="mb-3">Turma ______ Nº _____ Ano Lectivo _______</p>
                                    <p class="mb-3">Escola de proveniência __________________</p>
                                </td>
                                <!-- Quarta Coluna da primeira linha -->
                                <td colspan="12" rowspan="1">
                                    <p class="text-center">_____ª Classe</p>
                                    <p class="mb-3">Turma ______ Nº _____ Ano Lectivo _______</p>
                                    <p class="mb-3">Escola de proveniência __________________</p>
                                </td>
                            </tr>
                            <!-- Primeira mesclagem -->
                            <tr>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Períodos</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p class="text-center">0,6 <br> C <br> F</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p class="text-center">0,4 <br> P <br> G</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> A</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Exames</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F <br> D</p>
                                </td>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Períodos</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> A</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Exames</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F <br> D</p>
                                </td>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Períodos</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> A</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Exames</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F <br> D</p>
                                </td>
                            </tr>
                            <!-- Segunda mesclagem -->
                            <tr>
                                <!-- Primeira Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º</p>
                                </td>
                                <!-- Segunda Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º</p>
                                </td>
                                <!-- Terceira Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º</p>
                                </td>
                                <!--Nona Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º <br> E</p>
                                </td>
                                <!-- Décima Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º <br> E</p>
                                </td>
                                <!-- Décima-primeira Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º <br> E</p>
                                </td>
                                <!-- Primeira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º</p>
                                </td>
                                <!-- Segunda Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º</p>
                                </td>
                                <!-- Terceira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º</p>
                                </td>
                                <!-- Nona Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º <br> E</p>
                                </td>
                                <!-- Décima Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º <br> E</p>
                                </td>
                                <!-- Décima-primeira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º <br> E</p>
                                </td>
                                <!-- Primeira Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º</p>
                                </td>
                                <!-- Segunda Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º</p>
                                </td>
                                <!-- Terceira Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º</p>
                                </td>
                                <!-- Nona Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º <br> E</p>
                                </td>
                                <!-- Décima Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º <br> E</p>
                                </td>
                                <!-- Décima-primeira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º <br> E</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Segunda Linha -> Componente Sócio-Cultural -->
                        <tr>
                            <td colspan="1" rowspan="4">
                                <p class="text-center">Componente <br><br> Sócio-Cultural</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Português</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Inglês / Francês</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Formação de Atitudes Integradoras</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Educação Física</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="5">
                                <p class="text-center">Componente <br><br> Científica</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Matemática</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Física e Química</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Física</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Electrotecnia</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Organização e Gestão Industrial</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="5">
                                <p class="text-center">Componente <br> Técnica <br> Tecnológica <br> e <br>Prática</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Técnicas e Linguagens de Programação</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Técnicas de Rep. de Equip. Informáticos</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Sistemas de Exploração e Arqu. de Computadores</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Tecnologias de Informação e Comunicação</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Projecto Tecnológico</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>
                        </tbody>
                        <tfoot>
                            <!-- Primeira linha do rodapé da tabela -->
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <b>Situação Final do Aluno b)</b>
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                            </tr>
                            <!-- Segunda linha do rodapé da tabela -->
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <b>O Coordenador do Curso</b>
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </section>

                <!------------------------------------------------------------------------------------->
                <!----------------------------------- x Descrição x ------------------------------------>
                <!------------------------------------------------------------------------------------->

                <section class="section-descricao">
                    <div class="section-descricao-div-1 d-flex">
                        <p>Legenda: a)<b>CF</b> - Classificação de Frequência</p>
                        <p><b>PG</b> - Prova Global</p>
                        <p><b>CA</b> - Classificação Anual</p>
                        <p><b>CFD</b> - Classificação Final da Disciplina</p>
                    </div>
                    <div class="section-descricao-div-1">
                        <p class="ml-10">b)Transita; Retido; Aprovado; Não aprovado; Anulou a Matrícula; Transferido; Excluído por Excesso de Faltas</p>
                    </div>
                </section>

                <!------------------------------------------------------------------------------------->
                <!----------------------------------- x Tabela 2 x ------------------------------------>
                <!------------------------------------------------------------------------------------->
                <section class="section-table-ficha-biografica mt-40">
                    <table>
                        <thead>
                            <!-- Primeira linha -->
                            <tr>
                                <!-- Primeira Coluna da primeira linha -->
                                <td colspan="2" rowspan="3" class="text-uppercase">
                                    <p class="text-center separate"><b>Disciplinas</b></p>
                                </td>
                                <!-- Segunda Coluna da primeira linha -->
                                <td colspan="12" rowspan="1">
                                    <p class="text-center mb-3">_____ª Classe</p>
                                    <p class="mb-3">Turma ______ Nº _____ Ano Lectivo _______</p>
                                    <p class="mb-3">Escola de proveniência __________________</p>
                                </td>
                                <!-- Terceira Coluna da primeira linha -->
                                <td colspan="12" rowspan="1">
                                    <p class="text-center">_____ª Classe</p>
                                    <p class="mb-3">Turma ______ Nº _____ Ano Lectivo _______</p>
                                    <p class="mb-3">Escola de proveniência __________________</p>
                                </td>
                                <!-- Quarta Coluna da primeira linha -->
                                <td colspan="12" rowspan="1">
                                    <p class="text-center">_____ª Classe</p>
                                    <p class="mb-3">Turma ______ Nº _____ Ano Lectivo _______</p>
                                    <p class="mb-3">Escola de proveniência __________________</p>
                                </td>
                            </tr>
                            <!-- Primeira mesclagem -->
                            <tr>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Períodos</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p class="text-center">0,6 <br> C <br> F</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p class="text-center">0,4 <br> P <br> G</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> A</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Exames</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F <br> D</p>
                                </td>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Períodos</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> A</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Exames</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F <br> D</p>
                                </td>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Períodos</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>P <br> G</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> A</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">Exames</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="2">
                                    <p>C <br> F <br> D</p>
                                </td>
                            </tr>
                            <!-- Segunda mesclagem -->
                            <tr>
                                <!-- Primeira Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º</p>
                                </td>
                                <!-- Segunda Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º</p>
                                </td>
                                <!-- Terceira Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º</p>
                                </td>
                                <!--Nona Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º <br> E</p>
                                </td>
                                <!-- Décima Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º <br> E</p>
                                </td>
                                <!-- Décima-primeira Coluna da segunda mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º <br> E</p>
                                </td>
                                <!-- Primeira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º</p>
                                </td>
                                <!-- Segunda Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º</p>
                                </td>
                                <!-- Terceira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º</p>
                                </td>
                                <!-- Nona Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º <br> E</p>
                                </td>
                                <!-- Décima Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º <br> E</p>
                                </td>
                                <!-- Décima-primeira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º <br> E</p>
                                </td>
                                <!-- Primeira Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º</p>
                                </td>
                                <!-- Segunda Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º</p>
                                </td>
                                <!-- Terceira Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º</p>
                                </td>
                                <!-- Nona Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>1º <br> E</p>
                                </td>
                                <!-- Décima Coluna da segunda mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>2º <br> E</p>
                                </td>
                                <!-- Décima-primeira Coluna da segunda mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p>3º <br> E</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Segunda Linha -> Componente Sócio-Cultural -->
                        <tr>
                            <td colspan="1" rowspan="4">
                                <p class="text-center">Componente <br><br> Sócio-Cultural</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Português</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Inglês / Francês</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Formação de Atitudes Integradoras</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Educação Física</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="5">
                                <p class="text-center">Componente <br><br> Científica</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Matemática</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Física e Química</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Física</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Electrotecnia</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Organização e Gestão Industrial</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="5">
                                <p class="text-center">Componente <br> Técnica <br> Tecnológica <br> e <br>Prática</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Técnicas e Linguagens de Programação</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Técnicas de Rep. de Equip. Informáticos</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Sistemas de Exploração e Arqu. de Computadores</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Tecnologias de Informação e Comunicação</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Projecto Tecnológico</p>
                            </td>
                            <!-- (1/12 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 1) -->

                            <!-- (1/12 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 2) -->

                            <!-- (1/12 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (12/12 - 3) -->
                        </tr>
                        </tbody>
                        <tfoot>
                            <!-- Primeira linha do rodapé da tabela -->
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <b>Situação Final do Aluno b)</b>
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                            </tr>
                            <!-- Segunda linha do rodapé da tabela -->
                            <tr>
                                <td colspan="2">
                                    <p>
                                        <b>O Coordenador do Curso</b>
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                                <td colspan="12">
                                    <p>
                                        
                                    </p>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </section>

                <!------------------------------------------------------------------------------------->
                <!------------------------------- x Texto descritivo x -------------------------------->
                <!------------------------------------------------------------------------------------->

                <section class="section-texto-descritivo mt-10">
                    <div class="section-texto-descritivo-div-1">
                        <p class="text-center"><b>Relação de faltas por Disciplina, Classes e Períodos</b></p>
                    </div>
                    <div class="section-texto-descritivo-div-1 d-flex justify-content-center">
                        <p class="mr-5"><b> ____.ª Classe / Ano Lectivo ____ </b></p>
                        <p class="mr-5"><b> ____.ª Classe / Ano Lectivo ____ </b></p>
                        <p><b> ____.ª Classe / Ano Lectivo ____ </b></p>
                        
                    </div>
                </section>

                <!------------------------------------------------------------------------------------->
                <!----------------------------------- x Tabela 3 x ------------------------------------>
                <!------------------------------------------------------------------------------------->
                <section class="section-table-ficha-biografica mt-40">
                    <table>
                        <thead>
                            <!-- Primeira linha -->
                            <tr>
                                <!-- Primeira Coluna da primeira linha -->
                                <td colspan="2" rowspan="2" class="text-uppercase">
                                    <p class="text-center separate"><b>Disciplinas</b></p>
                                </td>
                                <!-- Segunda Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">1º Período</p>
                                </td>
                                <!-- Terceira Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">2º Período</p>
                                </td>
                                <!-- Quarta Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">3º Período</p>
                                </td>
                                <!-- Quinta Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">1º Período</p>
                                </td>
                                <!-- Sexta Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">2º Período</p>
                                </td>
                                <!-- Sétima Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">3º Período</p>
                                </td>
                                <!-- Oitava Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">1º Período</p>
                                </td>
                                <!-- Nona Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">2º Período</p>
                                </td>
                                <!-- Décima Coluna da primeira linha -->
                                <td colspan="3" rowspan="1">
                                    <p class="text-center">3º Período</p>
                                </td>
                                <td class="border-bottom-none pt-0" colspan="9" rowspan="15">
                                    <p class="text-center px-10">Observação:</p>
                                </td>
                            </tr>
                            <!-- Primeira mesclagem -->
                            <tr>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Nona Coluna da primeira mesclagem (Coluna 1/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Nona Coluna da primeira mesclagem (Coluna 2/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Primeira Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Segunda Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Terceira Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Quarta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Quinta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Sexta Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                                <!-- Sétima Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">J</p>
                                </td>
                                <!-- Oitava Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">I</p>
                                </td>
                                <!-- Nona Coluna da primeira mesclagem (Coluna 3/3) -->
                                <td colspan="1" rowspan="1">
                                    <p class="text-center">T</p>
                                </td>
                        </thead>
                        <tbody>
                            <!-- Segunda Linha -> Componente Sócio-Cultural -->
                        <tr>
                            <td colspan="1" rowspan="4">
                                <p class="text-center">Componente <br><br> Sócio-Cultural</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Português</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Inglês / Francês</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Formação de Atitudes Integradoras</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Educação Física</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="5">
                                <p class="text-center">Componente <br><br> Científica</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Matemática</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Física e Química</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Física</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Electrotecnia</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Organização e Gestão Industrial</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="5">
                                <p class="text-center">Componente <br> Técnica <br> Tecnológica <br> e <br>Prática</p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p>Técnicas e Linguagens de Programação</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Técnicas de Rep. de Equip. Informáticos</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Sistemas de Exploração e Arqu. de Computadores</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Tecnologias de Informação e Comunicação</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p>Projecto Tecnológico</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>
                        </tbody>
                    </table>
                </section>

                <!------------------------------------------------------------------------------------->
                <!------------------------------- x Texto descritivo x -------------------------------->
                <!------------------------------------------------------------------------------------->

                <section class="section-texto-descritivo mt-10 d-flex">
                    <div class="section-texto-descritivo-final-div-1">
                        <p class="mb-3">Tema do Projecto Tecnológico ____________________________________________________________________________ </p>
                        <p class="mb-3">Prova de Aptidão Profissional Realizada em ____/____/_____ com __________(_____________________) Valores</p>
                        <p class="mb-3">Concluiu o Curso em ____/____/_____ com __________(_____________________) Valores</p>
                        <p>Diploma requerido em ____/____/_____ e obtido em ____/____/_____ Livro de Registo _______ Folha _______</p>
                    </div>
                    <div class="section-texto-descritivo-final-div-2">
                        <p class="mb-3">Visitas de Estudo / Estágios ________________________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ____/____/_____ </p>
                        <p class="mb-3">_______________________________________________________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ____/____/_____</p>
                        <p class="mb-3">Inserção na Vida Activa _________________________________________________________________________</p>
                        <p>Outras Informações ___________________________________________________________________________ </p>
                        
                    </div>
                </section>

                <!------------------------------------------------------------------------------------->
                <!------------------------------- x Texto descritivo Como Rodapé x -------------------------------->
                <!------------------------------------------------------------------------------------->

                <section class="section-texto-descritivo mt-10 d-flex">
                    <div class="section-texto-descritivo-como-rodape">
                        <p class="mb-3">Legenda: J - Justificada; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I - Injustificada; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T - Total</p>
                    </div>
                </section>
            </div>
    </section>
    
</main>
@endsection