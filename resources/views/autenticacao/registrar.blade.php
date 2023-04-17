<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registrar</title>

  <!-- /  Link dos Css do Bootstrap -->

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- /  Link do Css main do projecto -->
    <link href="css/autentic.css" rel="stylesheet">

</head>
<body>
  <div class="login-form">
    <div class="area-logo">
      <img src="img/logo.png"><br>
      <span>SIGE - IPIAL</span>
    </div>
    <form class="row g-3 needs-validation" novalidate style="padding-top: 10px;">
      <div class="container">      
        
        <div class="row">
          <div class="col">
            <div class="input-group has-validation">
              <input type="text" autocomplete="off" class="form-control" placeholder="Nome" required>
              <div class="invalid-feedback">Por favor insira um Nome.</div>
            </div>
          </div>
          <div class="col">
            <div class="input-group has-validation">
              <input type="text" autocomplete="off" class="form-control" placeholder="Apelido" required>
              <div class="invalid-feedback">Por favor insira um Apelido.</div>
            </div>
          </div>
        </div>  

      </div>

      <div class="input-group has-validation">
        <select class="form-select">
          <option value="1" selected>Homem</option>
          <option value="2">Mulher</option>
        </select>
      </div>

      <span style="color: rgb(88, 85, 85);">
        Data de Nascimento
      </span>
      <div class="input-group has-validation" style="margin-top: 10px;">
        <div class="row">
          <div class="col">
            <select class="form-select">
              <option value="1" selected>01</option>
              <option value="2">02</option>
            </select>
          </div>
          <div class="col">
            <select class="form-select">
              <option value="1" selected>01</option>
              <option value="2">02</option>
            </select>
          </div>
          <div class="col">
            <select class="form-select">
              <option value="1" selected>1998</option>
              <option value="2">1999</option>
            </select>
          </div>
        </div>
      </div>

          <div class="input-group has-validation">
            <input type="text" autocomplete="off" class="form-control" placeholder="E-mail" required>
            <div class="invalid-feedback">Por favor insira um E-mail.</div>
          </div>

          <div class="input-group has-validation">
            <input type="text" autocomplete="off" class="form-control" placeholder="Senha" required>
            <div class="invalid-feedback">Por favor insira uma senha.</div>
          </div>





  
          <div class="input-group has-validation">
            <input type="text" autocomplete="off" class="form-control" placeholder="Confirmar senha" required>
            <div class="invalid-feedback">Por favor confirme a senha.</div>
          </div>

      <div class="col-12">
        <button class="botao-log btn btn-primary w-100" type="submit">Registrar</button>
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