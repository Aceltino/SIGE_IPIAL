@extends('layouts.main')

@section('title', ' Editar Matricula')

@section('conteudo')
<main id="main" class="main" >

<form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:10px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
</form>

<div class="tab">     
    <div class="container-fluid">
         <div class="row" >
            <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                <div style="  text-align: center;">
                    <h2>DADOS DO INSTITUTO</h2>
                </div>

         </div>
         </div>
    <form id="regFormh" action="" class="formulario-layout">



        <div class="row">
            <div class="col d-flex" style="margin-bottom: 10px;">
                <div class= "d-flex"style="width: 246px;margin-right: auto;margin-left: auto">
                <input class=" form-control" type="text" style="border: 1px solid var(--bs-gray-400);border-top-left-radius: 9px;border-bottom-left-radius: 11px;padding-right: 0px;padding-left: 22px;padding-bottom: 3px;padding-top: 3px;font-size: 16px;height: 31px;" placeholder="Código de inscrição" required="" minlength="8" maxlength="8" pattern="number" value=" 358930" > <i class="fas fa-search" style=" margin-left: -1px;font-size: 18px;color: var(--bs-gray-100);background: var(--bs-black);padding-left: 8px;padding-right: 8px;padding-top: 6px;padding-bottom: 6px;border-bottom-right-radius: 6px;border-top-right-radius: 6px;margin-top: 0px;"></i>
            </div>
            </div>
        </div>

        <div class="form-group">
            <input type="text" value="Márcio Celestino" placeholder="Nome Completo do Aluno" name=""  oninput="this.className = ''">
        </div>

            <div class="row">
                
                <div class="col">
                <div class="form-group">
                    <input type="text" value=" Manhã" placeholder="Turno do Aluno" oninput="this.className = ''">
                </div>
                </div>

                <div class="col">
                <div class="form-group">
                    <input type="text" value=" I11AM" placeholder="Turma do Aluno" oninput="this.className = ''">
                </div> 
                </div>

                <div class="col">
                <div class="form-group">
                    <input type="text" value=" 37" placeholder="Nº do Aluno" oninput="this.className = ''">
                </div> 
                </div>
          </div>

            <div class="row">

                <div class="col">
                  <div class="form-group">
                <input type="text"value="  358930" placeholder="Número de processo" oninput="this.className = ''">
                  </div> 
                </div>

                <div class="col">
                 <div class="form-group">
                <input type="text"  value="2023/2022" placeholder="Ano lectivo" oninput="this.className = ''">
                 </div> 
                </div>
            </div>

            <div class="row">

                <div class="col">
                  <div class="form-group">
                <input type="text" value=" 37" placeholder="Sala do Aluno" oninput="this.className = ''">
                  </div> 
                </div>

                <div class="col">
                 <div class="form-group">
                <input type="text" value=" 10ª" placeholder="Classe do aluno" oninput="this.className = ''">
                 </div> 
                </div>
            </div>

        <div class="form-group">
            <input type="text"  style="text-align: center;"  value="Informática" placeholder="Curso do aluno" name="" oninput="this.className = ''">
         </div>

            
            </div>
            </div>
        
    </form>
</div>
   
<div class="tab"> 
    <div class="container">
        <div class="row" >
            <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                <div style="  text-align: center;">
                    <h2>CONFIRME OS DADOS PESSOAIS</h2>
                </div>
            </div>
        </div>
        
        <form id="regFormh" action="" class="formulario-layout">
            <div class="form-group">
            <input type="text" value="Márcio Celestino"placeholder="Nome Completo do aluno" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
            <input type="text"value="Fulano Fulano " placeholder="Nome Completo do pai" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
            <input type="text" value="Fulana fulana" placeholder="Nome Completo da mãe" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                <div class="col">
                    <p><input type="date" name="data" value="2000-04-01" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" readonly="true" value="23" name="" desable="">
                </div>

                <div class="col">
                    <input type="text" value=" ROCHA" placeholder="Naturalidade" name="" oninput="this.className = ''">
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
                        <input type="text" style="text-align: center;"   value=" 00029920LA93" name="" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
                    </div>
                </div>
             </div>
             
            <div class="row">

                <div class="col-lg-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" value=" 919191919" name="" placeholder="Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div>
            </div>

        </form>
    </div>
</div>  

<div class="tab">     
    <div class="container">
        <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style=" text-align: center;">
                        <h2>CONFIRME OS DADOS DA ESCOLA DE PROVIDÊNCIA</h2>
                    </div>
                </div>
            </div>
        <form id="regFormh" action="" class="formulario-layout">
            
            <div class="row">
                <div class="form-group">
                    <input type="text" value="Alda lara" placeholder="Nome da escola de proveniência" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input type="text" value=" Manhã" placeholder="Turno" oninput="this.className = ''">
                    </div>
                </div>

                 <div class="col">
                    <div class="form-group">
                        <input type="text" value=" 37" placeholder="Nº do aluno" oninput="this.className = ''">
                    </div>
                 </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" value=" C" placeholder="Turma" oninput="this.className = ''">
                    </div>

                </div>
                
            </div>


            <div class="row">
                <div class=" form-group">
                    <input type="text" value=" 929292929" placeholder=" Número do aluno" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class=" form-group" >
                    <input  style="text-align: center;" type="text" value="2022/2023" placeholder=" Ano letivo" name="" oninput="this.className = ''">
                </div>
                
            </div>
        </form>
    </div>      
</div>

<div class="tab"> 
    <div class="container">
        <div class="row" >
                    <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                        <div style="  text-align: center;">
                            <h2>INFORMAÇÕES IMPORTANTES PARA O INSTITUTO</h2>
                        </div>
                    </div>
                </div>
        <form id="regFormh" action="" class="formulario-layout">
            <div class="form-group">
                <input type="text"  value="email@gmail.com"  placeholder="Digite o E-mail do Aluno" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text"  value="marciocelestino" placeholder="User name" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text"  value="12345" placeholder="Passoword" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                
                <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes"oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai" selected>Pai</option>
                        <option value=" Mãe">Mãe</option>
                        <option Value=" Outro">Outro</option>
                    </select>
                </div>
           

               <div class="col-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" value=" 939293933" name=""  placeholder=" Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div> </div>

             <div class="row">
             <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled >Familiares:</option>
                        <option value="pai" >Pai</option>
                        <option value= " mãe" selected>Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
           

               <div class="col-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" value=" 9399494949" name="" placeholder=" Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div> </div>
             
            <div class="row">

            <div class="col-4 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option  disabled>Familiares:</option>
                        <option value="pai" >Pai</option>
                        <option value="mãe">Mãe</option>
                        <option value="outro" selected>Outro</option>
                    </select>
                </div>
           

               <div class="col-4 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" value=" 94992920" placeholder=" Telefone" oninput="this.className = ''"><i class="bi bi-plus-circle" style=" font-size: 30px; cursor: pointer;"></i> 
                </div>

                
            </div>

        </form>  </div>
</div>  
   
<div style="text-align:center;margin-top:10px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
    </main>
 @endsection