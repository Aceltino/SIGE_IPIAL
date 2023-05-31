<?php

use App\Http\Controllers\{
    //Classes das Controllers
    AuthController,
    MatriculaController,
    InscricaoController
};
use Illuminate\Support\Facades\Route;

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


//Rotas do Painel
Route::get('/', function () {
    return view('pagina-inicial');
})->name('inicio')->middleware('auth');


//Routas para Autenticação no Sistema
Route::prefix('autenticacao')->group(function(){

    //Rota de Login
    Route::get('login', [AuthController::class,'loginForm'])->name('login');
     Route::post('login',[AuthController::class,'loginCheck'])->name('loginCheck');

    //Rota de Cadastro
    Route::post('registrar', [AuthController::class,'store'])->name('registrar');

    //CODIFICANDO...
    Route::get('/lembrar', function () {
        return view('autenticacao/recuperar-senha');
    })->name('recuperar-senha');

    /* Routas para enviou de Dados (Login)*/
    Route::post('login',[AuthController::class,'loginCheck'])->name('loginCheck');
});


/******************************************
 * Rotas de inscricao
 */
Route::prefix('inscricao')->group(function(){

    /*Inscricoes ou alunos inscritos */
    Route::get('inscricoes', function () {
        return view('inscricao/inscricoes');
    });

    /*Inscrever candidato */
    Route::get('inscrever', [InscricaoController::class, 'create'])->name('inscricao-view');
    Route::post('inscrever', [InscricaoController::class, 'store'])->name('inscricao-store');


    /*Editar candidato */
    Route::get('editar-candidato', function () {
        return view('inscricao/edit-candidato');
    });

    /*Inscritos online */
    Route::get('inscritos-online', function () {
        return view('inscricao/inscritos-online');
    });

    /*Incritos rejeitados */
    Route::get('inscritos-rejeitados', function () {
        return view('inscricao/inscritos-rejeitados');
    });

    /*Confirmar inscricao*/
    Route::get('conf-inscricao', function () {
        return view('inscricao/conf-inscricao');
    });

    /* Rejeitar inscricao */
    Route::get('rej-inscricao', function () {
        return view('inscricao/rejeitar-inscricao');
        });

    /* Rejeitar inscricao */
    Route::get('admissoes', function () {
    return view('inscricao/admissoes');
    });
});

/**<!--Fim Rotas de inscricao--> */


/******************************************
 * Rotas das matriculas
 */
    //Rota de Login



Route::prefix('matricula')->group(function(){

    /* Matriculas*/
    Route::get('matriculas', function () {
        return view('matricula/matriculas');
    });

    /*Matricular aluno */
    Route::get('matricular-aluno',  [MatriculaController::class, 'create'])->name('matricula');
    Route::post('matricular-aluno', [MatriculaController::class, 'store'])->name('matricular');

    /*Editar matricula */
    Route::get('editar-matricula', function () {
        return view('matricula/edit-matricula');
    });

    /*Readimitir aluno */
    Route::get('readmitir-aluno', function () {
        return view('matricula/readmitir-aluno');
    });

    /*Aluno ativo */
    Route::get('aluno-ativo', function () {
        return view('matricula/aluno-ativo');
    });

    /*Aluno inativo */
    Route::get('aluno-inativo', function () {
        return view('matricula/aluno-inativo');
    });

    /*Registrar aluno */
    Route::get('registrar-aluno', function () {
        return view('matricula/registrar-aluno');
    });

    /*Alunos registrados */
    Route::get('alunos-registrado', function () {
        return view('matricula/alunos-registrado');
    });

    /*Editar registro */
    Route::get('editar-registro', function () {
        return view('matricula/edit-registro-aluno');
    });
});
/**<!--Fim Rotas de matriculas--> */


/******************************************
 * Rotas de professor
 */
Route::prefix('professor')->group(function(){

    Route::get('cadastrar-professor', function () {
        return view('professor/cadastrar-prof');
    });

    Route::get('consultar-professor', function () {
        return view('professor/consultar-prof');
    });

    Route::get('editar-dados-professor', function () {
        return view('professor/editar-dados-prof');
    });

    Route::get('horario-professor', function () {
        return view('professor/horario-prof');
    });
});

/**<!--Fim Rotas de Professor--> */


/******************************************
 * Rotas das turmas
 */

Route::prefix('turma')->group(function(){

    /* Criar turma*/
    Route::get('criar-turma', function () {
        return view('turma/cri-turma');
    });

    /*Trumas */
    Route::get('turmas', function () {
        return view('turma/turmas');
    });

    /*Editar turma */
    Route::get('editar-turma', function () {
        return view('turma/edit-turma');
    });
});
/**<!--Fim Rotas turma--> */


/*Editar turma */
Route::get('editar-turma', function () {
    return view('turma/edit-turma');
});/**<!--Fim Rotas turma--> */

/******************************************
 * Rotas de aluno
 */
Route::prefix('aluno')->group(function(){

    Route::get('boletim-notas', function () {
        return view('boletim/boletim-notas');
    });

});
/**<!--Fim Rotas aluno--> */


/******************************************
 * Rotas de curso
 */
Route::prefix('curso')->group(function(){

    Route::get('criar-curso', function () {
        return view('curso/criar-curso');
    });

    Route::get('cursos', function () {
        return view('curso/cursos');
    });

    Route::get('editar-curso', function () {
        return view('curso/edit-curso');
    });
});
/**<!--Fim Rotas curso--> */

/******************************************
 * Rotas do ano-lectivo
 */
Route::prefix('ano-lectivo')->group(function(){

    Route::get('criar-ano-letivo', function () {
        return view('ano-lectivo/criar-aluno-lect');
    });

    Route::get('ano-letivo', function () {
        return view('ano-lectivo/ano-lect');
    });

    Route::get('editar-ano-letivo', function () {
        return view('ano-lectivo/edit-ano-letivo');
    });

    Route::get('ano-letivo', function () {
        return view('ano-lectivo/ano-lect');
    });

    Route::get('editar-ano-letivo', function () {
        return view('ano-lectivo/edit-ano-letivo');
    });

});

/**<!--Fim Rotas ano lectivo--> */

/**
 * Rota do perfil de usuario
 */
Route::get('perfil', function () {
    return view('perfil/perfil');
})->name('perfil');

/******************************************
 * Rotas da ficha biografica-lectivo
 */
Route::prefix('ficha-biog')->group(function(){

    Route::get('fichas-biograficas', function () {
        return view('ficha-biog/ficha-biog');
    });
    Route::get('fichas-biograficas-doc', function () {
        return view('ficha-biog/ficha-biografica-doc');
    });
});

/******************************************
 * Rotas do processo do Aluno
 */
Route::prefix('processo')->group(function(){
    Route::get('processos', function () {
        return view('processo/processos');
    });
});
/******************************************
 * Rotas de pauta
 */
Route::prefix('pauta')->group(function(){
    Route::get('pautas', function () {
        return view('pauta/pautas');
    });
    Route::get('ver-pauta', function () {
        return view('pauta/pauta-doc');
    });
});
/******************************************
 * Rotas de mini-pauta
 */
Route::prefix('mini-pauta')->group(function(){
    Route::get('mini-pauta', function () {
        return view('mini-pauta/mini-pauta');
    });
    Route::get('ver-mini-pauta', function () {
        return view('mini-pauta/mini-pauta-doc');
    });

});
/******************************************
 * Rotas do Comunicado
 */
Route::prefix('comunicado')->group(function(){

    Route::get('criar-comunicado', function () {
        return view('comunicado/criar-comunicado');
    });

    Route::get('editar-comunicado', function () {
        return view('comunicado/editar-comunicado');
    });

    Route::get('comunicados', function () {
        return view('comunicado/comunicado');
    });
});

/******************************************
 * Rotas do cadastro de usuário
 */
/* cadastrar usuario*/
Route::prefix('usuario')->group(function(){

    Route::get('use_cadastro', function () {
        return view('usuario/use_cadastro');
    });

    /*Matricular aluno */
    Route::get('usuarios', function () {
        return view('usuario/usuarios');
    });

    /*Editar matricula */
    Route::get('use_editar', function () {
        return view('usuario/use_editar');
    });
});
/**************************************************
 * Rotas do Calendario de provas
 */
/* Calendario de provas*/
Route::prefix('calend-prova')->group(function(){

    Route::get('calend-prova', function(){
        return view('calend-prova/calendario-prova');
    });

    Route::get('cri-calend-prov', function(){
        return view('calend-prova/cri-calend-prov');
    });
    Route::get('edit-calend-prova', function(){
        return view('calend-prova/edit-calend-prova');
    });
});


/******************************************
 * Rotas da Assiduidade de Aluno
 */

/* Assiduidade de alunos*/
Route::get('/assiduidade_aluno', function () {
    return view('assiduid-aluno/assd-aluno');
});

/*justificar ou editar assiduidade*/
Route::get('/editar_assiduidade', function () {
    return view('assiduid-aluno/edit-assd-aluno');
});

/******************************************
 * Rotas da Avaliação de Aluno
 */

/*Avaliação de Aluno*/
Route::get('/avaliar-aluno', function () {
    return view('avaliac-aluno/avaliacoes-aluno');
});

/*editar Avaliação de Aluni*/
Route::get('/editar-avaliacao-aluno', function () {
    return view('avaliac-aluno/edit-valiac-aluno');
});
