  <!-- /	Header  -->
  <header id="header" class="header fixed-top">

    <div class="topo d-flex">
    	<!-- /	Logo ipial-->
      <div class="d-flex justify-content-between">

        <div class="d-flex align-items-center" style="background-color: #96abce; padding-left: 30px; border-radius: 10px; padding-right: 100px;">
          <a href="#" class="logo d-flex align-items-center">

            <!--<img src="assets/img/logo.png" alt="">-->

            <span class="d-none d-lg-block">SIGE - IPIAL</span>

            <i class="bi bi-list toggle-sidebar-btn"></i>
          </a>
        </div>

        <div class="d-flex align-items-center" style="padding-left: 56px;">

    	   <a class="nav-link nav-perfil d-flex align-items-center pe-0" href="#">
            <img src={{ URL::asset(Auth::user()->imagem_usuario) }} alt="perfil" class="mini-foto-perf">
            <span class="d-none d-md-block ps-2">{{ Auth::user()->belongPessoa->nome_completo }} <br> <small>{{ Auth::user()->cargo_usuario }}</small></span>
          </a>

        </div>


      </div><!-- Termina Logo -->

      <!-- /	Menu do cabecalho -->
      <nav class="header-nav ms-auto d-flex align-items-center">
        <ul class="d-flex align-items-center">

        	<!-- /	Nav Notificacao-->
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-danger badge-number">2</span>
            </a><!-- Termina icone notificacao -->

            	<!-- /	Lista de notificacoes-->
          	<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
  	            <li class="dropdown-header">
  	              Chegou novas notificações
  	              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Mostrar tudo</span></a>
  	            </li>
  	            <li>
  	              <hr class="dropdown-divider">
  	            </li>

  	            <li class="notification-item">
  	              <i class="bi bi-exclamation-circle text-warning"></i>
  	              <div>
  	                <h4>Lorem Ipsum</h4>
  	                <p>Quae dolorem earum veritatis oditseno</p>
  	                <p>30 min. ago</p>
  	              </div>
  	            </li>

  	            <li>
  	              <hr class="dropdown-divider">
  	            </li>

  	            <li class="notification-item">
  	              <i class="bi bi-x-circle text-danger"></i>
  	              <div>
  	                <h4>Atque rerum nesciunt</h4>
  	                <p>Quae dolorem earum veritatis oditseno</p>
  	                <p>1 hr. ago</p>
  	              </div>
  	            </li>

  	            <li>
  	              <hr class="dropdown-divider">
  	            </li>

  	            <li class="dropdown-footer">
  	              <a href="#">Mostrar tudo</a>
  	            </li>
          	</ul><!-- Termina Lista de notificacoes -->

          </li><!-- Termina Nav Notificacao -->

			<li class="nav-item">
				<button type="button" class="btn nav-link nav-icon" data-bs-toggle="modal" data-bs-target="#basicModal">
					<i class="bi bi-box-arrow-right"></i>
				</button>

        	</li>


			<div class="modal fade" id="basicModal" tabindex="-1" data-bs-backdrop="false" style="color: #000;">
    			<div class="modal-dialog">
      				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>

						<div class="modal-body" style="color: #696969;">
							Tem a certeza de que pretende sair do sistema?
                    	</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
							<a class="btn btn-danger" href={{route('logout')}}>Sair</a>
						</div>

					</div>
				</div>
			</div>


        </ul>
      </nav><!-- Fim Menu do cabecalho -->

    </div>

  </header><!-- Fim Header -->
