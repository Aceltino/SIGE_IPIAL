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
            
             <!--<img src= {{ URL::asset( isset(Auth::user()->imagem_usuario) ? Auth::user()->imagem_usuario : '' ) }} alt="perfil" class="l">-->

            @if(Auth::user()->imagem_usuario!="")
            	<img src={{ URL::asset(Auth::user()->imagem_usuario) }} alt="perfil" class="l">
            @else
              <img src={{URL::asset("img/foto.jpg")}} alt="perfil" class="l">
            @endif

             <h2>{{ Auth::user()->belongPessoa->nome_completo }}</h2>
             <h3>{{ Auth::user()->cargo_usuario }}</h3>
           </div>
           <hr id="borda-nome">
         </div>

       </div>

       <div class="col-xl-8">

         <div class="card">
           <div class="card-body pt-3">

            @if(session('success'))
              <div class="alert alert-success">
                  {{session('success')}}
              </div>
            @endif
            @if(session('success_imagem_001'))
            <div class="alert alert-success">
                {{session('success_imagem_001')}}
              </div>
            @endif
            @if(session('erro_Update_001'))
              <div class="alert alert-danger">
                  {{session('erro_Update_001')}}
              </div>
            @endif
            @if(session('erro_Update_002'))
              <div class="alert alert-danger">
                  {{session('erro_Update_002')}}
              </div>
            @endif
            @if(session('erro_imagem_001'))
            <div class="alert alert-danger">
                {{session('erro_imagem_001')}}
              </div>
            @endif
            @if(session('erro_imagem_002'))
            <div class="alert alert-danger">
                {{session('erro_imagem_002')}}
              </div>
            @endif
            @if(session('erro_imagem_003'))
            <div class="alert alert-danger">
                {{session('erro_imagem_003')}}
              </div>
            @endif
            @if(session('erro_senha_001'))
              <div class="alert alert-danger">
                {{session('erro_senha_001')}}
              </div>
            @endif
            @if(session('erro_senha_002'))
              <div class="alert alert-danger">
                {{session('erro_senha_002')}}
              </div>
            @endif
            @if(session('success_updatePassword_001'))
              <div class="alert alert-success">
                {{session('success_updatePassword_001')}}
              </div>
            @endif
            
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

                 <h5 class="card-title" style="font-size: 22px; text-align: center; text-transform: uppercase;">Informações sobre o usuario</h5>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Nome completo</div>
                   <div class="col-lg-8 col-md-8">{{ Auth::user()->belongPessoa->nome_completo }}</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Genêro</div>
                   <div class="col-lg-8 col-md-8">{{ Auth::user()->belongPessoa->genero }}</div>
                 </div>


                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Data de nascimento</div>
                   <div class="col-lg-8 col-md-8">{{ Auth::user()->belongPessoa->data_nascimento }}</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Nº BI</div>
                   <div class="col-lg-8 col-md-8">{{ Auth::user()->belongPessoa->num_bi }}</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">E-mail</div>
                   <div class="col-lg-8 col-md-8">{{ Auth::user()->email }}</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Nº de telefone</div>
                   <div class="col-lg-8 col-md-8">{{ Auth::user()->belongPessoa->telefone }}</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Cargo</div>
                   <div class="col-lg-8 col-md-8">{{ Auth::user()->cargo_usuario }}</div>
                 </div>

                 <div class="row">
                   <div class="col-lg-4 col-md-4 label">Endereço</div>
                   @php
                      $endereco = Auth::user()->belongPessoa->belongEndereco;
                   @endphp
                   <div class="col-lg-8 col-md-8">
                    @php 
                      if($endereco==null){
                        echo "Sem Endereço";
                      }else {
                        echo "<strong>Municipio:</strong> ".$municipio= $endereco->municipio;
                        echo " , ";
                        echo "<strong>Bairro:</strong> ".$bairro= $endereco->bairro;
                        echo "<br>";
                        echo "<strong>Zona:</strong> ".$zona= $endereco->zona;
                        echo " , ";
                        echo "<strong>Número da Casa:</strong> ".$numero_casa= $endereco->numero_casa;
                      }  
                    @endphp
                      
                    </div> 
                 </div>

               </div>

               <div class="tab-pane fade perfil-edit pt-3" id="edit-perfil">
                

                <!-- Form Editar perfil -->

                <form action={{ route('perfil-update') }} method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  @csrf
                  @method('PUT')
  
                 <div class="row mb-3">
                   <label for="foto-perfil" class="col-md-4 col-lg-4 col-form-label">Foto</label>
                   <div class="col-md-8 col-lg-8">
                      <!--<img src={{ URL::asset( isset(Auth::user()->imagem_usuario) ? Auth::user()->imagem_usuario : "" ) }} id="img-escolhida">-->
                    
                      @if(Auth::user()->imagem_usuario != "")
                        <img src={{ URL::asset(Auth::user()->imagem_usuario) }} alt="perfil" id="img-escolhida">
                      @else
                        <img src={{URL::asset("img/foto.jpg")}} alt="perfil" id="img-escolhida">
                      @endif
                     <div class="pt-2">
                        <label for="btn-upload"><span class="btn btn-warning btn-sm" title="Atualizar foto de perfil"><i class="bi bi-upload"></i></span></label>
                         <input type="file" id="btn-upload" value="{{old('imagem_update')}}" name="imagem_update" accept="image/*" style="display: none;">
                      </div>
                    </div>
                  </div>
                  @error('imagem_update')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror

                   <div class="row mb-3">
                     <label for="nomeComp" class="col-md-4 col-lg-4 col-form-label">Nome Completo</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" id="letra" name="nome_completo_update" value="{{ Auth::user()->belongPessoa->nome_completo }}" required>
                       <div class="invalid-feedback">Por favor insere o nome completo!</div>
                     </div>
                   </div>
                    @error('nome_completo_update')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                   <div class="row mb-3">
                     <label for="genero" class="col-md-4 col-lg- col-form-label">Gênero</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="radio" id="masculino" name="genero_update" value="Masculino" {{Auth::user()->belongPessoa->genero=='Masculino'? "checked" : ""}} >
                        <label for="masculino" class="me-2"> Masculino</label>
                        <input type="radio" id="feminino" name="genero_update" value="Femenino" {{Auth::user()->belongPessoa->genero=='Femenino'? "checked" : ""}} >
                        <label for="feminino"> Feminino</label>
                     </div>
                   </div>
                   @error('genero_update')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror

                   <div class="row mb-3">
                     <label for="dtNascimento" class="col-md-4 col-lg-4 col-form-label">Data de nascimento</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="date" id="datainput10" name="data_nascimento_update" value="{{ Auth::user()->belongPessoa->data_nascimento }}" required>
                       <div id="mensagem10" style="color: red;"></div>
                       <div class="invalid-feedback">Por favor insere uma data!</div>
                     </div>
                   </div>
                   @error('data_nascimento_update')
                    <div class="alert alert-danger">{{$message}}</div>
                   @enderror

                   <div class="row mb-3">
                     <label for="nBI" class="col-md-4 col-lg-4 col-form-label">Número do BI</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" id="bi_input" name="num_bi_update" value="{{ Auth::user()->belongPessoa->num_bi }}" oninput="this.className = ''" maxlength="14" required>
                       <div id="mensagem1" style="color: red;"></div>
                       <div class="invalid-feedback">Por favor insere um nº de identificação!</div>
                     </div>
                   </div>
                   @error('num_bi_update')
                    <div class="alert alert-danger">{{$message}}</div>
                   @enderror

                   <div class="row mb-3">
                     <label for="Email" class="col-md-4 col-lg-4 col-form-label">E-mail</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" id="Email" name="email_update" value="{{ Auth::user()->email }}" required>
                       <div class="invalid-feedback">Por favor insere um e-mail!</div>
                     </div>
                   </div>
                   @error('email_update')
                    <div class="alert alert-danger">{{$message}}</div>  
                   @enderror
                    

                   <div class="row mb-3">
                     <label for="Telefone1" class="col-md-4 col-lg-4 col-form-label">Número telefone</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" id="telefoneinput" name="telefone_update" value="{{ Auth::user()->pessoa->telefone }}" oninput="this.className = ''" required>
                       <div class="mensagem-erro" style="width: 100%;"></div>
                       <div class="invalid-feedback">Por favor insere um nº de telefone!</div>
                     </div>
                   </div>
                   @error('telefone_update')
                    <div class="alert alert-danger">{{$message}}</div>  
                   @enderror

                   <div class="row mb-3">
                     <label for="Cargo" class="col-md-4 col-lg-4 col-form-label">Cargo</label>
                     <div class="col-md-8 col-lg-8">
                       <input type="text" id="Cargo" disabled readonly="true" value="{{ Auth::user()->cargo_usuario }}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                     </div>
                   </div>
                   
                   <div class="row mb-3">
                     <label for="Endereco" class="col-md-4 col-lg-4 col-form-label">Endereço</label>
                     <div class="col-md-8 col-lg-8">
                        <div class="row">
                          <div class="col-lg-3">
                            <input type="text" name="municipio_update" value="{{ isset($endereco->municipio) ? $endereco->municipio : '' }}" placeholder="Municipio" required>
                            <div class="invalid-feedback">Por favor insere um Municipio!</div>
                          </div>
                          @error('municipio_update')
                            <div class="alert alert-danger">{{$message}}</div>  
                          @enderror

                          <div class="col-lg-3">
                            <input type="text" name="bairro_update" value="{{ isset($endereco->bairro) ? $endereco->bairro : '' }}" placeholder="Bairro" required>
                            <div class="invalid-feedback">Por favor insere um Bairro!</div>
                          </div>
                          @error('bairro_update')
                            <div class="alert alert-danger">{{$message}}</div>  
                          @enderror

                          <div class="col-lg-3">
                            <input type="text" name="zona_update" value="{{ isset($endereco->zona) ? $endereco->zona : '' }}" placeholder="Zona" required>
                            <div class="invalid-feedback">Por favor insere uma Zona!</div>
                          </div>
                          @error('zona_update')
                            <div class="alert alert-danger">{{$message}}</div>  
                          @enderror

                          <div class="col-lg-3">                          
                            <input type="number" name="num_casa_update" value="{{ isset($endereco->numero_casa) ? $endereco->numero_casa : '' }}" placeholder="Casa Nº" required>
                            <div class="invalid-feedback">Por favor insere o nº da Casa!</div>
                          </div>
                          @error('num_casa_update')
                            <div class="alert alert-danger">{{$message}}</div>  
                          @enderror

                        </div>
                     </div>
                   </div>

                  <div class="text-center">
                    <button type="submit" class="btn" style="margin-top: 10px; background-color: #174183; color: #fff;">
                      Atualizar Dados
                    </button>
                  </div>
                 </form><!-- Fim Form Editar Perfil -->

               </div>

               <div class="tab-pane fade pt-3" id="alterar-senha">
              
                @if(session('success_updatePassword_001'))
                  <div class="alert alert-success">
                    {{session('success_updatePassword_001')}}
                  </div>
                @endif


                 <!-- Form Alterar Password -->
                 <form  action= {{route('updatePassword')}} method="POST" class="needs-validation" novalidate>
                  @csrf
                  @method('PATCH')
                  <div class="row mb-3">
                     <label for="SenhaAtual" class="col-md-4 col-lg-3 col-form-label">Senha atual</label>
                     <div class="col-md-8 col-lg-9">
                       <input type="password" name="password_old" value="{{old('password_old')}}" class="inpsenh" id="SenhaAtual" required>
                       <div class="invalid-feedback">Por favor insere a Senha atual!</div>
                     </div>
                  </div>
                    @error('password_old')
                      <div class="alert alert-danger">{{$message}}</div>  
                    @enderror

                  <div class="row mb-3">
                     <label for="NovaSenha" class="col-md-4 col-lg-3 col-form-label">Nova senha</label>
                     <div class="col-md-8 col-lg-5">
                       <input type="password" name="password" value="{{old('password')}}" class="inpsenh" id="NovaSenha" onkeyup="avaliarSenha();" required>
                       <div class="invalid-feedback">Por favor insere a Nova senha!</div>
                     </div>
                     <div class="col-md-2 col-lg-3">
                        <div id="avaliacaoResult"></div>
                        <span id="mostaSenha" style="display: block;"></span>
                      </div>
                  </div>
                  @error('password')
                    <div class="alert alert-danger">{{$message}}</div>  
                  @enderror

                  <div class="row mb-3">
                     <label for="ConfSenha" class="col-md-4 col-lg-3 col-form-label">Confirmar a senha</label>
                     <div class="col-md-8 col-lg-5">
                       <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="inpsenh" id="ConfSenha" onkeyup="avaliarSenha();" required>
                       <div class="invalid-feedback">Por favor confirme a senha!</div>
                     </div>
                     <div class="col-md-2 col-lg-3">
                        <div id="resultcomparaSenha"></div>
                      </div>
                  </div>
                  @error('password_confirmation')
                    <div class="alert alert-danger">{{$message}}</div>  
                  @enderror

                   <div class="text-center">
                     <button type="submit" class="btn" style="margin-top: 10px; background-color: #174183; color: #fff;">
                        Alterar Senha
                      </button>
                   </div>
                 </form><!-- Fim Form Alterar Password -->

               </div>

             </div><!-- Fim Bordered Tabs -->

           </div>
         </div>

       </div>
     </div>
   </section>
 
 </main>
 @endsection