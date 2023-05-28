@extends('layouts.main')
@section('title', 'Perfil de usuario')
@section('conteudo')
<main id="main" class="main">
  	
      <!-- /	Titulo-->  	
     <div class="pagetitle">
     <div class="row">
       <div class="col">
    
       </div>
       
       <div class="col-lg-4" style="display: flex; justify-content: flex-end; align-items: center;">
         <span class="breadcrumb">
           <h1>Perfil de usuário</h1> 
         </span>      
       </div>
     </div>
   </div>

   <section class="section perfil">
     <div class="row">
       <div class="col-xl-4">

         <div class="card">
           <div class="card-body perfil-card pt-4 d-flex flex-column align-items-center">

             <img src={{URL::asset("img/foto-perfil.jpg")}} alt="perfil" class="l">
             <h2>Domingos Agostinho</h2>
             <h3>Subdiretor Pedagógico</h3>
           </div>
           <hr id="borda-nome">
         </div>

       </div>

       <div class="col-xl-8">

         <div class="card">
           <div class="card-body pt-3">
             <!-- Bordered Tabs -->
             <ul class="nav nav-tabs nav-tabs-bordered">

               <li class="nav-item">
                 <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#dados">Vista geral</button>
               </li>

               <li class="nav-item">
                 <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit-perfil">Editar perfil</button>
               </li>

               <li class="nav-item">
                 <button class="nav-link" data-bs-toggle="tab" data-bs-target="#alterar-senha">Alterar Senha</button>
               </li>

             </ul>
             <div class="tab-content pt-2">

               <div class="tab-pane fade show active dados" id="dados">
                 <h5 class="card-title">Sobre</h5>
                 <p class="small">Funcionário do Intituto médio politécnico nocargo de Subdiretor Pedagógico há 12 anos, lecionou as disciplinas de: Física, Inglês e Matemática no curso de Informática todas as classes.</p>

                 <h5 class="card-title">Informações sobre o usuario</h5>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Nome completo</div>
                   <div class="col-lg-8 col-md-8">Domingos Agostinho</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Genêro</div>
                   <div class="col-lg-8 col-md-8">Masculino</div>
                 </div>


                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Data de nascimento</div>
                   <div class="col-lg-8 col-md-8">02/02/2023</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Nº BI</div>
                   <div class="col-lg-8 col-md-8">0000000KJ000098</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">E-mail</div>
                   <div class="col-lg-8 col-md-8">domingosagostinho@exemplo.com</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Nº de telefone</div>
                   <div class="col-lg-8 col-md-8">90909090 / 090909090</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Cargo</div>
                   <div class="col-lg-8 col-md-8">Subdiretor pedagógico</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Endereço</div>
                   <div class="col-lg-8 col-md-8">Casa nº 2322, Rua Qualquer, Luanda, Luanda Angola</div>
                 </div>

               </div>

               <div class="tab-pane fade perfil-edit pt-3" id="edit-perfil">

                 <!-- perfil Edit Form -->
                 <form>
                   <div class="row mb-3">
                     <label for="foto-perfil" class="col-md-4 col-lg-4 col-form-label">Foto</label>
                     <div class="col-md-8 col-lg-8">
                       <div class="pt-2">
                            <form>
                                <label for="foto-perf"><span class="btn btn-warning btn-sm" title="Atualizar foto de perfil"><i class="bi bi-upload"></i></span></label>
                                <input type="file" id="foto-perf" hidden>
                            </form>
                       </div>
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="sobre" class="col-md-4 col-lg-4 col-form-label">Sobre</label>
                     <div class="col-md-8 col-lg-8">
                       <textarea class="form-control" id="sobre" style="height: 100px">Funcionário do Intituto médio politécnico nocargo de Subdiretor Pedagógico há 12 anos, lecionou as disciplinas de: Física, Inglês e Matemática no curso de Informática todas as classes..</textarea>
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="nomeComp" class="col-md-4 col-lg-4 col-form-label">Nome Completo</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" class="form-control" id="nomeComp" value="Domingos Agostinho">
                     </div>
                   </div>


                   <div class="row mb-3">
                     <label for="genero" class="col-md-4 col-lg- col-form-label">Gênero</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" readonly="true" disabled class="form-control" id="genero" value="Masculino">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="dtNascimento" class="col-md-4 col-lg-4 col-form-label">Data de nascimento</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" class="form-control" id="dtNascimento" value="02/02/2023">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="nBI" class="col-md-4 col-lg-4 col-form-label">Nº BI</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" class="form-control" id="nBI" value="0000000KJ000098">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="Email" class="col-md-4 col-lg-4 col-form-label">E-mail</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" class="form-control" id="Email" value="domingosagostinho@exemplo.com">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="Telefone1" class="col-md-4 col-lg-4 col-form-label">Nº telefone1</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" class="form-control" id="Telefone1" value="90909090">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="Telefone2" class="col-md-4 col-lg-4 col-form-label">Nº telefone2</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="email" class="form-control" id="Telefone2" value="090909090">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="Cargo" class="col-md-4 col-lg-4 col-form-label">Cargo</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" class="form-control" id="Cargo" value="Subdiretor pedagógico">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="Endereco" class="col-md-4 col-lg-4 col-form-label">Endereço</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" class="form-control" id="Endereco" value="Casa nº 2322, Rua Qualquer, Luanda, Luanda Angola">
                     </div>
                   </div>

                   <div class="text-center">
                     <button type="submit" class="btn" style="margin-top: 10px; background-color: #174183; color: #fff;">Atualizar Dados</button>
                   </div>
                 </form><!-- End perfil Edit Form -->

               </div>

               <div class="tab-pane fade pt-3" id="alterar-senha">
                 <!-- Change Password Form -->
                 <form>

                   <div class="row mb-3">
                     <label for="SenhaAtual" class="col-md-4 col-lg-3 col-form-label">Senha atual</label>
                     <div class="col-md-8 col-lg-9">
                       <input type="password" class="form-control" id="SenhaAtual">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="NovaSenha" class="col-md-4 col-lg-3 col-form-label">Nova senha</label>
                     <div class="col-md-8 col-lg-9">
                       <input type="password" class="form-control" id="NovaSenha">
                     </div>
                   </div>

                   <div class="row mb-3">
                     <label for="ConfSenha" class="col-md-4 col-lg-3 col-form-label">Repetir a senha</label>
                     <div class="col-md-8 col-lg-9">
                       <input type="password" class="form-control" id="ConfSenha">
                     </div>
                   </div>

                   <div class="text-center">
                     <button type="submit" class="btn" style="margin-top: 10px; background-color: #174183; color: #fff;">Alterar Senha</button>
                   </div>
                 </form><!-- End Change Password Form -->

               </div>

             </div><!-- End Bordered Tabs -->

           </div>
         </div>

       </div>
     </div>
   </section>
 
 </main>
 @endsection