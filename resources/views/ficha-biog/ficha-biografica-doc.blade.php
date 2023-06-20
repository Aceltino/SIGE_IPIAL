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
                        Nome <u> _____________________________________________________________________</u> Filho de <u>___________________________________________________________________</u> 
                    </p>
                    <p class="second-p-div-personal-data">
                        e de <u>___________________________________________________________________________________________________</u> 
                        Natural de <u>___________________________</u> Nascido aos <u>_____/_____/_______</u> 
                        BI Nº <u>___________________________</u>
                    </p>
                    <p class="third-p-div-personal-data">
                        Telefone pessoal <u>___________________________________</u> 
                        parente/grau <u>_____________/__________________________________________________</u>  
                        Morada <u>_____________________________________________</u>
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
                            <td colspan="2" rowspan="2" class="text-uppercase">
                                <p class="text-center separate" style="font-family: Arial !important;"><b>Disciplinas</b></p>
                            </td>
                            <!-- Segunda Coluna da primeira linha -->
                            <td colspan="9" rowspan="1" class="px-2 bg-light-gray">
                                <p class="my-2">____________ª Classe; Turma _____________ Nº ________</p>
                                <p class="mb-2">Ano Lectivo _______</p>
                            </td>
                            <!-- Terceira Coluna da primeira linha -->
                            <td colspan="9" rowspan="1" class="px-2 bg-light-pink">
                                <p>____________ª Classe; Turma _____________ Nº ________</p>
                                <p class="mt-2">Ano Lectivo _______</p>
                            </td>
                            <!-- Quarta Coluna da primeira linha -->
                            <td colspan="9" rowspan="1" class="px-2 bg-yellow">
                                <p>____________ª Classe; Turma _____________ Nº ________</p>
                                <p class="mt-2">Ano Lectivo _______</p>
                            </td>
                        </tr>
                        <!-- Primeira mesclagem -->
                        <tr class="fonte-size-10px">
                            <!-- Primeira Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>1</sub></p>
                            </td>
                            <!-- Segunda Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>2</sub></p>
                            </td>
                            <!-- Terceira Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CF</p>
                            </td>
                            <!-- Quarta Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">PG</p>
                            </td>
                            <!-- Quinta Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CA</p>
                            </td>
                            <!-- Sexta Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center text-faltas">Faltas</p>
                            </td>
                            <!-- Sétima Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>1</sub></p>
                            </td>
                            <!-- Oitava Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>2</sub></p>
                            </td>
                            <!-- Nona Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CFD</p>
                            </td>
                            <!-- Primeira Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>1</sub></p>
                            </td>
                            <!-- Segunda Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>2</sub></p>
                            </td>
                            <!-- Terceira Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CF</p>
                            </td>
                            <!-- Quarta Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">PG</p>
                            </td>
                            <!-- Quinta Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CA</p>
                            </td>
                            <!-- Sexta Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center text-faltas">Faltas</p>
                            </td>
                            <!-- Sétima Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>1</sub></p>
                            </td>
                            <!-- Oitava Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>2</sub></p>
                            </td>
                            <!-- Nona Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CFD</p>
                            </td>
                            <!-- Primeira Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>1</sub></p>
                            </td>
                            <!-- Segunda Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>2</sub></p>
                            </td>
                            <!-- Terceira Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CF</p>
                            </td>
                            <!-- Quarta Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">PG</p>
                            </td>
                            <!-- Quinta Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CA</p>
                            </td>
                            <!-- Sexta Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center text-faltas">Faltas</p>
                            </td>
                            <!-- Sétima Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>1</sub></p>
                            </td>
                            <!-- Oitava Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>2</sub></p>
                            </td>
                            <!-- Nona Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CFD</p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Segunda Linha -> Componente Sócio-Cultural -->
                        <tr>
                            <td colspan="1" rowspan="4" class="bg-dark-pink">
                                <p class="text-center">Componente<br>Sócio<br>Cultural</p>
                            </td>
                            <td colspan="1" rowspan="1" class="bg-dark-pink">
                                <p>Português</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-pink">
                                <p>Inglês</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-pink">
                                <p>Formação de Atitudes Integradoras</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-pink">
                                <p>Educação Física</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="5" class="bg-dark-gray">
                                <p class="text-center">Componente<br>Científica</p>
                            </td>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Matemática</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Química</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Física</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Electrotecnia</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Organização e Gestão Industrial</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Técnica Tecnológica e Prática -->
                        <tr>
                            <td colspan="1" rowspan="7" class="bg-orange">
                                <p class="text-center">Componente<br>Técnica<br>Tecnológica<br>e<br>Prática</p>
                            </td>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Empreendedorismo</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>
                        
                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Desenho Técnico</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Técnicas e Linguagens de Programação</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Técnicas e Reparação de Eq. Informát.</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Sistemas de Explor. e Arq. de Comp.</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Sexta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Tecnologias de Inform. e Comunicação</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Sétima Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Projecto Tecnológico</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px bg-darkest-gray">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>
                    </tbody>
                    <tfoot>
                        <!-- Primeira linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p>
                                    Situação final do aluno a)
                                </p>
                            </td>
                            <td colspan="9">
                                <p>
                                    
                                </p>
                            </td>
                            <td colspan="9">
                                <p>
                                    
                                </p>
                            </td>
                            <td colspan="9">
                                <p>
                                    
                                </p>
                            </td>
                        </tr>
                        <!-- Segunda linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p>
                                    O director de turma
                                </p>
                            </td>
                            <td colspan="9">
                                <p>
                                    
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                ___/___/____
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                ___/___/____
                                </p>
                            </td>
                        </tr>
                        <!-- Terceira linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p>
                                    O coordenador do curso
                                </p>
                            </td>
                            <td colspan="9">
                                <p>
                                    
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    ___/___/____
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    ___/___/____
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
                <div class="section-descricao-div-1">
                    <p class="ms-4">a) &nbsp;
                        TRANSITA; NÃO TRANSITA; ANULOU A MATRÍCULA; TRANSFERIDO OU RPF. Legenda: MT-média do 
                        trimestre; CF-classificação de frequência; PG-prova global; CA-classificação anual;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CFD-classificação final de disciplina
                    </p>
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
                            <td colspan="2" rowspan="2" class="text-uppercase">
                                <p class="text-center separate"><b>Disciplinas</b></p>
                            </td>
                            <!-- Segunda Coluna da primeira linha -->
                            <td colspan="9" rowspan="1" class="px-2 bg-light-gray">
                                <p class="my-2">______________ª Classe; Turma _____________ Nº ________</p>
                                <p class="mb-2">Ano Lectivo _______</p>
                            </td>
                            <!-- Terceira Coluna da primeira linha -->
                            <td colspan="9" rowspan="1" class="px-2 bg-light-pink">
                                <p>______________ª Classe; Turma _____________ Nº ________</p>
                                <p class="mt-2">Ano Lectivo _______</p>
                            </td>
                            <!-- Quarta Coluna da primeira linha -->
                            <td colspan="9" rowspan="1" class="px-2 bg-yellow">
                                <p>______________ª Classe; Turma _____________ Nº ________</p>
                                <p class="mt-2">Ano Lectivo _______</p>
                            </td>
                        </tr>
                        <!-- Primeira mesclagem -->
                        <tr class="fonte-size-10px">
                            <!-- Primeira Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>1</sub></p>
                            </td>
                            <!-- Segunda Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>2</sub></p>
                            </td>
                            <!-- Terceira Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CF</p>
                            </td>
                            <!-- Quarta Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">PG</p>
                            </td>
                            <!-- Quinta Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CA</p>
                            </td>
                            <!-- Sexta Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center text-faltas">Faltas</p>
                            </td>
                            <!-- Sétima Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>1</sub></p>
                            </td>
                            <!-- Oitava Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>2</sub></p>
                            </td>
                            <!-- Nona Coluna (Coluna 1/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CFD</p>
                            </td>
                            <!-- Primeira Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>1</sub></p>
                            </td>
                            <!-- Segunda Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>2</sub></p>
                            </td>
                            <!-- Terceira Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CF</p>
                            </td>
                            <!-- Quarta Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">PG</p>
                            </td>
                            <!-- Quinta Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CA</p>
                            </td>
                            <!-- Sexta Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center text-faltas">Faltas</p>
                            </td>
                            <!-- Sétima Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>1</sub></p>
                            </td>
                            <!-- Oitava Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>2</sub></p>
                            </td>
                            <!-- Nona Coluna (Coluna 2/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CFD</p>
                            </td>
                            <!-- Primeira Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>1</sub></p>
                            </td>
                            <!-- Segunda Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">MT<sub>2</sub></p>
                            </td>
                            <!-- Terceira Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CF</p>
                            </td>
                            <!-- Quarta Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">PG</p>
                            </td>
                            <!-- Quinta Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CA</p>
                            </td>
                            <!-- Sexta Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center text-faltas">Faltas</p>
                            </td>
                            <!-- Sétima Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>1</sub></p>
                            </td>
                            <!-- Oitava Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">EX<sub>2</sub></p>
                            </td>
                            <!-- Nona Coluna (Coluna 3/3) -->
                            <td colspan="1" rowspan="1">
                                <p class="text-center">CFD</p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Segunda Linha -> Componente Sócio-Cultural -->
                        <tr>
                            <td colspan="1" rowspan="3" class="bg-dark-pink">
                                <p class="text-center">Componente<br>Sócio<br>Cultural</p>
                            </td>
                            <td colspan="1" rowspan="1" class="bg-dark-pink">
                                <p>Português</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-pink">
                                <p>Inglês</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-pink">
                                <p>Formação de Atitudes Integradoras</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Científica -->
                        <tr>
                            <td colspan="1" rowspan="6" class="bg-dark-gray">
                                <p class="text-center">Componente<br>Científica</p>
                            </td>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Matemática I</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Matemática II</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Química</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Física</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Geometria Descritiva</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Sexta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-dark-gray">
                                <p>Organização e Gestão Industrial</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira linha - Componente Técnica Tecnológica e Prática -->
                        <tr>
                            <td colspan="1" rowspan="5" class="bg-orange">
                                <p class="text-center">Componente<br>Técnica<br>Tecnológica<br>e<br>Prática</p>
                            </td>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Desenho de Projecto</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>
                        
                        <!-- Segunda Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Técnicas de Construção Civil</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Terceira Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Medições e Orçamento</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quarta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Informática Aplicada</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>

                        <!-- Quinta Coluna -->
                        <tr>
                            <td colspan="1" rowspan="1" class="bg-orange">
                                <p>Projecto Tecnológico</p>
                            </td>
                            <!-- (1/9 - 1) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 1) -->

                            <!-- (1/9 - 2) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 2) -->

                            <!-- (1/9 - 3) -->
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <td colspan="1" rowspan="1" class="fonte-size-10px">
                                <p></p>
                            </td>
                            <!-- (9/9 - 3) -->
                        </tr>
                    </tbody>
                    <tfoot>
                        <!-- Primeira linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p class="fw-bold">
                                    Classificação do Plano curricular (CPC)
                                </p>
                            </td>
                            <td colspan="9">
                                <p>
                                    CPC = (ΣCFD)/14
                                </p>
                            </td>
                            <td colspan="18">
                                <p class="text-end">
                                    ___________________
                                    ( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ) 
                                        Valores
                                </p>
                            </td>
                        </tr>
                        <!-- Segunda linha do rodapé da tabela (1/2) -->
                        <tr>
                            <td colspan="2" rowspan="2">
                                <p class="fw-bold">
                                    Prova de aptidão Profissional (PAP)
                                </p>
                            </td>
                            <td colspan="27" rowspan="1">
                                <p class="fw-bold">
                                    Tema do Projecto Tecnológico:
                                </p>
                            </td>
                        </tr>
                        <!-- Segunda linha do rodapé da tabela (1/2) -->
                        <tr>
                            <td colspan="27" rowspan="1">
                                <p class="fw-bold">
                                    Defesa realizada em _____/_____/_______ com ___________________________________
                                    ( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )
                                    Valores
                                </p>
                            </td>
                        </tr>
                        <!-- Terceira linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p class="fw-bold">
                                    Média Final do Curso (MFC)
                                </p>
                            </td>
                            <td colspan="9">
                                <p>
                                    MFC = (2xCPC+ PAP)/3
                                </p>
                            </td>
                            <td colspan="18">
                                <p class="fw-bold">
                                    _____________________________________
                                    ( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                                    Valores &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    _____/_____/_______
                                </p>
                            </td>
                        </tr>
                        <!-- Quarta linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p>
                                    Situação final do aluno b)
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                        </tr>
                        <!-- Quinta linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p>
                                    O director de turma
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                        </tr>
                        <!-- Sexta linha do rodapé da tabela -->
                        <tr>
                            <td colspan="2">
                                <p>
                                    O coordenador do curso
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                            <td colspan="9">
                                <p class="text-end">
                                    _____/_____/_______
                                </p>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </section>

            <!------------------------------------------------------------------------------------->
            <!------------------------------- x Texto descritivo Como Rodapé x -------------------------------->
            <!------------------------------------------------------------------------------------->

            <section class="section-descricao">
                <div class="section-descricao-div-1">
                    <p class="ms-4">a) &nbsp;
                        TRANSITA (CONCLUIU); NÃO TRANSITA; ANULOU A MATRÍCULA; TRANSFERIDO OU RPF. Legenda: MT-média 
                        do trimestre; CF-classificação de frequência; PG-prova global;
                        <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  CA-classificação anual; 
                        CFD-classificação final de disciplina
                    </p>
                </div>
            </section>
        </div>
    </section>

    <section class ="row mt-2" id="section-btn-print">
        <div class="col-2 offset-5">
            <button type="button" class="btn w-100" id="print-button" onclick="window.print();">Imprimir</button>
        </div>
    </section>
    
</main>
<style>*{font-family: Arial !important;}</style>
@endsection