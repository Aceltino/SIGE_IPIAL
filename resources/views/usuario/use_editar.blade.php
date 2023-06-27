@extends('layouts.main')

@section('title', 'Editar Registros')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Dados pessoais</h1>      
        </div>
        
    </div>
    @if(session('erro_Update_001'))
        <div class="alert alert-danger">
            {{session('serro_Update_001')}}
        </div>
    @endif
    @if(session('erro_Update_002'))
        <div class="alert alert-danger">
            {{session('erro_Update_002')}}
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action={{route('updateUser',['id'=>$user->usuario_id])}} method="POST" class="form-inativo">
        @csrf
        @method("PUT")
        <div class="dados-pessoais">        
            <div class="area-input form-group">
                <label>Nome Completo: </label><input type="text" name="nome_completo_update" value="{{$user->pessoa->nome_completo}}">
            </div>
            @error('nome_completo_update')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Data de nascimento: </label><input type="date" id="datainput" class="form-control" style=" text-align: start;" placeholder="" name="data_nascimento_update" value="{{$user->pessoa->data_nascimento}}" oninput="this.className = ''">
                        <div id="mensagem" style="color: red;"></div>
                        @error('data_nascimento_update')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled name="" value="16">
                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                            <label class="me-3">Sexo:</label>
                            <input type="radio" id="masculino" name="genero_update" value="Masculino" {{$user->pessoa->genero=='Masculino'? "checked" : ""}} >
                            <label for="masculino" class="me-2"> Masculino</label>
                            <input type="radio" id="feminino" name="genero_update" value="Femenino" {{$user->pessoa->genero=='Femenino'? "checked" : ""}} >
                            <label for="feminino"> Feminino</label>
                    </div>
                    @error('genero_update')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col area-input form-group" >
                        <label>Número do BI: </label><input type="text" class="form-control" name="num_bi_update" value="{{$user->pessoa->num_bi}}">
                    </div>
                    @error('num_bi_update')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Tel: </label><input type="text" name="telefone_update" value="{{$user->pessoa->telefone}}">
                    </div>
                    @error('telefone_update')
                        <div class="alert alert-danger">{{$message}}</div>  
                    @enderror
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Município: </label><input type="text" name="municipio_update" value="{{$user->pessoa->endereco->municipio}}">
                    </div>
                    @error('municipio_update')
                       <div class="alert alert-danger">{{$message}}</div>  
                    @enderror
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Bairro: </label><input type="text" name="bairro_update" value="{{$user->pessoa->endereco->bairro}}">
                    </div>
                    @error('bairro_update')
                        <div class="alert alert-danger">{{$message}}</div>  
                    @enderror
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Zona: </label><input type="text" name="zona_update" value="{{$user->pessoa->endereco->zona}}">
                    </div>
                    @error('zona_update')
                        <div class="alert alert-danger">{{$message}}</div>  
                    @enderror
                    
                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>N° Casa: </label><input type="text" name="num_casa_update" value="{{$user->pessoa->endereco->numero_casa}}">
                    </div>
                    @error('num_casa_update')
                        <div class="alert alert-danger">{{$message}}</div>  
                    @enderror
                </div>              
            </div>

                    <div class="col form-group" style="margin-left: 10px; justify-items: center">
                        <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
                            Informações do Usuário: <i class="bi bi-row"></i>
                        </button>
                    </div>
                </div>
            </div>
                
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="dados-academicos">
                    <div class="row">
                    
                    <br>

                    <div class="area-input form-group">
                        <label>Email: </label><input type="text" name="email_update" value="{{$user->email}}">
                    </div>
                    @error('email_update')
                        <div class="alert alert-danger">{{$message}}</div>  
                    @enderror

                    <div class="form-group">
                        <select oninput="this.className = ''" class="form-select" name="cargo_usuario_update">
                          <option disabled>#Cargos</option>
                          <option value="Subdirector" {{$user->cargo_usuario=='Subdirector'? "selected" : ""}}>Subdirector Pedagogico</option>
                          <option value="Secretaria" {{$user->cargo_usuario=='Secretaria'? "selected" : ""}}>Secretaria Pedagogica</option>
                          <option value="Administrador" {{$user->cargo_usuario=='Administrador'? "selected" : ""}}>Adminstrador</option>
                          <option value="Director"  {{$user->cargo_usuario=='Director'? "selected" : ""}}>Director Geral</option>
                          <option value="Professor" {{$user->cargo_usuario=='Professor'? "selected" : ""}}>Professor</option>
                          <option value="Coordenacao" {{$user->cargo_usuario=='Coordenacao'? "selected" : ""}}>Coordenador</option>
                          <option value="insc_user" {{$user->cargo_usuario=='insc_user'? "selected" : ""}}>Colaborador-Inscrição</option>
                          <option value="matri_user" {{$user->cargo_usuario=='matri_user'? "selected" : ""}}>Colaborador-Matricula</option>
                        </select>
                    </div>
    
                </div>              
            </div>

                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="/usuario" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>
                        <button type="submit" class="btn" style="background-color: #4caf54; color: #fff;">Atualizar</button>
                    </div>
                </div>
        
    </form> 
</main>
@endsection