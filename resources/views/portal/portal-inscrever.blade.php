<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Rascunho sige</title>

	<!-- /	Link dos Css do Bootstrap -->

	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- /	Link do Css main do projecto -->
	<link href="assets/css/candidato.css" rel="stylesheet">
  <link href="assets/css/tudo.css" rel="stylesheet">
</head>
<body>
    <!-- # Header -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="portal-ipial.html">Ipial - Alda Lara</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="#">Inicio</a></li>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#cursos">Cursos</a></li>
          <li><a href="#galeria">Galeria</a></li>
          <li><a href="#direcao">Direção</a></li>
          <li><a href="#footer">Contato</a></li>          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="portal-inscrever.html" class="inscrever-btn">Inscrever-se</a>

    </div>
  </header><!-- Fim Header -->
  
  <!-- # Area do Main -->
  <main id="main">
    <div class="area-formulario-inscricao">
      <form method="POST" action="" id="regForm" class="form-nscricao">
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

        <div class="tab">
          <h2>introduza os dados pessoais</h2>

          <div class="form-group">
            <input type="text" placeholder="Nome Completo" name="" oninput="this.className = ''">
          </div>
          
          <div class="row">
            <div class="col">
              <div class="form-group">
                <input type="text" placeholder="Nome do Pai" oninput="this.className = ''">
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <input type="text" placeholder="Nome da Mãe" oninput="this.className = ''">
              </div> 
            </div>
          </div>
          
          <div class="row">
            <div class="col">
              <p><input type="date" name="" oninput="this.className = ''"></p>
            </div>

            <div class="col">
              <input type="text" class="form-control" readonly="true" value="00" name="" disabled>
            </div>
            <div class="col">
              <input type="text" placeholder="Naturalidade" name="naturalidade" oninput="this.className = ''">
            </div>
          </div>
          
          <div class="row">
            <div class="col">
              <div class="form-group">
                <input type="radio" id="masculino" name="masculino" checked><label for="masculino"> Masculino</label>
                <input type="radio" id="feminino" name="feminino"><label for="feminino"> Feminino</label>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <input type="text" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
              </div> 
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 d-flex gap-1 justify-content-center align-items-center">
            <span style="color: #777;">+244</span>
            <input type="text" name="" oninput="this.className = ''">
          </div>

            <div class="col">
              <i class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
            </div>
          </div>
        </div>

        <div class="tab">
          <h2>introduza os dados da escola de providência</h2>
          <div class="form-group">
            <input type="text" placeholder="Nome da escola de providência" oninput="this.className = ''">
          </div>

          <div class="row">
            <div class="form-group col">
              <select oninput="this.className = ''" class="form-select">
                <optgroup label="Turno">
                  <option selected>Manhã</option>
                  <option>Tarde</option>
                  <option>Noite</option>
                </optgroup>
              </select>
            </div>

            <div class="form-group col">
              <input type="text" placeholder="Nº de estudante" oninput="this.className = ''">
            </div>

            <div class="form-group col">
              <input type="text" placeholder="Turma" oninput="this.className = ''">
            </div>

          </div>

          <div class="row">
            <div class="form-group col">
              <input type="text" placeholder="Processo nº" oninput="this.className = ''">
            </div>

            <div class="form-group col">
              <input type="text" placeholder="Ano Lectivo" oninput="this.className = ''">
            </div>
            
          </div>
        </div>

        <div class="tab">
          <h2>Escolha o curso segundo a ordem de preferência</h2>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a primeira opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a segunda opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a terceira opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Escolha a quarta opção</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
            </select>
          </div>

        </div>

        <div class="tab">
          <h2>Digite as médias para cada disciplina solicitada</h2>
          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Língua Portuguesa</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Matemática</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Física</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

          <div class="form-group">
            <select oninput="this.className = ''" class="form-select">
              <option selected>Química</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>

        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>            
    </div>
  </main><!-- Fim Area do Main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- /	Link dos js do bootstrap-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- /	Link do js main do projeto -->
  <script src="assets/js/candidato.js"></script>
  <script src="assets/js/form.js"></script>
</body>
</html>