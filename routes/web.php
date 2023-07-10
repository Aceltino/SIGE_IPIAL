<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    //Classes das Controllers
    inicioController,
    AuthController,InscricaoController,ProfessorController,
    AlunoController,MatriculaController,CursoController,
    comunicadosController,AssiduidadeAlunoController,
    AvaliacaoAlunoController,AnoLectivoController,
    MiniPautaController,UserController,PautaController,
    PerfilUserController,ProcessoController,
    DisciplinasController, AdmissaoController,
    AlunoTurmaController,
    TurmaController, CalendarioController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rota apenas de teste... Não apague -> ACELTINO
    Route::get('validar-aluno', [AlunoTurmaController::class, 'pegarTurmas']);
// Route::get('validar-aluno', [AlunoController::class, 'situacaoAluno']);


//Rotas inicial do Painel
Route::get('/', [inicioController::class,'inicio'])->name('inicio')->middleware(['auth','active.session']);
/*
Route::get('/', function () {
    return view('pagina-inicial');
})->name('inicio')->middleware(['auth','active.session']);*/

 //Rota final do painel
 Route::get('logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');

//Routas para Autenticação no Sistema
Route::prefix('autenticacao')->middleware(['guest'])->group(function(){

    //Rota de Login
    Route::get('login', [AuthController::class,'loginForm'])->name('login');
    Route::post('login',[AuthController::class,'loginCheck'])->name('loginCheck');

    //Rota de Cadastro
    Route::post('registrar', [AuthController::class,'storeInicio'])->name('registrar');

    //Rota para envio de email para redifinição de senha
    Route::get('reset', [AuthController::class,'resetForm'])->name('recuperar-senha');
    Route::post('reset/link', [AuthController::class, 'envioLinkEmail'])->name('password-email');

    //Rota para redifinição de senha
    Route::get('reset/{token}', [AuthController::class, 'resetPasswordForm'])->name('nova-password');
    Route::post('reset',[AuthController::class, 'processarRedefinicaoPassword'])->name('password-update');

});

/*****************************
 ** Rota do perfil de usuario **
 ******************************/

Route::prefix('Perfil')->middleware(['auth','active.session'])->group(function(){
    Route::get('/',[PerfilUserController::class,'index'])->name('perfil');
    Route::put('update',[PerfilUserController::class,'update'])->name('perfil-update');
    Route::patch('password',[PerfilUserController::class,'changePassword'])->name('updatePassword');
});


/******************************************
 * Rotas de inscricao __ !!! - Admissão
 */
Route::prefix('inscricao')->middleware(['auth','active.session','checkcargo'])->group(function(){

    /*Inscricoes ou alunos inscritos */

    // Route::get('inscricoes', [ConsumoApiController::class, 'consumoinscricao']);
     Route::get('inscricoes', [InscricaoController::class, 'index'])->name('inscricao-index');

    /*Inscrever candidato */
    Route::get('inscrever', [InscricaoController::class, 'create'])->name('inscricao-view')->middleware(['inscriCheck']);
    Route::post('inscrever', [InscricaoController::class, 'store'])->name('inscricao-store')->middleware(['inscriCheck']);

    // Admitir inscrito
    Route::get('admitir', [AdmissaoController::class, 'admitirCandidatos'])->name('admitir-inscritos')->middleware(['inscriCheck']);

    // Editar inscrito
    Route::get('editar-candidato/{candidato}/editar', [InscricaoController::class, 'edit'])->name('inscricao-edit')->middleware(['inscriCheck']);
    Route::put('editar-candidato/{candidato}', [InscricaoController::class, 'update'])->name('inscricao-update')->middleware(['inscriCheck']);

    Route::get('recibo', function () {
            return view('recibo/recibo-incricao');
        });

    /*Editar candidato */

    /*Inscritos online */
    // Route::get('inscritos-online', function () {
    //     return view('inscricao/inscritos-online');
    // });

    // /*Incritos rejeitados */

    // /*Confirmar inscricao*/
    // Route::get('conf-inscricao', function () {
    //     return view('inscricao/conf-inscricao');
    // });

    /* Rejeitar inscricao */
    // Route::get('rej-inscricao', function () {
    //     return view('inscricao/rejeitar-inscricao');
    //     });

    // /* Rejeitar inscricao */
    // Route::get('admissoes', function () {
    // return view('inscricao/admissoes');
    // });
});

/**<!--Fim Rotas de inscricao--> */


/******************************************
 * Rotas das matriculas
 */

Route::prefix('matricula')->middleware(['auth','active.session','checkcargo'])->group(function(){

    /* Matriculas*/
    Route::get('matriculas', [MatriculaController::class, 'index'])->name('Matriculas');

    /*Eliminar/Inativar Matricula*/
    Route::get('inativar/{aluno}', [MatriculaController::class, 'anularMatricula'])->name('inativar-matricula');
    Route::get('eliminar/{aluno}', [MatriculaController::class, 'eliminarMatricula'])->name('eliminar-matricula');

    // Atribuir turma 10ª classe
    Route::get('matricula-turma',  [MatriculaController::class, 'atribuirTurma'])->name('matricula-validarTurma');

    /*Matricular aluno */
    Route::get('matricular-aluno/{candidato}',  [MatriculaController::class, 'create'])->name('matricula-view');
    Route::post('matricular-aluno/{candidato}', [MatriculaController::class, 'store'])->name('matricula-store');

    /*Editar matricula */
    Route::get('editar-aluno/{aluno}/editar', [MatriculaController::class, 'edit'])->name('matricula-edit');
    Route::put('editar-aluno/{aluno}', [MatriculaController::class, 'update'])->name('matricula-update');

    /*Readimitir aluno */
    Route::get('readmitir-aluno/{aluno}/readmitir', [MatriculaController::class, 'readmitirEdit'])->name('readmitir-view');

    /*Registrar aluno */
    Route::get('registrar-aluno',[MatriculaController::class, 'registrarView'])->name('registrar-view');
    Route::post('registrar-aluno',[MatriculaController::class, 'registrarStore'])->name('registrar-store');



    // /*Aluno ativo */
    // Route::get('aluno-ativo', function () {
    //     return view('matricula/aluno-ativo');
    // });

    // /*Aluno inativo */
    // Route::get('aluno-inativo', function () {
    //     return view('matricula/aluno-inativo');
    // });
});
/**<!--Fim Rotas de matriculas--> */


/******************************************
 * Rotas de professor
 **/
Route::prefix('professor')->middleware(['auth','active.session','checkcargo'])->group(function(){

    Route::get('rota/{segmento}', [ProfessorController::class, 'editarProfessor'])->name('prof.rota');

    Route::get('cadastrar-professor', [ProfessorController::class, 'create'])->name('professor.cadastrar');
    Route::post('cadastrar-professor', [ProfessorController::class, 'store'])->name('prof.postRegistar');

    Route::get('consultar-professor', [ProfessorController::class, 'index'])->name('professor');

    Route::get('editar/{id}', [ProfessorController::class, 'editar'])->name('professor.Editar');
    Route::post('editar/{id}', [ProfessorController::class, 'atualizar'])->name('professor.atualizar');
    Route::get('dados-pessoais/{id}', [ProfessorController::class, 'profDadosPessoais'])->name('professor.dados-pessoais');

    Route::get('horario/{id}', [ProfessorController::class, 'horarioProf'])->name('horarioProfessor');
    Route::get('avaliacao/{id}', [ProfessorController::class, 'avaliacao'])->name('avaliacao');
});
/**<!--Fim Rotas de Professor--> */


/******************************************
 * Rotas das turmas
 */
Route::prefix('turma')->middleware(['auth','active.session','checkcargo'])->group(function(){

    /* Criar turma*/
    Route::get('criar-turma', [TurmaController::class, 'createTurma'])->name('turma-create');
    Route::post('criar-turma', [TurmaController::class, 'storeTurma'])->name('turma-store');
     /* Criar turma*/
    Route::get('turmas', [TurmaController::class, 'turmas'])->name('turmas');

});
/**<!--Fim Rotas turma--> */

/******************************************
 * Rotas de aluno
 */
Route::prefix('aluno')->middleware(['auth','active.session','checkcargo'])->group(function(){

    Route::get('boletim-notas', function () {
        return view('boletim/boletim-notas');
    });

});
/**<!--Fim Rotas aluno--> */


/******************************************
 * Rotas de curso
 */
Route::prefix('curso')->middleware(['auth','active.session','checkcargo'])->group(function(){

    Route::get('criar-curso', [CursoController::class, 'indexCadastro'])->name('cadastro.curso');
    Route::post('criar-curso/cadastrar', [CursoController::class, 'store'])->name('cadastrar.curso');

    Route::get('cursos', [CursoController::class, 'index'])->name('consultar.cursos');

    Route::get('editar-curso/{id}', [CursoController::class, 'indexEditar'])->name('editar.curso');
    Route::put('editar-curso/actualizar/{id}', [CursoController::class, 'update'])->name('editar.dados.curso');
    Route::delete('apagar-curso/{id}', [CursoController::class, 'delete'])->name('apagar.curso');


});
/**<!--Fim Rotas curso--> */

/******************************************
 * Rotas do ano-lectivo ->middleware(['auth','checkcargo'])
 */

Route::prefix('ano-lectivo')->middleware(['auth','active.session','checkcargo'])->group(function(){

    Route::get('criar-ano-letivo', [AnoLectivoController::class, 'indexCadastroAnoLectivo'])->name('cadastro.ano.lectivo');
    Route::post('criar-ano-letivo/cadastrar', [AnoLectivoController::class, 'store'])->name('cadastrar.ano.lectivo');

    Route::get('ano-letivo', [AnoLectivoController::class, 'index'])->name('ano.lectivo');

    Route::get('editar-ano-letivo/{id}', [AnoLectivoController::class, 'indexUpdate'])->name('editar.ano.lectivo');
    Route::put('editar-ano-letivo/editar', [AnoLectivoController::class, 'update'])->name('update.ano.lectivo');

    Route::delete('apagar-ano-lectivo/{id}', [AnoLectivoController::class, 'delete'])->name('apagar.ano.lectivo');

});


/**<!--Fim Rotas ano lectivo--> */


/******************************************
 * Rotas da ficha biografica-lectivo
 */
Route::prefix('ficha-biog')->middleware(['auth','active.session','checkcargo'])->group(function(){

    Route::get('fichas-biograficas', function () {
        return view('ficha-biog/ficha-biog');
    })->name('fichaBiografica');

    Route::get('fichasBio', function () {
        return view('ficha-biog/ficha-biografica-doc');
    })->name('formFichaBiografica');
});

/******************************************
 * Rotas do processo do Aluno
 */
Route::prefix('processo')->middleware(['auth','active.session'])->group(function(){
    Route::get('processos',[ProcessoController::class, 'index'])->name('processo.consultar');
    Route::get('Visual-processo/{aluno_id}', [ProcessoController::class, 'visualizar'])->name('visual-processo');
    Route::delete('{aluno_id}',[ProcessoController::class, 'destroy'])->where('aluno_id', '[0-9]+')->name('processo.deletar');
});

/******************************************
 * Rotas de pauta
 */
Route::prefix('pautas')->middleware(['auth','active.session'])->group(function(){

    //Rotas do sistema
    Route::get('/', [PautaController::class, 'index'])->name('pauta');

    //Rotas do Documento
    Route::get('ver-pauta/{id}/{ano}', [PautaController::class, 'show'])->name('pauta.show')->middleware(['checkusernecessario']);
});

/******************************************
 * Rotas de mini-pauta
 */
Route::prefix('mini-pauta')->middleware(['auth','active.session'])->group(function(){
    Route::get('mini-pauta', [MiniPautaController::class, 'index'])->name('mini-pauta');
    Route::get('ver-mini-pauta', [MiniPautaController::class, 'show'])->name('mini-pauta.show');
    Route::get('{turma}/{curso}', [MiniPautaController::class, 'turma'])->name('mini-pauta.turma');
    Route::get('ver/{turma_id}/{disciplina_id}', [MiniPautaController::class, 'view'])->name('mini-pauta.view');
});

/******************************************
 * Rotas do Comunicado
 */
Route::prefix('comunicado')->middleware(['auth','active.session','checkcargo'])->group(function(){

    Route::get('consultar-comunicado', [comunicadosController::class, 'index'])->name('comunicado.index');
    Route::get('criar-comunicado', [comunicadosController::class, 'create'])->name('comunicado.create');
    Route::post('criar-comunicado', [comunicadosController::class, 'store'])->name('comunicado.store');
    Route::get('editar-comunicado/{comunicado_id}', [comunicadosController::class, 'edit'])->where('comunicado_id', '[0-9]+')->name('comunicado.edit');
    Route::put('{comunicado_id}', [comunicadosController::class, 'update'])->where('comunicado_id', '[0-9]+')->name('comunicado.update');
    Route::delete('{comunicado_id}', [comunicadosController::class, 'destroy'])->where('comunicado_id', '[0-9]+')->name('comunicado.destroy');
});


/******************************************
 * Rotas do usuário
 ****************************************/

Route::prefix('usuario')->middleware(['auth','checkcargo','active.session'])->group(function(){

    Route::get('/', [UserController::class,'index'])->name('consultUsuario');

    Route::get('cadastro',[UserController::class,'usuarioFormCadastro' ])->name('createUsuario');
    Route::post('cadastro',[AuthController::class,'store'])->name('storeUsuario');

    Route::get('editar/{id}', [UserController::class,'show'])->name('editUser');
    Route::put('update/{id}',[UserController::class,'updateUser'])->name('updateUser');

    Route::patch('estado/{id}',[UserController::class,'userStateChange'])->name('stateChange');
    Route::post('resgate/{id}',[AuthController::class,'reenviarCredencias'])->name("reenviarCredencias");
});
/**************************************************
 * Rotas do Calendario de provas
 */
/* Calendario de provas*/
Route::prefix('calend-prova')->group(function(){

    Route::get('calend-prova',[CalendarioController::class,'index'])->name('consultar.calendario');
    Route::get('cri-calend-prov',[CalendarioController::class, 'create'])->name('criar.calendario');
    Route::get('edit-calend-prova', function(){
        return view('calend-prova/edit-calend-prova');
    })->name('editar.calendario');
});


/******************************************
 * Rotas da Assiduidade de Aluno
 */

 /*ERRO Avaliação de Aluno*/
Route::get('erroassid',  function () {
    return view('assiduid-aluno/erroassid.blade');
});

/* Assiduidade de alunos*/
Route::get('/assiduidade-aluno', [AssiduidadeAlunoController::class, 'index'])->name('assiduidade');
Route::post('/assiduidade-aluno/marcar-falta/{aluno_id}/{disciplina_id}/{turma_id}/{professor_disciplina_id}', [AssiduidadeAlunoController::class, 'store'])->name('marcar.falta');

/*justificar ou editar assiduidade*/
Route::get('/editar-assiduidade/{aluno_id}/{disciplina_id}', [AssiduidadeAlunoController::class, 'show'])->name('editar.assiduidade');
Route::put('/editar-assiduidade/justificar-falta/{assiduidade_id}', [AssiduidadeAlunoController::class, 'update'])->name('justificar.falta');

/******************************************
 * Rotas da Avaliação de Aluno
 */

/*Avaliação de Aluno*/
Route::get('/avaliar-aluno', [AvaliacaoAlunoController::class, 'index'])->name('avaliacao.aluno');
Route::post('/avaliar-aluno/cadastrar{id_disciplina}', [AvaliacaoAlunoController::class, 'store'])->name('avaliar.aluno');


/*editar Avaliação de Aluno*/
Route::get('/editar-avaliacao-aluno/{id_aluno}/{id_disciplina}', [AvaliacaoAlunoController::class, 'indexUpdate'])->name('editar.avaliacao.aluno');
Route::put('/editar-avaliacao-aluno/update/{id_nota}', [AvaliacaoAlunoController::class, 'update'])->name('update.nota.aluno');

/*Exame de aluno de Aluno*/
Route::get('exame_aluno',  function () {
    return view('avaliac-aluno/exame');
});

Route::get('exames_histo',  function () {
    return view('avaliac-aluno/edit-exame');
});
Route::get('edit_exame',  function () {
    return view('avaliac-aluno/edit-exame');
});

/*ERRO Avaliação de Aluno*/
Route::get('erroavaliar',  function () {
    return view('avaliac-aluno/erroaval');
})->name('erroavaliar');

/*Recurso de Aluno*/
Route::get('recurso_aluno',  function () {
    return view('avaliac-aluno/recurso');
});
Route::get('recurso_histo',  function () {
    return view('avaliac-aluno/edit-recurso');
});
Route::get('edit_recurso',  function () {
    return view('avaliac-aluno/edit-exame');
});

/******************************************
 * Rotas do horário
******************************************/

/*Criar horário*/
Route::get('/criar-horario', function () {
    return view('horario/criar-horario');
});

/*Ver o horário da turma*/
Route::get('/horario-turma', function () {
    return view('horario/horario-turma');
});

/*Editar horário*/
Route::get('/editar-horario', function () {
    return view('horario/editar-horario');
});


/******************************************
 * Rotas disciplina
*/

/*Cadastrar disciplina*/
Route::prefix('disciplina')->middleware(['auth','active.session','checkcargo'])->group(function(){
        Route::get('disciplinas', [DisciplinasController::class,'index'])->name('consultar.disciplina');
        Route::get('regi-disciplina',[DisciplinasController::class, 'create'])->name('criar.disciplina');
        Route::post('regi-disciplina', [DisciplinasController::class, 'store'])->name('disciplina.store');
        Route::get('edit-disciplina/{disciplina_id}', [DisciplinasController::class, 'edit'])->where('disciplina_id','[0-9]+')->name('disciplina.edit');
        Route::put('{disciplina_id}', [DisciplinasController::class, 'update'])->where('disciplina_id', '[0-9]+')->name('disciplina.update');
        Route::delete('{disciplina_id}', [DisciplinasController::class, 'destroy'])->where('disciplina_id', '[0-9]+')->name('disciplina.delete');
});
