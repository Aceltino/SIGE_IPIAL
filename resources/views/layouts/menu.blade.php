  <!-- /	Header  -->
  <header id="header" class="header fixed-top header-escuro">

    <div class="topo d-flex topo-escuro">
    	<!-- /	Logo ipial-->
      <div class="d-flex justify-content-between">

        <div class="area-logo d-flex align-items-center area-logo-escuro">
          <a href="#" class="logo d-flex align-items-center">

            <!--<img src="assets/img/logo.png" alt="">-->

            <span class="d-none d-lg-block">SIGE - IPIAL</span>

            <i class="bi bi-list toggle-sidebar-btn"></i>
          </a>
        </div>

        <div class="d-flex align-items-center" style="padding-left: 56px;">

    	   <a class="nav-link nav-perfil d-flex align-items-center pe-0" href={{route('perfil')}}>
			@if(Auth::user()->imagem_usuario!="")
            	<img src={{ URL::asset(Auth::user()->imagem_usuario) }} alt="perfil" class="mini-foto-perf">
			@else
				<img src={{URL::asset("img/foto.jpg")}} alt="perfil" class="mini-foto-perf">
			@endif

            <span class="d-none d-md-block ps-2">{{ isset(Auth::user()->pessoa->nome_completo) ? Auth::user()->pessoa->nome_completo: "" }} <br> <small>{{ isset(Auth::user()->cargo_usuario) ? Auth::user()->cargo_usuario: "Sem Cargo"}}</small></span>
          </a>

        </div>


      </div><!-- Termina Logo -->

      <!-- /	Menu do cabecalho -->
      <nav class="header-nav ms-auto d-flex align-items-center">
        <ul class="d-flex align-items-center">
			<li class="nav-item pe-3">
				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
				<span class="lua ps-2">Modo escuro</span>
				<span class="sol ps-2">Modo claro</span>
				</a>
          	</li>

			<li class="nav-item">
				<span class="nav-link nav-icon muda-modo">
				<input type="checkbox" class="btn-mudar-tema" name="change-theme" id="change-theme">
				<label for="change-theme">
					<i class="sol bi bi-toggle-on"></i>
					<i class="lua bi bi-toggle-off"></i>
				</label>
				</span>
          	</li>
			<li class="nav-item">
				<button type="button" class="btn nav-link nav-icon" data-bs-toggle="modal" data-bs-target="#basicModal">
					<i class="bi bi-box-arrow-right"  style="color: red; font-weight: 800;"></i>
				</button>

        	</li>


			<div class="modal fade" id="basicModal" tabindex="-1" data-bs-backdrop="false">
    			<div class="modal-dialog">
      				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>

						<div class="modal-body">
							<strong>Tem a certeza de que pretende sair do sistema?</strong>
                    	</div>

						<div class="modal-footer" style="border: none;">
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
