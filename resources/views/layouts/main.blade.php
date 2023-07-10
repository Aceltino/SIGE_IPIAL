<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    {{--Icone da pagina--}}
    <link href={{{URL::asset("img/logo.png")}}} rel="icon">
    <!-- /	Link dos Css do Bootstrap -->
    <link href={{URL::asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.snow.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.bubble.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/remixicon/remixicon.css")}} rel="stylesheet">

    <!-- /	Link do Css main do projecto -->
    <link href={{{URL::asset("css/apitabelainscricao.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/estilo.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/tudo.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/perfil.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/calendario.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/ficha-biografica-doc.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/processo.css")}}} rel="stylesheet">
    
    <link href={{{URL::asset("css/fonts/fontawesome-all.min.css")}}} rel="stylesheet">

    <link href={{{URL::asset("tooltipster/dist/css/tooltipster.bundle.min.css")}}} rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- /	Link do js mim do projecto -->
    <script src={{{URL::asset("js/jquery-3.6.4.min.js")}}}></script>
    <script src={{{URL::asset("js/chart.js")}}}></script>
    <script src={{URL::asset("node_modules/chart.js/dist/chart.js")}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src={{{URL::asset("tooltipster/dist/js/tooltipster.bundle.min.js")}}}></script>
    <script src={{{URL::asset("Datatables/datatables.min.js")}}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
    <script src={{{URL::asset("js/gerarpdf.js")}}}></script>
    


    
</head>
<body>

    @include('layouts.menu')

    @include('layouts.sidebar')
    @php

    @endphp

    @if(session()->has('Erro'))
    <div class="col" style="display: flex; justify-content: center; align-items: center; padding-top: 70px;">
        
      <br>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-octagon me-1"></i>
      {{session('Erro')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </div>
    
    @endif

    @yield('conteudo')

    @include('layouts.footer')

    <!-- /	Link dos js do bootstrap-->
  <script src={{{URL::asset("vendor/apexcharts/apexcharts.min.js")}}}></script>
  <script src={{{URL::asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}}></script>
  <script src={{{URL::asset("vendor/quill/quill.min.js")}}}></script>
  <script src={{{URL::asset("vendor/tinymce/tinymce.min.js")}}}></script>

  <!-- /	Link do js Validações do projeto -->
  <script src={{{URL::asset("js/paineis/inputnumero.js")}}}></script>
  <script src={{{URL::asset("js/paineis/inscricacao/Inputbi.js")}}}></script>
  <script src={{{URL::asset("js/paineis/inscricacao/selectcurso.js")}}}></script>
  <script src={{{URL::asset("js/paineis/inscricacao/inputidade.js")}}}></script>
  <script src={{{URL::asset("js/paineis/inscricacao/inputnome.js")}}}></script>
  <script src={{{URL::asset("js/paineis/telefone.js")}}}></script>
  <script src={{{URL::asset("js/paineis/disciplina/disciplina.js")}}}></script>
  <script src={{{URL::asset("js/paineis/horario/horario.js")}}}></script>
  <script src={{{URL::asset("js/paineis/horario/editar-horario.js")}}}></script>
  <script src={{{URL::asset("js/paineis/perfil/perfil.js")}}}></script>
  <script src={{{URL::asset("js/paineis/ano-lectivo/criar-ano-lectivo.js")}}}></script>
  <script src={{{URL::asset("js/paineis/professor/professor.js")}}}></script>
  <script src={{{URL::asset("js/paineis/professor/validacoes-professor.js")}}}></script>
  <script src={{{URL::asset("js/paineis/letrasc.js")}}}></script>
  <script src={{{URL::asset("js/paineis/registrar-aluno/registrar-aluno.js")}}}></script>
  <script src={{{URL::asset("js/paineis/curso/curso.js")}}}></script>
  <script src={{{URL::asset("js/paineis/avalicao/inputnota.js")}}}></script>


  


   <!-- /	Link do js main do projeto -->
  <script src={{{URL::asset("js/axios.min.js")}}}></script>
  <script src={{{URL::asset("js/script.js")}}}></script>
  <script src={{{URL::asset("js/fecharerro.js")}}}></script>
  <script src={{{URL::asset("js/darkmode.js")}}}></script>
  <script src={{{URL::asset("js/paineis/avalicao/inputnota.js")}}}></script>
  <script src={{{URL::asset("js/APIconsumo.js")}}}></script>
  <script src={{{URL::asset("js/APIconsumomatriculas.js")}}}></script>
  <script src={{{URL::asset("js/APIconsumoturmas.js")}}}></script>
  <script src={{{URL::asset("Datatables/datatables.min.js")}}}></script>
  <script src={{{URL::asset("js/form.js")}}}></script>
  <script src={{{URL::asset("js/clone-contato.js")}}}></script>
  <script src={{{URL::asset("tooltipster/dist/js/tooltipster.bundle.min.js")}}}></script>
  <script src={{{URL::asset("js/tab.js")}}}></script>
  <script src={{{URL::asset("js/gerarpdf.js")}}}></script>
 
  


</body>
</html>
