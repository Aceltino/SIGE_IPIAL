@extends('layouts.main')

@section('title', 'Consultar usuário')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h1>Usuários</h1>     
  </div>
  
  <div class="col-md-12 col-lg-4 mb-2">
    <select class="btn-sel form-select" id="filtro5">
      <optgroup> 
        <option selected disabled>Cargo:</option>
        <option>Todos</option>
        <option value="Professor">Professor</option>
        <option value="Administrador">Administrador</option>
        <option value="Subdirector">Subdirector Pedagogico</option>
        <option value="Secretaria">Secretaria Pedagogica</option>
        <option value="Director">Director Geral</option>
        <option value="Coordenacao">Coordenador</option>
        <option value="insc_user">Colaborador-Inscrição</option>
        <option value="matri_user">Colaborador-Matricula</option>
      </optgroup>
    </select>
</div> 

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" name="" class="campo-pesq" placeholder="Digite o nome do usuário">
      <button type="button" title="procurar"><i class="bi bi-search"></i></button>   
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
  @if(session('succes_reenvio'))
    <div class="alert alert-success">
      {{session('succes_reenvio')}}
    </div>
  @endif
  @if(session('erro_reenvio'))
    <div class="alert alert-danger">
      {{session('erro_reenvio')}}
    </div>
  @endif
  <br><br><br><br>
  {{-- Inicio da tabela de usuários--}}
  <table class="table table-custom table-escuro" id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
        <th scope="col">#</th>
        <th scope="col">Nome Compleo</th>
        <th scope="col">E-mail</th>
        <th scope="col">Gênero</th>
        <th scope="col">Cargo</th>
        <th scope="col">Estado</th>
        <th scope="col">Resgatar</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      @if($user->usuario_id !== Auth::id())
        <tr style=" text-align: center;">
          <td>{{$loop->index}}</td>
          <th scope="row">{{$user->pessoa->nome_completo}}</th>
          <td>{{$user->email}}</td>
          <td>{{$user->pessoa->genero}}</td>
          <td>{{$user->cargo_usuario}}</td>
          <td>  
            @if($user->status_usuario===1)
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalbloq{{$user['usuario_id']}}">Bloquear</button>
            @else
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalbloq{{$user['usuario_id']}}">Desbloquear</button>
            @endif
          </td>
          <td> 
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalResg{{$user['usuario_id']}}">Resgatar</button>
          </td>
          <td>
            <div style="display: flex; justify-content: center; align-items: center; gap:5px;">
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal{{$user['usuario_id']}}"></i>
              <a href={{ route('editUser', ['id'=>$user->usuario_id])}}><i class="bi bi-pencil"></i></a> 

            </div>
          </td>
        </tr>
      @endif
    @endforeach
      
    </tbody>
  </table>{{--  / Termina a tabela do usuário --}}

{{--Inicio da modal bloquear e desbloquear usuario--}}  
@foreach ($users as $user)
  <div class="modal fade" id="modalbloq{{$user['usuario_id']}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
        <div class="modal-header" style="border: none;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-transform: uppercase; text-align: center;">
          <strong> 
            @if($user->status_usuario===1)
                Bloquear Usuário?
              @else
                Desbloquear Usuário?
              @endif
          </strong>
        </div>

        <div class="modal-footer" style="border: none;">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>

          <form action={{ route('stateChange', ['id'=>$user->usuario_id]) }} method="post">
            @csrf
            @method("PATCH")
              @if($user->status_usuario===1)
                <button type="submit" class="btn btn-danger">Bloquear</button>
              @else
                <button type="submit" class="btn btn-success">Desbloquear</button>
              @endif
          </form> 
        </div>

      </div>
    </div>
	</div>{{--  / Fim da modal bloquear e desbloquear usuario--}}
@endforeach

{{--Inicio da modal RESGATAR USUARIO--}}
@foreach ($users as $user)
  <div class="modal fade" id="modalResg{{$user['usuario_id']}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
        <div class="modal-header" style="border: none;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-transform: uppercase; text-align: center;"> 
          O sistema irá enviar um nome de usuario para o email <strong>{{$user['email']}}.</strong> Deseja continuar?
          
        </div>

        <div class="modal-footer" style="border: none;">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>

          <form action={{ route('reenviarCredencias', ['id'=>$user->usuario_id]) }} method="post">
            @csrf
            <button type="submit" class="btn btn-secondary"> Reenviar Nome do Usuário</button>
          </form>
        </div>

      </div>
    </div>
	</div>{{--  / Fim da modal RESGATAR USUARIO--}}
@endforeach


{{--Inicio da modal ver usuario--}}
@foreach ($users as $user)
  <div class="modal fade" id="ExtralargeModal{{$user['usuario_id']}}" tabindex="-1" data-bs-backdrop="false">
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
              
              <div class="container">
                <div class="area-input form-group">
                  <label>Nome Completo: </label><input type="text" readonly="true" disabled value="{{$user->pessoa->nome_completo}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                </div>
      
                <div class="container">
                  <div class="row">
                  
                    <div class="col area-input form-group">
                      <label>Data de nascimento: </label><input type="date" id="datainput" class="form-control" placeholder="" name="" readonly="true" disabled value="{{$user->pessoa->data_nascimento}}" oninput="this.className = ''" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                      <div id="mensagem" style="color: red;"></div>  
                    </div>
                          
                    <div class="col area-input form-group" style="margin-left: 10px;">
                      <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled value="16" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
      
                    <div class="col area-input form-group" style="margin-left: 10px;">
                      <label class="me-3">Sexo:</label>
                      <input type="radio" id="masculino" name="genero" readonly="true" disabled value="Masculino" {{$user->pessoa->genero=='Masculino'? "checked" : ""}} >
                      <label for="masculino" class="me-2"> Masculino</label>
                      <input type="radio" id="feminino" name="genero" readonly="true" disabled value="Femenino" {{$user->pessoa->genero=='Femenino'? "checked" : ""}}>
                      <label for="feminino"> Femenino</label>
                    </div>  
      
                  </div>
                </div>
              
              
                <div class="container">
                  <div class="row">
                    <div class=" col area-input form-group" >
                      <label>Número do BI: </label><input type="text" class="form-control" readonly="true" disabled name="" value="{{$user->pessoa->num_bi}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
      
                    <div class="col area-input form-group" style="margin-left: 10px;">
                      <label>Tel: </label><input type="text" name="" readonly="true" disabled value="{{$user->pessoa->telefone}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    
                    </div>
                  </div>
                </div>
      
                <div class="container">
                  <div class="row">
                    <div class="col area-input form-group">
                      <label>Município: </label><input type="text" name="" readonly="true" disabled value="{{$user->pessoa->endereco->municipio}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                      <label>Bairro: </label><input type="text" name="" readonly="true" disabled value="{{$user->pessoa->endereco->bairro}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                      <label>Zona: </label><input type="text" name="" readonly="true" disabled value="{{$user->pessoa->endereco->zona}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                      <label>N° Casa: </label><input type="text" name="" readonly="true" disabled value="{{$user->pessoa->endereco->numero_casa}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
                  </div>              
                </div>
      
                <div class="container">
                  <div class="row">
                    <div class="col area-input form-group">
                      <label>Email: </label><input type="text" name="" readonly="true" disabled value="{{$user->email}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
    
                    <div class="col form-group">
                      <select oninput="this.className = ''" class="form-select" name="cargo_usuario_update" readonly="true" disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                        <option disabled>#Cargos</option>
                        <option value="Subdirector" readonly="true" disabled {{$user->cargo_usuario=='Subdirector'? "selected" : ""}}>Subdirector Pedagogico</option>
                        <option value="Secretaria" readonly="true" disabled {{$user->cargo_usuario=='Secretaria'? "selected" : ""}}>Secretaria Pedagogica</option>
                        <option value="Administrador" readonly="true" disabled {{$user->cargo_usuario=='Administrador'? "selected" : ""}}>Adminstrador</option>
                        <option value="Director" readonly="true" disabled {{$user->cargo_usuario=='Director'? "selected" : ""}}>Director Geral</option>
                        <option value="Professor" readonly="true" disabled {{$user->cargo_usuario=='Professor'? "selected" : ""}}>Professor</option>
                        <option value="Coordenacao" readonly="true" disabled {{$user->cargo_usuario=='Coordenacao'? "selected" : ""}}>Coordenador</option>
                        <option value="insc_user" readonly="true" disabled {{$user->cargo_usuario=='insc_user'? "selected" : ""}}>Colaborador-Inscrição</option>
                        <option value="matri_user" readonly="true" disabled {{$user->cargo_usuario=='matri_user'? "selected" : ""}}>Colaborador-Matricula</option>
                      </select>
                    </div>

                  </div>
  
                </div>

              </div>

            </div> 
          </div>
        </div>

      </div>
    </div>
  </div>{{--  / Termina a modal ver usuario--}}
@endforeach
</main>
@endsection