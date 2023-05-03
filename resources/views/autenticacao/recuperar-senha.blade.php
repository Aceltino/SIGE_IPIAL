<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>

  <!-- /  Link dos Css do Bootstrap -->

  <link href={{URL::asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{URL::asset("vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{URL::asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{URL::asset("vendor/quill/quill.snow.css")}} rel="stylesheet">
  <link href={{URL::asset("vendor/quill/quill.bubble.css")}} rel="stylesheet">
  <link href={{URL::asset("vendor/remixicon/remixicon.css")}} rel="stylesheet">
  <link href={{URL::asset("vendor/simple-datatables/style.css")}} rel="stylesheet">

  <!-- /  Link do Css main do projecto -->
    <link href={{URL::asset("css/autentic.css")}} rel="stylesheet">

</head>
<body>
  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span>
    </div>
    <form class="row g-3 needs-validation" novalidate>

      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
        <input type="email" name="email" placeholder="Inserir o seu e-mail" class="form-control" required>
        <div class="invalid-feedback">Por favor insere um e-mail!</div>
      </div>

      <div class="container">
        
        <div class="row" style="padding-top: 5px;">
          <div class="col">
             
          </div>
          
          <div class="col">

            <a href={{route('login')}}>Lembrou? Entre</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Recuperar</button>
      </div>
    </form>
    
  </div>

  <!-- /  Footer -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; 2022 - 2023. Todos os direitos reservados <strong><span>SIGE - IPIAL</span></strong>
    </div>
    <div class="creditos">
      Desenvolvido por <a href="#">PIAL's Devs</a>
    </div>
  </footer><!-- Termina Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src={{URL::asset("js/script.js")}}></script>

</body>
</html>