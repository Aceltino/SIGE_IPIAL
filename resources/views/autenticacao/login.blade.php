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
    <link href={{{URL::asset("vendor/simple-datatables/style.css")}}} rel="stylesheet">

  <!-- /  Link do Css main do projecto -->
    <link href={{URL::asset("css/autentic.css")}} rel="stylesheet">
</head>
<body>
  <div class="login-form">
    <div class="area-logo">
      <img src={{URL::asset("img/logo.png")}}><br>
      <span>SIGE - IPIAL</span>
    </div>

    <form action={{route('checkLogin')}} method="post" class="row g-3 needs-validation" novalidate>
      @csrf
      <div class="col-12">
        @if(session('erroCheckLogin'))
          <div class="alert alert-danger">
            {{session('erroCheckLogin')}}
          </div>
        @endif  
        @if(session('erroCkeckLogin_Status'))
          <div class="alert alert-danger">
            {{session('erroCkeckLogin_Status')}}
          </div>
        @endif
        <div class="input-group has-validation">
          <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
          <input type="text" name="username" autocomplete="off" placeholder="Inserir nome de usuário" class="form-control" required>
          <div class="invalid-feedback">Por favor insere o seu Username!</div>
        </div>
      </div>

      <div class="input-group col-12">
        <span class="input-group-addon" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
        <input type="password" name="password" placeholder="Inserir a senha" class="form-control" required>
        <div class="invalid-feedback">Por favor insere a sua Senha!</div>
      </div>

      <div class="container">
        
        <div class="row" style="padding-top: 5px;">
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Lembrar-me</label>
            </div>  
          </div>
          
          <div class="col">

            <a href={{route('recuperarPassword')}} class="forgot-password">Esqueceu a senha?</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Entrar</button>
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
    <script src="vendor/apexcharts/apexcharts.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- /  Link do js main do projeto -->
  <script src="js/script.js"></script>
</body>
</html>