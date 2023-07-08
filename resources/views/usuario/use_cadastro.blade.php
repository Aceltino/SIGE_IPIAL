@extends('layouts.main')

@section('title', 'Cadastrar usuário')

@section('conteudo')
<main id="main" class="main">

      @if(session('erroCadastroUser'))
        <div class="alert alert-danger">
            {{session('erroCadastroUser')}}
        </div>
      @endif
      @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
      @endif
      @if(session('registrado'))
        <div class="alert alert-danger">
            {{session('registrado')}}
        </div>
      @endif
      @if(session('erroCadastroUser'))
        <div class="alert alert-danger">
            {{session('erroCadastroUser')}}
        </div>
      @endif

      <form action={{route('storeUsuario')}} method="POST" id="regForm" class="form-nscricao">
        @csrf
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
         
        </div> 
        
        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Dados pessoais</h2>
          
          <div class="row">
            <div class="col">
                 <input type="text" style=" text-align: center;" id="letra" placeholder="Primeiro Nome" value="{{old('nome')}}" name="nome" oninput="this.className = ''">
            </div>
            @error('nome')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="col">
                 <input type="text" style=" text-align: center;" id="letra2" placeholder="Ultimo Nome" value="{{old('sobre_nome')}}" name="sobre_nome"  oninput="this.className = ''">
             </div>
             @error('sobre_nome')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
         </div><br>
         
          <div class="row">
            <div class="col-5">
                 <input type="text" class="form-control" id="bi_input" style=" text-align: start;" placeholder="Número do bilhete de identidade" name="num_bi" value="{{old('num_bi')}}" oninput="this.className = ''">
                 <div id="mensagem1" style="color: red;"></div>
                @error('num_bi')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
             </div>
            <div class="col-5">
                 <input type="date" id="datainput10" class="form-control" style=" text-align: start;" placeholder="" name="data_nascimento" value="{{old('data_nascimento')}}" oninput="this.className = ''" >
                 <div id="mensagem10" style="color: red;"></div>
             </div>
             @error('data_nascimento')
              <div class="alert alert-danger">{{$message}}</div>
             @enderror
             <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" id="idadeinput10" style="text-align: center;" readonly="true" disabled oninput="this.className = ''" value="00">
                </div> 
              </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-md-4">
                <div class="form-group">
                  <label class="me-3">Sexo:</label>
                  <input type="radio" id="masculino" name="genero" value="Masculino" checked>
                  <label for="masculino" class="me-2"> Masculino</label>
                  <input type="radio" id="feminino" name="genero" value="Femenino" >
                  <label for="feminino"> Feminino</label>
                </div>
            </div>
            <div class="col-8" style=" display: flex; justify-content: flex-end;align-items: center; gap: 10px;">
              <h5>Endereço</h5>
              <div class="form-group">
                <input name='municipio' type="text" placeholder="Municipio" value="{{old('municipio')}}"  oninput="this.className = ''">
              </div> 
              @error('municipio')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="form-group">
                <input name='bairro' type="text" placeholder="Bairro"  value="{{old('bairro')}}" oninput="this.className = ''">
              </div> 
              @error('bairro')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="form-group">
                <input name='zona' type="text" placeholder="Zona"  value="{{old('zona')}}" oninput="this.className = ''">
              </div> 
              @error('zona')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="form-group">
                <input name='numero_casa' type="number" id="numeroinput" value="{{old('numero_casa')}}" placeholder="Nº Casa"  oninput="this.className = ''">
              </div> 
              @error('numero_casa')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="row">
            <div id="clone1"class="col-lg-3  gap-1 justify-content-center align-items-center">
              <div>
                <span style="color: #777;">Telefone (+244):</span>
              </div>
              
              <div class=" col aa" style="display: flex; flex-direction: column;">
                <input type="text" id="telefoneinput" placeholder="Telefone"  value="{{ old('num_telefone') }}" name="num_telefone" oninput="this.className = ''">
                <div class="mensagem-erro" style="width: 100%;"></div>
                @error('num_telefone')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              
            </div>
           
           
          </div>

        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações importantes do Usuário</h2>

          <div class="form-group">
            <input type="email" name="email" value="{{old('email')}}" placeholder="E-mail do  usuário" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select" name="cargo">
              <option disabled>Cargo</option>
              <option selected value="Professor">Professor</option>
              <option value="Administrador">Administrador</option>
              <option value="Subdirector">Subdirector Pedagogico</option>
              <option value="Secretaria">Secretaria Pedagogica</option>
              <option value="Director">Director Geral</option>
              <option value="Coordenacao">Coordenador</option>
              <option value="insc_user">Colaborador-Inscrição</option>
              <option value="matri_user">Colaborador-Matricula</option>
            </select>
          </div>
    
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
        
      </form>


    </main>
@endsection