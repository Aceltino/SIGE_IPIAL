<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- /  Link dos Css do Bootstrap -->
    <link href={{{URL::asset("img/logo.png")}}} rel="icon">
    <link href={{URL::asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.snow.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.bubble.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/remixicon/remixicon.css")}} rel="stylesheet">
    <link href={{{URL::asset("vendor/simple-datatables/style.css")}}} rel="stylesheet">

    <!-- /  Link do Css main do projecto -->
    <link href={{URL::asset("css/autentic.css")}} rel="stylesheet">
    <link href={{{URL::asset("css/tudo.css")}}} rel="stylesheet">
</head>
<body>

    @yield('formulario-aut')
    
  <div id="preloader"></div>
  <!-- /  Footer -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; 2022 - 2023. Todos os direitos reservados <strong><span>SIGE - IPIAL</span></strong>
    </div>
    <div class="creditos">
      Desenvolvido por <a href="#">PIAL's Devs</a>
    </div>
  </footer><!-- Termina Footer -->


<!-- /  Link dos js do bootstrap-->
    <script src={{URL::asset("vendor/apexcharts/apexcharts.min.js")}}></script>
    <script src={{URL::asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{URL::asset("vendor/chart.js/chart.umd.js")}}></script>
    <script src={{URL::asset("vendor/echarts/echarts.min.js")}}></script>
    <script src={{URL::asset("vendor/quill/quill.min.js")}}></script>
    <script src={{URL::asset("vendor/simple-datatables/simple-datatables.js")}}></script>
    <script src={{URL::asset("vendor/tinymce/tinymce.min.js")}}></script>
    <script src={{URL::asset("vendor/php-email-form/validate.js")}}></script>

    <!-- /  Link do js main do projeto -->
    <script src={{{URL::asset("js/paineis/inscricacao/Inputbi.js")}}}></script>
    <script src={{{URL::asset("js/paineis/telefone.js")}}}></script>
    <script src={{URL::asset("js/script.js")}}></script>
    <script src={{{URL::asset("js/form.js")}}}></script>
</body>
</html>