@extends('layouts.main')

@section('title', 'Consultar usuário')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>Usuários</h2>     
  </div>
  
  <div class="col-md-12 col-lg-4 mb-2">
    <select class="btn-sel form-select" id="filtro4">
                <option selected disabled>Cargo:</option>
                <option value="Professora">Professora</option>
                <option value="Secretária">Secretária</option>
                <option value="Coordenadora">Coordenadora</option>
        </optgroup>
    </select>
</div> 

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" name="" class="campo-pesq" placeholder="Digite o nome do usuário">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>   
    </form>
  </div>

  @if(session('erro_status_001'))
    <div class="alert alert-danger">
      {{session('erro_status_001')}}
    </div>
  @endif
  @if(session('success_status_001'))
  <div class="alert alert-success">
    {{session('success_status_001')}}
    </div>
  @endif
  @if(session('erro_status_002'))
  <div class="alert alert-danger">
    {{session('erro_status_002')}}
  </div>
  @endif
  @if(session('sucess_status_002'))
  <div class="alert alert-danger">
    {{session('sucess_status_002')}}
  </div>
  @endif

  <!-- /  Inicio da tabela de usuários-->
  <table class="table table-striped table-custom" id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
          <th scope="col">#</th>
          <th scope="col">Nome Compleo</th>
          <th scope="col">E-mail</th>
          <th scope="col">Gênero</th>
          <th scope="col">Cargo</th>
          <th scope="col">Estado</th>
          <th></th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($users as $user)

          <tr style=" text-align: center;">

          <td>{{$loop->index + 1}}</td>
          <th scope="row">{{$user->pessoa->nome_completo}}</th>
          <td>{{$user->email}}</td>
          <td>{{$user->pessoa->genero}}</td>
          <td>{{$user->cargo_usuario}}</td>
          <td>  
            <form action={{ route('stateChange', ['id'=>$user->usuario_id]) }} method="post">
              @csrf
              @method("PATCH")
                @if($user->status_usuario===1)
                  <button type="submit" class="btn btn-danger">Bloquear</button>
                @else
                  <button type="submit" class="btn btn-success">Desbloquear</button>
                @endif
            </form> 
          </td>

          <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href={{ route('editUser', ['id'=>$user->usuario_id]) }}><i class="bi bi-pencil"></i></a> 
          </td>
          
        </tr>
    
      @endforeach
      
    </tbody>
  </table>
  <!-- Termina a tabela do usuário -->
  
<!--Inicio da modal ver usuario-->
<div class="modal fade" id="ExtralargeModal" tabindex="-1" data-bs-backdrop="false">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
     
      <div class="provisorio">
        <div class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

          <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal"></i>
        </div>
      </div>

      <div class="cabecalho-modal">
        <div class="row">
          <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Dados pessoais</h1>
          </div>

          <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
          </div>
        </div>
      </div>
      
      <div class="corpo-modal">
        <div class="form-inativo">
          <div class="dados-pessoais">        
            <div class="area-input form-group">
              <label>Nome Completo: </label><input type="text" name="" value="{{$user->pessoa->nome_completo}}">
            </div>
  
            <div class="container">
              <div class="row">
               
                <div class="col area-input form-group">
                  <label>Data de nascimento: </label><input type="date" id="datainput" class="form-control" style=" text-align: start;" placeholder="" name="" value="{{$user->pessoa->data_nascimento}}" oninput="this.className = ''">
                  <div id="mensagem" style="color: red;"></div>  
                </div>
                      
                <div class="col area-input form-group" style="margin-left: 10px;">
                  <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled name="" value="16">
                </div>
  
                <div class="col area-input form-group" style="margin-left: 10px;">
                  <label class="me-3">Sexo:</label>
                  <input type="radio" id="masculino" name="genero" value="Masculino" checked>
                  <label for="masculino" class="me-2"> Masculino</label>
                  <input type="radio" id="feminino" name="genero" value="Feminino" >
                  <label for="feminino"> Feminino</label>
                </div>  
  
              </div>
            </div>
          
          
            <div class="container">
              <div class="row">
                <div class=" col area-input form-group" >
                  <label>Número do BI: </label><input type="text" class="form-control" readonly="true" disabled name="" value="{{$user->pessoa->num_bi}}">
                </div>
  
                <div class="col area-input form-group" style="margin-left: 10px;">
                  <label>Tel: </label><input type="text" name="" value="{{$user->pessoa->telefone}}">
                
                </div>
              </div>
            </div>
  
            <div class="container">
              <div class="row">
                <div class="col area-input form-group">
                  <label>Município: </label><input type="text" name="" value="municipio">
                </div>
                
                <div class="col area-input form-group" style="margin-left: 10px;">
                  <label>Bairro: </label><input type="text" name="" value="Samba">
                </div>
                
                <div class="col area-input form-group" style="margin-left: 10px;">
                  <label>Zona: </label><input type="text" name="" value="zamba2">
                </div>
                
                <div class="col area-input form-group" style="margin-left: 10px;">
                  <label>N° Casa: </label><input type="text" name="" value="99">
                </div>
              </div>              
            </div>
  
            <div class="container">
              <div class="area-input form-group">
                  <label>Email: </label><input type="text" name="" value="mauroantonio@gmail.com">
              </div>
      
              <div class="form-group">
                <select oninput="this.className = ''" class="form-select" name="Fisic">
                  <option disabled>Cargo</option>
                  <option value="Professor">Professor</option>
                  <option value="Subdirector">Subdirector Pedagogico</option>
                  <option value="Secretaria">Secretaria Pedagogica</option>
                  <option value="Director" selected>Director Geral</option>
                  <option value="Coordenacao">Coordenador</option>
                  <option value="insc_user">Colaborador-Inscrição</option>
                  <option value="matri_user">Colaborador-Matricula</option>
                </select>
              </div>
            </div>
          
            <div class="footer-modal" style="text-align: center;">          
              <button type="submit" class="btn" style="background-color: #a7a706; color: #fff;">Editar dados</button>
            </div> 
          </div> 
        </div>
        
      </div>

    </div>
  </div>
</div><!--  / Termina a modal ver usuario-->  

</main>
@endsection