@extends('layouts.main')

@section('title', 'Cursos')

@section('conteudo')
<main id="main" class="main">
      <div class="row">
        <div class="col">
          <h2>CURSOS</h2>      
        </div>
      
         <div class="col-lg-4">
           <select class="btn-sel form-select">
              <option selected>Area de Formação</option>
              <option value="CV">Construção civil</option>
              <option value="EL">Electricidade</option>
              <option value="IN">Informática - I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
           </select>
         </div> 

         <div class="col-lg-4">
           <select class="btn-sel form-select">
             <option selected>Coordenador</option>
           </select>
         </div>
      
      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input type="text" name="" class="campo-pesq">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>   
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table class="table table-striped">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Nome do Curso</th>
            <th scope="col">Area de Formação</th>
            <th scope="col">Coordenador</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>
          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>


        </tbody>
      </table>
      <!-- Termina a tabela de matriculas -->


    </main>
@endsection