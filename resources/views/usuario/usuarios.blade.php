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
  <div class="alert alert-warning">
    {{session('success_status_001')}}
    </div>
  @endif
  @if(session('erro_status_002'))
  <div class="alert alert-danger">
    {{session('erro_status_002')}}
  </div>
  @endif
  @if(session('sucess_status_002'))
  <div class="alert alert-warning">
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
              <i class="bi bi-eye-fill"></i>
              <a href={{ route('editUser', ['id'=>$user->usuario_id]) }}><i class="bi bi-pencil"></i></a> 
          </td>
          
        </tr>
    
      @endforeach
      
    </tbody>
  </table>
  <!-- Termina a tabela do usuário -->
  
</main>
@endsection