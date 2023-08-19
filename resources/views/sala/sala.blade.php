@extends('layouts.main')

@section('title', 'Área de formação')

@section('conteudo')
<main id="main" class="main">
    @if (session()->has('erro'))
    <div class="alert alert-danger">
    {{session('erro')}}
    </div>
    @endif
  @if(session('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-1"></i>
      {{(session('edit'))}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-octagon me-1"></i>
      {{(session('delete'))}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
      <div class="row">
        <div class="col">
          <h2>Salas</h2>
        </div>

         <div class="col-lg-4">
            <select class="btn-sel form-select" id="filtro3">
                <option selected disabled>Tipo de sala</option>
                <option value="Laboratorio">Laboratorio</option>
                <option value="Normal">Normal</option>
           </select>
         </div>

      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="pesquisa" class="campo-pesq" placeholder="Digite a sala que pretendes">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <table class="table table-striped table table-custom table-escuro" id="matricula-tab">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Sala</th>
            <th scope="col">Tipo de sala</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($salas as $sala)
              <tr style=" text-align: center;">
                  <th scope="row">{{ $sala->sala }}</th>
                  <td>{{ $sala->tipo_sala }}</td>
                  <td>
                    <section style="display: flex;">
                    <i class="bi bi-eye-fill"  data-bs-toggle="modal" data-bs-target="#ExtralargeModal{{ $sala['sala_id'] }}"></i>
                    <a href="{{ route('edit.sala',['sala_id' => $sala->sala_id]) }}"><i class="bi bi-pencil"></i></a>
                    <form  method="POST"action="{{ route('delete.sala', ['sala_id' => $sala->sala_id ])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bi bi-trash-fill" style="border: none; background: none;"></button>
                    </form>
                    </section>
                  </td>
              </tr>

              <div class="modal fade" id="ExtralargeModal{{ $sala['sala_id'] }}" tabindex="-1" data-bs-backdrop="false">
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
                          <h1>Dados Da Sala</h1>
                        </div>

                      </div>
                    </div>

                    <div class="corpo-modal">
                      <form class="form-inativo">
                        <div class="dados-pessoais">
                        <div class="area-input form-group" disabled>
                        <label>Sala:</label><input type="text" name="nome_sala" value="{{ $sala->sala }}" >
                        </div>
                    <div class="form-group">
                        <label>Tipo_sala:</label><input type="text" name="tipo_sala" value="{{ $sala->tipo_sala }}" >
                        </select>
                    </div>
                    <div class="footer-modal" style="text-align: center;">

                        <div class="jnt">
                            <a href="{{ route('consultar.sala') }}" class="btn" style="background-color: #070b17; color: #fff;">Retrocer as salas</a>
                        <a href="{{ route('edit.sala',['sala_id' => $sala->sala_id]) }}" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                        </div>
                    </div>
                    </div>

                  </div>
                </div>
              </div>
              @endforeach
        </tbody>
      </table>
    

    </main>
@endsection
