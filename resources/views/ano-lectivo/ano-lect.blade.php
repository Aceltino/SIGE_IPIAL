@extends('layouts.main')

@section('title', 'Cursos')

@section('conteudo')
<main id="main" class="main">
      <div class="row">
        <div class="col">
          <h2>ANO LECTIVO</h2>      
        </div>
         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro1">
             <option selected disabled>Ano de Inicio</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option>
             <option value="2024">2024</option>
             <option value="2025">2025</option>
             <option value="2026">2026</option>
           </select>
         </div>

         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro2">
             <option selected disabled>Ano de fim</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option>
             <option value="2024">2024</option>
             <option value="2025">2025</option>
             <option value="2026">2026</option>
           </select>
         </div>
      
      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="" class="campo-pesq">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>   
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table id="matricula-tab" class="table table-striped">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Data de Inicio</th>
            <th scope="col">Data de Fim</th>
            <th scope="col">Número max de vagas na sala</th>
            <th scope="col">Número max de sala</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <tr style=" text-align: center;">
            <th scope="row">2025</th>
            <td>2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2023</th>
            <td>2024</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <th scope="row">2020</th>
            <td>2021</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- Termina a tabela de matriculas -->


    </main>
@endsection