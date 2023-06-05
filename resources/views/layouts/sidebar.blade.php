  <!-- /	Sidebar -->
  <aside id="sidebar" class="sidebar" >

    <ul class="sidebar-nav" id="sidebar-nav">

    	<!-- /	Nav Pagina inicial-->
      <li class="nav-item">
        <a class="nav-link " href={{route('inicio')}}>
          <i class="bi bi-ui-radios"></i>
          <span>Página inicial</span>
        </a>
      </li>

      <!-- /	Nav usuario-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#usuario-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Usuário</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="usuario-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="use_cadastro">
              <i class="bi bi-circle"></i><span>Cadastrar usuário</span>
            </a>
          </li>
          <li>
            <a href="usuarios">
              <i class="bi bi-circle"></i><span>Usuários</span>
            </a>
          </li>
        </ul>
      </li>

       	<!-- /	Nav Ano lectivo-->
	    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ano-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar-event"></i><span>Ano lectivo</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ano-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="ano-lectivo/criar-ano-letivo">
              <i class="bi bi-circle"></i><span>Criar ano lectivo</span>
            </a>
          </li>
          <li>
            <a href="ano-lectivo/ano-letivo">
              <i class="bi bi-circle"></i><span>Ano lectivo</span>
            </a>
          </li>
        </ul>
     </li>


        <!-- /	Nav Inscricoes-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#inscriacao-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pen"></i><span>Inscrição</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="inscriacao-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="inscricao/inscrever">
              <i class="bi bi-circle"></i><span>Inscrever candidato</span>
            </a>
          </li>
          <li>
            <a href="inscricao/inscricoes">
              <i class="bi bi-circle"></i><span>Inscrições</span>
            </a>
          </li>
          <li>
            <a href="inscricao/inscritos-online">
              <i class="bi bi-circle"></i><span>Inscritos Online</span>
            </a>
          </li>
          <li>
            <a href="inscricao/inscritos-rejeitados">
              <i class="bi bi-circle"></i><span>Inscritos Rejeitados</span>
            </a>
          </li>


        </ul>
      </li>

    	<!-- /	Nav Matricula-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#matricula-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Matrícula</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="matricula-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="matricula/matricular-aluno">
              <i class="bi bi-circle"></i><span>Matricular aluno</span>
            </a>
          </li>

          <li>
            <a href="matricula/matriculas">
              <i class="bi bi-circle"></i><span>Matriculas</span>
            </a>
          </li>

          <li>
            <a href="matricula/registrar-aluno">
              <i class="bi bi-circle"></i><span>Registrar Aluno</span>
            </a>
          </li>

        </ul>
      </li>

    	<!-- /	Nav Professor-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#professor-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Professor</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="professor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href={{ route('professor.cadastrar') }}>
              <i class="bi bi-circle"></i><span>Cadastrar Professores</span>
            </a>
          </li>
          <li>
            <a href={{ route('professor') }}>
              <i class="bi bi-circle"></i><span>Professores</span>
            </a>
          </li>
        </ul>
      </li>

    	<!-- /	Nav Turma-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#turma-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard"></i><span>Turma</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="turma-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="turma/cri-turma">
              <i class="bi bi-circle"></i><span>Criar turma</span>
            </a>
          </li>
          <li>
            <a href="turma/turmas">
              <i class="bi bi-circle"></i><span>Turmas</span>
            </a>
          </li>
        </ul>
      </li>

    	<!-- /	Nav Curso-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#curso-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book"></i><span>Curso</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="curso-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="curso/criar-curso">
              <i class="bi bi-circle"></i><span>Criar curso</span>
            </a>
          </li>
          <li>
            <a href="curso/cursos">
              <i class="bi bi-circle"></i><span>Cursos</span>
            </a>
          </li>
        </ul>
      </li>

    	<!-- /	Nav Comunicado-->
     	<li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#comunicado-nav" data-bs-toggle="collapse" href="#">
	          <i class="bi bi-map"></i><span>Comunicado</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="comunicado-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href={{ route('comunicado.create') }}>
	              <i class="bi bi-circle"></i><span>Criar comunicado</span>
	            </a>
	          </li>
	          <li>
	            <a href={{ route('comunicado.index') }}>
	              <i class="bi bi-circle"></i><span>Comunicados</span>
	            </a>
	          </li>
	        </ul>
	    </li>

          	<!-- /	Nav Pauta-->
	    <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#pauta-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar3"></i><span>Pauta</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="pauta-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="pauta/pautas">
	              <i class="bi bi-circle"></i><span>Pautas</span>
	            </a>
	          </li>
	        </ul>
	    </li>

          	<!-- /	Nav Mini-pauta-->
	    <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#mini-pauta-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-calendar-week"></i></i><span>Mini-Pauta</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="mini-pauta-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="mini-pauta/mini-pauta">
	              <i class="bi bi-circle"></i><span>Mini-Pautas</span>
	            </a>
	          </li>
	        </ul>
	    </li>

<!-- /	Nav horário-->
      <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#horario-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-clock"></i><span>Horário</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="horario-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="professor/horario-prof">
	              <i class="bi bi-circle"></i><span>Horários</span>
	            </a>
	          </li>
	        </ul>
	    </li>

      <!-- /	Nav Calendário de Prova-->
      <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#calprova-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-table"></i><span>Calendário de Prova</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="calprova-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="calend-prova/calendario-prova">
	              <i class="bi bi-circle"></i><span>Calendários de Provas</span>
	            </a>
	          </li>
	        </ul>
	    </li>

      <!-- /	Nav Ficha Biografica-->
      <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#biografica-nav" data-bs-toggle="collapse" href="#">
	          <i class="bi bi-calendar-event"></i><span>Ficha Biográfica</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="biografica-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="aluno/ficha-biog">
	              <i class="bi bi-circle"></i><span>Fichas Biográficas</span>
	            </a>
	          </li>
	        </ul>
	    </li>

      <!-- /	Nav Processo-->
      <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#processo-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-folder2-open"></i></i><span>Processo</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="processo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
	            <a href="processos">
	              <i class="bi bi-circle"></i><span>Processos</span>
	            </a>
	          </li>

	        </ul>
	    </li>

	<!-- /	Nav aluno-professor-->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#aluno-professor-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-clipboard"></i><span>Aluno</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="aluno-professor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="/alunos">
          <i class="bi bi-circle"></i><span>Alunos</span>
        </a>
      </li>

    </ul>
  </li>

      <!-- /	Nav Avaliação Aluno-->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#avaliacao-aluno-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard"></i><span>Avaliação</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="avaliacao-aluno-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/avaliar-aluno">
              <i class="bi bi-circle"></i><span>Avaliar Avaliação</span>
            </a>
          </li>
        </ul>
      </li>

    <!-- /	Nav assiduidade-professor-->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#assiduidade-professor-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-clipboard"></i><span>Assuiduidade</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="assiduidade-professor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="/assiduidade_aluno">
          <i class="bi bi-circle"></i><span>Assiduidades</span>
        </a>
      </li>
    </ul>
  </li>

   <!-- /	Nav disciplina-->

   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#disciplina-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-book-half"></i></i><span>Disciplina</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="disciplina-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="/regi-disciplina">
          <i class="bi bi-circle"></i><span>Cadastrar disciplina</span>
        </a>
      </li>
      <li>
        <a href="/disciplinas">
          <i class="bi bi-circle"></i><span>Disciplina</span>
        </a>
      </li>
    </ul>
  </li>

  <!-- /	Nav Perfil-->
<li class="nav-item">
  <a class="nav-link collapsed" href="perfil">
    <i class="bi bi-person"></i>
    <span>Perfil</span>
  </a>
</li>
  </aside><!-- Termina Sidebar-->
{{ route('professor') }}
