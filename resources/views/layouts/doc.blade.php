<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>

    
    <!-- /	Link dos Css do Bootstrap -->
    <link href={{{URL::asset("img/logo.png")}}} rel="icon">
    <link href={{URL::asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.snow.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.bubble.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/remixicon/remixicon.css")}} rel="stylesheet">
    
    
    <!-- /	Link do Css main do projecto -->
    <link href={{{URL::asset("css/tudo.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/pauta.css")}}} rel="stylesheet">
    <style>
      .texto-azul{
        color: #174183;
      }
    </style>

</head>
<body>


    @yield('conteudo')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- /	Link dos js do bootstrap-->
  <script src="Datatables/datatables.min.js"></script>
  <script src={{{URL::asset("vendor/apexcharts/apexcharts.min.js")}}}></script>
  <script src={{{URL::asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}}></script>
  <script src={{{URL::asset("vendor/chart.js/chart.umd.js")}}}></script>
  <script src={{{URL::asset("vendor/echarts/echarts.min.js")}}}></script>
  <script src={{{URL::asset("vendor/quill/quill.min.js")}}}></script>
  <script src={{{URL::asset("vendor/tinymce/tinymce.min.js")}}}></script>

    <!-- /	Link do Js main do projecto -->
  <script src={{{URL::asset("js/script.js")}}}></script>
  <script src={{{URL::asset("js/paineis/recibo.js")}}}></script>    
</body>
</html>