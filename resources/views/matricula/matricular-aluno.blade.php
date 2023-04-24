@extends('layouts.main')

@section('title', 'Matricular Aluno')

@section('conteudo')
<main id="main" class="main" >

<form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
</form>
<div class="tab">     
    <div class="container">
        <div class="row">

       
        
    <form id="regFormh" action="" class="formulario-layout">
            
        <div class="col" style="margin-top: 0px;margin-bottom: 11px; margin-left: 70px;">
          <div style="margin-right: auto;margin-left: auto;width: 350px;"><strong style="font-size: 26px;">DADOS DO INSTITUTO</strong></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col d-flex" style="margin-bottom: 11px;">
                <div class= "d-flex"style="width: 246px;margin-right: auto;margin-left: auto">
                <input class=" form-control" type="text" style="border: 1px solid var(--bs-gray-400);border-top-left-radius: 9px;border-bottom-left-radius: 11px;padding-right: 0px;padding-left: 22px;padding-bottom: 3px;padding-top: 3px;font-size: 16px;height: 31px;" placeholder="Código de inscrição" required="" minlength="8" maxlength="8" pattern="number" > <i class="fas fa-search" style=" margin-left: -1px;font-size: 18px;color: var(--bs-gray-100);background: var(--bs-black);padding-left: 8px;padding-right: 8px;padding-top: 6px;padding-bottom: 6px;border-bottom-right-radius: 6px;border-top-right-radius: 6px;margin-top: 0px;"></i>
            </div>
            </div>
        </div>


            <div class="row" style="margin-bottom: 10px;">
                <div class="col" style="border-width: 2px;margin-bottom: 0px;height: 35px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);" name="nome" placeholder="Nome completo" oninput="this.className = ''"></div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 col-xxl-4" style="margin-bottom: 8px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);margin-bottom: 0px;" name="turno" placeholder="Turno" oninput="this.className = ''"></div>
                <div class="col-12 col-lg-4 col-xxl-4" style="margin-bottom: 8px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);margin-bottom: 0px;" name="turma" placeholder="Turma" oninput="this.className = ''"></div>
                <div class="col-12 col-lg-4 col-xxl-4" style="margin-bottom: 8px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);margin-bottom: 0px;" name="numero_aluno" placeholder="Número do Aluno" oninput="this.className = ''"></div>
            </div>

            <div class="row" style="margin-bottom: 3px;margin-top: 0px;">
                <div class="col-xl-7" style="margin-bottom: 8px;height: 100%;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);margin-bottom: 0px;" name="numero_processo" placeholder="Número de processo" oninput="this.className = ''"></div>
                <div class="col" style="margin-top: 0px;margin-bottom: 7px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);" name="ano_letivo" placeholder="Ano lectivo" oninput="this.className = ''"></div>
            </div>

            <div class="row" style="margin-bottom: 5px;margin-top: 0px;">
                <div class="col-sm-7 col-xl-6" style="margin-top: 0px;height: 35px;margin-bottom: 8px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);" name="sala" placeholder="Sala" oninput="this.className = ''"></div>
                <div class="col" style="margin-bottom: 8px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);text-align: center;" name="classe" placeholder="Classe" oninput="this.className = ''"></div>
            </div>

            <div class="row" style="margin-bottom: 36px;">
                <div class="col" style="margin-top: 5px;margin-bottom: 30px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;border-width: 1px;border-left-width: 1px;border-left-color: var(--bs-gray-400);text-align: center;" name="curso" placeholder="Curso" oninput="this.className = ''"></div>
            </div>
            
            </div>
            </div>
        
    </form>
</div>
   
<div class="tab"> 
    <div class="container">
        <form id="regFormh" action="" class="formulario-layout">
            <div class="row">
                <div class="col" style="margin-top: 5px;margin-bottom: 11px;">
                    <div style="margin-right: auto;margin-left: auto;width: 450px;"><strong style="font-size: 26px;">CONFIRME OS DADOS&nbsp; PESSOAIS</strong></div>
                </div>
            </div>
                
                   
            <div class="row" style="margin-bottom: 5px;">
                <div class="col" style="border-width: 2px;margin-bottom: 0px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 21px;border-width: 1px;border-left-width: 1px;" placeholder="Nome completo do aluno" name="nome_completo"  oninput="this.className = ''"></div>
            </div>

            <div class="row" style="margin-bottom: 5px;">
                <div class="col" style="border-width: 2px;margin-bottom: 0px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 21px;border-width: 1px;" placeholder="Nome completo do Pai" name="completo_pai" oninput="this.className = ''"></div>
            </div>

            <div class="row" style="margin-bottom: 5px;">
                <div class="col" style="border-width: 2px;margin-bottom: 0px;"><input class="form-control" type="text" data-bss-hover-animate="tada" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 21px;border-width: 1px;" placeholder="Nome completo da Mãe" name="completo_mae" oninput="this.className = ''"></div>
            </div>

            <div class="row">
                <div class="col-lg-6"><input class="form-control" type="date" style="font-size: 21px;border-radius: 7px;border-style: solid;border-color: var(--bs-gray-400);margin-bottom: 5px;" name="data_nascimento"></div>
                <div class="col-lg-1" style="margin-top: 0px;padding-top: 0px;border-radius: 8px;margin-left: 0px;border-width: 1px;border-color: var(--bs-gray-400);margin-bottom: 5px;">
                    <div style="border-radius: 8px;border: 1px solid var(--bs-gray-400);width: 100%;height: 100%;padding-top: 8px;padding-left: 15px;"><span style="font-size: 21px;text-align: center;color: var(--bs-secondary);">00</span></div>
                </div>

                <div class="col-lg-5" style="margin-bottom: 5px;"><input class="form-control" type="text" style="font-size: 21px;border: 1px solid var(--bs-gray-400);text-align: center;" placeholder="Naturalidade" name="naturalidade" oninput="this.className = ''"></div>
            </div>

            <div class="row" style="margin-bottom: 3px;margin-top: 3px;">
                <div class="col-lg-12" style="height: 42px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;text-align: left;font-size: 21px;border-width: 1px;border-color: var(--bs-gray-400);border-left-width: 1px;border-left-color: var(--bs-gray-400);" placeholder="Morada" oninput="this.className = ''"></div>
            </div>

            <div class="row" style="margin-bottom: 9px;">
                <div class="col-lg-5">
                    <div class="d-flex">
                        <div style="width: 115.2969px;"><span style="margin-left: 7px;font-size: 18px;color: var(--bs-gray-400);">SEXO</span></div>
                        <div class="d-flex">
                            <div style="margin-right: 52px;margin-left: 0px;font-size: 17px;width: 115.8125px;"><input type="radio" id="masculino" name="genero" checked style="width: 26px;"><label class="form-label"for="masculino" style="width: 61.6562px;"><strong>MASCULINO</strong></label></div>
                            <div style="font-size: 18px;width: 168px;margin-right: 0px;margin-left: 0px;"><input type="radio" id="feminino" name="genero" style="margin-left: 22px;width: 18px;font-size: 17px;"><label class="form-label"for="feminino" style="font-weight: bold;font-size: 18px;margin-left: 6px;">FEMENINO</label></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="d-flex" style="margin-left: 0px;padding-left: 1px;border: 1px solid var(--bs-gray-400);border-left: 1px solid var(--bs-gray-400);border-radius: 7px;padding-top: 0px;margin-bottom: 8px;"><input class="form-control" type="text" style="border-width: 0px;border-left-width: 0px;border-radius: 13px;height: 31px;width: 100%;text-align: center;font-size: 21px;" placeholder="Número do bilhete de identidade" name="numero_bi" oninput="this.className = ''"></div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 55px;margin-top: 0px;">
                <div class="col-lg-5">
                    <div class="d-flex" style="width: 373px;padding-left: 0px;">
                        <div class="d-flex">
                            <div style="width: 119.297px;">
                                <div style="width: 48.2969px;"><label class="form-label" style="margin-top: 7px;color: var(--bs-gray-500);">+244</label></div>
                            </div>
                            <div style="margin-right: 35px;margin-left: -70px;font-size: 17px;width: 165.8125px;"><input class="form-control" type="text" style="width: 195.812px;" name="numero_telefone" oninput="this.className = ''"></div>
                        </div>
                        <div><i class="fas fa-plus-circle" style="width: 64px;margin-top: 10px;font-size: 27px;"></i></div>
                    </div>
                </div>
            </div>
           
        </form>
    </div>
</div>     
<div class="tab">     
    <div class="container">
        <form id="regFormh" action="" class="formulario-layout">
            <div class="row">
                <div class="col" style="margin-top: 5px;margin-bottom: 11px;width: 963px;">
                    <div style="margin-right: auto;margin-left: auto;width: 423px;text-align: center;"><strong style="font-size: 26px;">CONFIRME OS DADOS DA ESCOLA DE PROVIDÊNCIA</strong></div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 0px;">
                <div class="col" style="border-width: 2px;margin-bottom: 5px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 21px;border: 1px solid var(--bs-gray-400) ;" placeholder="Nome da escola de providência" name="nome_escola_providencia" oninput="this.className = ''"></div>
            </div>
            <div class="row" style="margin-bottom: 5px;">
                <div class="col" style="margin-bottom: 5px;"><input class="form-control" type="text" placeholder="Turno" style="border-style: solid;border-color: var(--bs-gray-400);border-radius: 8px;font-size: 21px;" name="turno" oninput="this.className = ''"></div>
                <div class="col-lg-2" style="border-width: 2px;margin-bottom: 5px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 20px;border: 1px solid var(--bs-gray-400);" placeholder="Nº de aluno" name="numero_aluno" oninput="this.className = ''"></div>
                <div class="col" style="border-width: 2px;margin-bottom: 5px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 21px;border: 1px solid var(--bs-gray-400) ;" placeholder="Turma" name="turma" oninput="this.className = ''"></div>
            </div>
            <div class="row" style="margin-bottom: 5px;">
                <div class="col" style="border-width: 2px;margin-bottom: 5px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 21px;border: 1px solid var(--bs-gray-400) ;" placeholder="Número do Processo" name="numero_processo" oninput="this.className = ''"></div>
            </div>
            <div class="row" style="margin-bottom: 5px;">
                <div class="col" style="border-width: 2px;margin-bottom: 57px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 21px;text-align: center;border: 1px solid var(--bs-gray-400) ;" placeholder="Ano lectivo" name="ano_lectivo" oninput="this.className = ''"></div>
            </div>
            </div>
           
        </form>
</div>
   
<div class="tab"> 
    <div class="container">
        <section>
            <form id="regFormh" action="" class="formulario-layout">
                <section>
                    <div class="row">
                        <div class="col" style="margin-top: 5px;margin-bottom: 11px;">
                            <div style="margin-right: auto;margin-left: auto;width: 430px;"><strong style="font-size: 26px;">CONFIRME OS DADOS PESSOAIS</strong></div>
                        </div>
                        <div class="row" style="margin-bottom: 5px;">
                        <div class="col" style="border-width: 2px;margin-bottom: 0px;"><input class="form-control" type="email" placeholder="E-Mail do Aluno" name="email"></div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col" style="border-width: 2px;margin-bottom: 0px;"><input class="form-control" type="text" style="border-radius: 8px;height: 100%;width: 100%;margin-top: 0px;margin-bottom: 0px;font-size: 16px;border-width: 1px;" placeholder="user_name" name="user_name" oninput="this.className = ''"></div>
                    </div>

                    <div class="row" style="margin-bottom: 5px;position: relative;">
                        <div class="col" style="border-width: 2px;margin-bottom: 0px;overflow: visible;position: static;">
                            <div class="d-flex flex-row"><input class="form-control" type="password" style="position: relative;" placeholder="Password" name="password">
                                <div style="margin-left: 3px;border: 1px solid var(--bs-gray-400);border-radius: 6px;width: 40px;padding-left: 5px;padding-top: 6px;"><i class="far fa-eye" style="font-size: 24px;"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 5px;margin-top: 0px;">
                        <div class="col-lg-4" style="width: 400px;">
                            <div class="row" style="width: 400px;">
                                <div class="col-lg-11" style="width: 400px;">
                                    <div class="d-flex" style="width: 373px;padding-left: 0px;margin-bottom: 11px;">
                                        <div><select class="form-select" style="border-radius: 8px;border-style: solid;border-color: var(--bs-gray-400);">
                                                <optgroup label="Familiares">
                                                    <option value="12" selected="">Pai</option>
                                                    <option value="13">Mãe</option>
                                                    <option value="14">Outro</option>
                                                </optgroup>
                                            </select></div>
                                        <div class="d-flex">
                                            <div style="width: 119.297px;">
                                                <div style="width: 48.2969px;"><label class="form-label" style="margin-top: 7px;color: var(--bs-gray-500);">+244</label></div>
                                            </div>
                                            <div style="margin-right: 17px;margin-left: -70px;font-size: 17px;width: 165.8125px;"><input class="form-control" type="text" style="width: 176.812px;" name="numero_telefone_pai" placeholder="telefone-1" oninput="this.className = ''"></div>
                                        </div>
                                        <div><i class="fas fa-plus-circle" style="width: 49px;margin-top: 4px;font-size: 27px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;margin-top: 0px;">
                        <div class="col-lg-5 col-xxl-4" style="width: 400px;">
                            <div class="row" style="width: 400px;">
                                <div class="col-xxl-12" style="width: 400px;">
                                    <div class="d-flex" style="width: 373px;padding-left: 0px;margin-bottom: 11px;">
                                        <div><select class="form-select" style="border-radius: 8px;border-style: solid;border-color: var(--bs-gray-400);">
                                                <optgroup label="Familiares">
                                                    <option value="12" selected="">Pai</option>
                                                    <option value="13" selected="">Mãe</option>
                                                    <option value="14">Outro</option>
                                                </optgroup>
                                            </select></div>
                                        <div class="d-flex">
                                            <div style="width: 119.297px;">
                                                <div style="width: 48.2969px;"><label class="form-label" style="margin-top: 7px;color: var(--bs-gray-500);">+244</label></div>
                                            </div>
                                            <div style="margin-right: 17px;margin-left: -70px;font-size: 17px;width: 165.8125px;"><input class="form-control" type="text" style="width: 176.812px;" name="numero_telefone_mae" placeholder="telefone-1" oninput="this.className = ''"></div>
                                        </div>
                                        <div>
                                            <div><i class="fas fa-plus-circle" style="width: 49px;margin-top: 4px;font-size: 27px;"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-lg-5 col-xl-4 col-xxl-4" style="width: 400px;">
                            <div class="d-flex" style="width: 373px;padding-left: 0px;margin-bottom: 11px;">
                                <div><select class="form-select" style="border-radius: 8px;border-style: solid;border-color: var(--bs-gray-400);width: 92px;">
                                        <optgroup label="Familiares">
                                            <option value="12" selected="">Pai</option>
                                            <option value="13" selected="">Mãe</option>
                                            <option value="14" selected="">Outro</option>
                                        </optgroup>
                                    </select></div>
                                <div class="d-flex">
                                    <div style="width: 119.297px;">
                                        <div style="width: 48.2969px;"><label class="form-label" style="margin-top: 7px;color: var(--bs-gray-500);">+244</label></div>
                                    </div>
                                    <div style="margin-right: 17px;margin-left: -70px;font-size: 17px;width: 165.8125px;"><input class="form-control" type="text" style="width: 176.812px;" name="numero_telefone1" placeholder="999-999-999" oninput="this.className = ''"></div>
                                </div>
                                <div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-xxl-4" style="margin-bottom: 5px;">
                            <div class="d-flex" style="width: 264px;">
                                <div style="width: 43.297px;">
                                    <div style="width: 48.2969px;"><label class="form-label" style="margin-top: 7px;color: var(--bs-gray-500);width: 37.8281px;">+244</label></div>
                                </div>
                                <div style="margin-right: 0px;margin-left: 0px;font-size: 17px;width: 165.8125px;"><input class="form-control" type="text" style="width: 176.812px;" name="numero_telefone2" placeholder="999-999-999" oninput="this.className = ''"></div>
                            </div>
                        </div>
                        <div class="col-xl-4" style="margin-left: 0px;">
                            <div class="d-flex" style="width: 264px;">
                                <div style="width: 41.297px;">
                                    <div style="width: 48.2969px;"><label class="form-label" style="margin-top: 7px;color: var(--bs-gray-500);">+244</label></div>
                                </div>
                                <div style="margin-right: 0px;margin-left: 0px;font-size: 17px;width: 165.8125px;"><input class="form-control" type="text" style="width: 176.812px;" name="numero_telefone3" placeholder="999-999-999" oninput="this.className = ''"></div>
                            </div>
                        </div>
                   
                </section>
            </form>
        </section>
    </div>
</div> 
<div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
    </main>