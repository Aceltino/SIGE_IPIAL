<!-- /	Sidebar -->
<aside id="sidebar" class="sidebar sidebar-escuro">

{{-- Administrador ou Subdirector Pedagogico ----- / Menu do Administrador ou Subdirector Pedagogico --}}

@if(Auth::user()->cargo_usuario != "insc_user" && Auth::user()->cargo_usuario != "matri_user")

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- /	Nav Pagina inicial-->
    <li class="nav-item">
      <a class="nav-link " href={{route('inicio')}}>
        <i class="bi bi-ui-radios"></i>
        <span>Página inicial</span>
      </a>
    </li>

    <!-- /	Nav usuario-->
    @if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector")
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#usuario-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people-fill"></i><span>Usuário</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="usuario-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href={{ route('createUsuario') }}>
            <i class="bi bi-circle"></i><span>Cadastrar usuário</span>
          </a>
        </li>
        <li>
          <a href={{ route('consultUsuario') }}>
            <i class="bi bi-circle"></i><span>Usuários</span>
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

      <!-- /	Nav Ano lectivo-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#ano-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-calendar-event"></i><span>Ano lectivo</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="ano-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href={{route('cadastro.ano.lectivo')}}>
            <i class="bi bi-circle"></i><span>Criar ano lectivo</span>
          </a>
        </li>
        <li>
          <a href={{route('ano.lectivo')}}>
            <i class="bi bi-circle"></i><span>Ano lectivo</span>
          </a>
        </li>
      </ul>
    </li>
    @endif


    @if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector")
        <!-- /	Nav Area de formação-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#area-formacao-nav" data-bs-toggle="collapse" href="#">
          <i  class="bi bi-ui-radios-grid"></i><span>Área de formação</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="area-formacao-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="criar-areaformacao">
              <i class="bi bi-circle"></i><span>Cadastrar</span>
            </a>
          </li>
          <li>
            <a href="areaformacao">
              <i class="bi bi-circle"></i><span>Área de formação</span>
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
          <a href={{route('cadastro.curso')}}>
            <i class="bi bi-circle"></i><span>Criar curso</span>
          </a>
        </li>
        <li>
          <a href={{route('consultar.cursos')}}>
            <i class="bi bi-circle"></i><span>Cursos</span>
          </a>
        </li>
      </ul>
    </li>

      <!-- /	Nav Sala-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#sala-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-building-fill"></i><span>Sala</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="sala-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('criar.sala')}}">
            <i class="bi bi-circle"></i><span>Cadastrar sala</span>
          </a>
        </li>
        <li>
          <a href="{{ route('consultar.sala') }}">
            <i class="bi bi-circle"></i><span>Salas</span>
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
          <a href="{{route('turma-create')}}">
            <i class="bi bi-circle"></i><span>Criar turma</span>
          </a>
        </li>
        <li>
          <a href="{{route('turmas')}}">
            <i class="bi bi-circle"></i><span>Turmas</span>
          </a>
        </li>
      </ul>
    </li>
    @endif
    <!-- /	Nav disciplina-->
    @if(Auth::user()->cargo_usuario != "Aluno")
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#disciplina-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book-half"></i></i><span>Disciplina</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="disciplina-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          @if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector") 
            <li>
              <a href={{ route('criar.disciplina')}}>
                <i class="bi bi-circle"></i><span>Cadastrar disciplina</span>
              </a>
            </li>
          @endif

          @if(Auth::user()->cargo_usuario != "Aluno")
          <li>
            <a href={{ route('consultar.disciplina')}}>
              <i class="bi bi-circle"></i><span>Disciplina</span>
            </a>
          </li>
          @endif
        </ul>
      </li>
    @endif

    @if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector")
    <!-- /	Nav Professor-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#professor-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-lines-fill"></i><span>Professor</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="professor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href={{route('professor.cadastrar')}}>
            <i class="bi bi-circle"></i><span>Cadastrar Professores</span>
          </a>
        </li>
        <li>
          <a href={{route('professor')}}>
            <i class="bi bi-circle"></i><span>Professores</span>
          </a>
        </li>
      </ul>
    </li>
    @endif

    @if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector")
    <!-- /	Nav Inscricoes-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#inscriacao-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-pen"></i><span>Inscrição</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="inscriacao-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('inscricao-view')}}">
            <i class="bi bi-circle"></i><span>Inscrever candidato</span>
          </a>
        </li>
        <li>
          <a href="{{route('inscricao-index')}}">
            <i class="bi bi-circle"></i><span>Inscrições</span>
          </a>
        </li>

      </ul>
    </li>
    @endif

    @if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector")
    <!-- /	Nav Matricula-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#matricula-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Matrícula</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="matricula-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        <li>
          <a href="{{ route('Matriculas') }}">
            <i class="bi bi-circle"></i><span>Matriculas</span>
          </a>
        </li>

        <li>
          <a href="{{ route('registrar-view') }}">
            <i class="bi bi-circle"></i><span>Registrar Aluno</span>
          </a>
        </li>

      </ul>
    </li>
    @endif

    @if(Auth::user()->cargo_usuario != "Aluno" && Auth::user()->cargo_usuario != "Administrador" && Auth::user()->cargo_usuario != "Secretaria")

    <!-- /	Nav assiduidade-aluno-->
      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#assiduidade-aluno-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-clipboard"></i><span>Assuiduidade</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="assiduidade-aluno-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href={{route('assiduidade')}}>
          <i class="bi bi-circle"></i><span>Assiduidades</span>
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
        <a href={{route('avaliacao.aluno')}}>
          <i class="bi bi-circle"></i><span>Avaliar Aluno</span>
        </a>
      </li>
      <li>
        <a href="/recurso_aluno">
          <i class="bi bi-circle"></i><span>Recurso</span>
        </a>
      </li>
      <li>
        <a href="/exame_aluno">
          <i class="bi bi-circle"></i><span>Exame Especial</span>
        </a>
      </li>
    </ul>
    </li>

  @endif

    @if(Auth::user()->cargo_usuario != "Aluno")

  <!-- /	Nav Mini-pauta-->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#mini-pauta-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-calendar-week"></i></i><span>Mini-Pauta</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="mini-pauta-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href={{ route('mini-pauta') }}>
          <i class="bi bi-circle"></i><span>Mini-Pautas</span>
        </a>
      </li>
    </ul>
  </li>
  @endif

    @if(Auth::user()->cargo_usuario != "Aluno")
    <!-- /	Nav Pauta-->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pauta-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-calendar3"></i><span>Pauta</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pauta-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href={{ route('pauta') }}>
              <i class="bi bi-circle"></i><span>Pautas</span>
            </a>
          </li>
        </ul>
    </li>
    @endif

  {{-- <!-- Nav Boletim-->
    @if(Auth::user()->cargo_usuario == "Aluno")
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-journal-bookmark"></i>
        <span>Boletim de Notas</span>
      </a>
    </li>
    @endif--}}
    

    <!-- /	Nav horário-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#horario-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-clock"></i><span>Horário</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="horario-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        @if(Auth::user()->cargo_usuario == "Aluno")
          <li>
            <a href="horario-turma">
              <i class="bi bi-circle"></i><span>Ver horário</span>
            </a>
          </li>
        @endif
        @if(Auth::user()->cargo_usuario != "Aluno")
        <li>
        <a href={{ route('criar-horario') }}>
            <i class="bi bi-circle"></i><span>Criar horário</span>
          </a>
        </li>
        <li>
        
          <a href="ver-horarios">
            <i class="bi bi-circle"></i><span>Ver horários</span>
          </a>
        </li>
        @endif
      </ul>
    </li>

    @if (Auth::user()->cargo_usuario == "Aluno")
    <!-- /	Controle de faltas-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-calendar-x"></i>
        <span>Controle de faltas</span>
      </a>
    </li>

    <!-- /	Boletim de notas-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-clipboard-data"></i>
        <span>Boletim de notas</span>
      </a>
    </li>

    <!-- / Solicitação de	Documentos -->
    <!-- /	Justificativo de faltas-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-file-medical"></i>
        <span>Justificativo de faltas</span>
      </a>
    </li>

    <!-- /	Declarações-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-files"></i>
        <span>Declarações</span>
      </a>
    </li>

    <!-- /	Certificado-->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-file-pdf"></i>
        <span>Certificado</span>
      </a>
    </li>

    @endif
    
    @if(Auth::user()->cargo_usuario != "Professor" && Auth::user()->cargo_usuario != "Aluno")
    <!-- /	Nav Processo-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#processo-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-folder2-open"></i></i><span>Processo</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="processo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>



           <a href={{route('processo.consultar')}}> 

            <i class="bi bi-circle"></i><span>Processos</span>
          </a>
        </li>

      </ul>
    </li>
    @endif

    
    <!-- /	Nav Perfil-->
    <li class="nav-item">
      <a class="nav-link collapsed" href={{route('perfil')}}>
        <i class="bi bi-person"></i>
        <span>Perfil</span>
      </a>
    </li>

    @if(Auth::user()->cargo_usuario == "Administrador")
    <!-- /	Nav Backup-->
      <li class="nav-item" style="text-align: center;">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalResgBackup" style="cursor: pointer;">
          <i class="bi bi-back"></i>
          <span>Backup</span>
        </a>
      </li>

    <!-- /	Nav Configuracoes-->
    <li class="nav-item" style="text-align: center;">
      <a class="nav-link" style="cursor: pointer;" href="/configuracoes">
        <i class="bi bi-gear"></i>
        <span>Configurações</span>
      </a>
    </li>
    @endif
  </ul>
@elseif(Auth::user()->cargo_usuario == "insc_user")
<ul class="sidebar-nav" id="sidebar-nav">

    <!-- /	Nav Pagina inicial-->
    <li class="nav-item">
      <a class="nav-link " href={{route('inicio')}}>
        <i class="bi bi-ui-radios"></i>
        <span>Página inicial</span>
      </a>
    </li>
    <!-- /	Nav Inscricoes-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#inscriacao-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-pen"></i><span>Inscrição</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="inscriacao-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('inscricao-view')}}">
            <i class="bi bi-circle"></i><span>Inscrever candidato</span>
          </a>
        </li>
        <li>
          <a href="{{route('inscricao-index')}}">
            <i class="bi bi-circle"></i><span>Inscrições</span>
          </a>
        </li>

      </ul>
    </li>
    <!-- /	Nav Perfil-->
    <li class="nav-item">
      <a class="nav-link collapsed" href={{route('perfil')}}>
        <i class="bi bi-person"></i>
        <span>Perfil</span>
      </a>
    </li>
</ul>
@elseif(Auth::user()->cargo_usuario == "matri_user")
<ul class="sidebar-nav" id="sidebar-nav">

    <!-- /	Nav Pagina inicial-->
    <li class="nav-item">
      <a class="nav-link " href={{route('inicio')}}>
        <i class="bi bi-ui-radios"></i>
        <span>Página inicial</span>
      </a>
    </li>
    <!-- /	Nav Matricula-->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#matricula-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Matrícula</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="matricula-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        <li>
          <a href="{{ route('Matriculas') }}">
            <i class="bi bi-circle"></i><span>Matriculas</span>
          </a>
        </li>

        <li>
          <a href="{{ route('registrar-view') }}">
            <i class="bi bi-circle"></i><span>Registrar Aluno</span>
          </a>
        </li>

      </ul>
    </li>
    <!-- /	Nav Perfil-->
    <li class="nav-item">
      <a class="nav-link collapsed" href={{route('perfil')}}>
        <i class="bi bi-person"></i>
        <span>Perfil</span>
      </a>
    </li>
</ul>
@endif
</aside><!-- Termina Sidebar-->

<div class="modal fade" id="modalResgBackup" tabindex="-1" data-bs-backdrop="false">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
      <div class="modal-header" style="border: none;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" style="text-transform: uppercase; text-align: center;"> 
        Backup Manual <strong>.</strong> Deseja continuar?
        
      </div>

      <div class="modal-footer" style="border: none;">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>

        <form action="#" method="post">
          @csrf
          <button type="submit" class="btn btn-secondary"> Iniciar Backup</button>
        </form>
      </div>

    </div>
  </div>
	</div>