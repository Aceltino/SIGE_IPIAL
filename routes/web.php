<?php

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

//Routas para Autenticação no Sistema

Route::prefix('autenticacao')->group(function(){
    
    //Rota de Login
    Route::get('login', function () {
        return view('autenticacao/login');
    })->name('login');
    
    //Rota de Cadastro
    Route::get('/registrar', function () {
        return view('autenticacao/registrar');
    });
    
});

//Rotas do Painel
Route::get('/inicio', function () {
    return view('pagina-inicial');
})->name('inicio');

/* Essas rotas sao apenas para conseguirem visualizar cada pagina*/

Route::get('/lembrar', function () {
    return view('autenticacao/recuperar-senha');
});

Route::get('/registrar', function () {
    return view('autenticacao/registrar');
});


/******************************************
 * Rotas de inscricao
 */
/*Inscricoes ou alunos inscritos */
Route::get('/inscricoes', function () {
    return view('inscricao/inscricoes');
});

/*Inscrever candidato */
Route::get('/inscrever', function () {
    return view('inscricao/inscr-candidato');
});

/*Editar candidato */
Route::get('/editar-candidato', function () {
    return view('inscricao/edit-candidato');
});

/*Inscritos online */
Route::get('/inscritos-online', function () {
    return view('inscricao/inscritos-online');
});

/*Incritos rejeitados */
Route::get('/inscritos-rejeitados', function () {
    return view('inscricao/inscritos-rejeitados');
});

/*Confirmar inscricao*/
Route::get('/conf-inscricao', function () {
    return view('inscricao/conf-inscricao');
});

/* Rejeitar inscricao */
Route::get('/rej-inscricao', function () {
    return view('inscricao/rejeitar-inscricao');
});/**<!--Fim Rotas de inscricao--> */


/******************************************
 * Rotas das matriculas
 */
/* Matriculas*/
Route::get('/matriculas', function () {
    return view('matricula/matriculas');
});

/*Matricular aluno */
Route::get('/matricular-aluno', function () {
    return view('matricula/matricular-aluno');
});

/*Editar matricula */
Route::get('/editar-matricula', function () {
    return view('matricula/edit-matricula');
});

/*Readimitir aluno */
Route::get('/readmitir-aluno', function () {
    return view('matricula/readmitir-aluno');
});

/*Aluno ativo */
Route::get('/aluno-ativo', function () {
    return view('matricula/aluno-ativo');
});

/*Aluno inativo */
Route::get('/aluno-inativo', function () {
    return view('matricula/aluno-inativo');
});

/*Registrar aluno */
Route::get('/registrar-aluno', function () {
    return view('matricula/registrar-aluno');
});

/*Alunos registrados */
Route::get('/alunos-registrado', function () {
    return view('matricula/alunos-registrado');
});

/*Editar registro */
Route::get('/editar-registro', function () {
    return view('matricula/edit-registro-aluno');
});/**<!--Fim Rotas de matriculas--> */


/******************************************
 * Rotas de professor
 */
Route::get('/cadastrar-professor', function () {
    return view('professor/cadastrar-prof');
});

Route::get('/consultar-professor', function () {
    return view('professor/consultar-prof');
});

Route::get('/editar-dados-professor', function () {
    return view('professor/editar-dados-prof');
});

Route::get('/horario-professor', function () {
    return view('professor/horario-prof');
});/**<!--Fim Rotas de Professor--> */


/******************************************
 * Rotas das turmas
 */
/* Criar turma*/
Route::get('/criar-turma', function () {
    return view('turma/cri-turma');
});

/*Trumas */
Route::get('/turmas', function () {
    return view('turma/turmas');
});

/*Editar turma */
Route::get('/editar-turma', function () {
    return view('turma/edit-turma');
});/**<!--Fim Rotas turma--> */

/******************************************
 * Rotas de aluno
 */
Route::get('/boletim-notas', function () {
    return view('aluno/boletim-notas');
});

Route::get('/ficha-biografica', function () {
    return view('aluno/ficha-biog');
});

Route::get('/assiduidade-aluno', function () {
    return view('aluno/assiduidade-aluno');
});/**<!--Fim Rotas aluno--> */


/******************************************
 * Rotas de curso
 */
Route::get('/criar-curso', function () {
    return view('curso/criar-curso');
});

Route::get('/cursos', function () {
    return view('curso/cursos');
});

Route::get('/editar-curso', function () {
    return view('curso/edit-curso');
});/**<!--Fim Rotas curso--> */


/******************************************
 * Rotas do ano-lectivo 
 */
Route::get('/criar-ano-letivo', function () {
    return view('ano-lectivo/criar-aluno-lect');
});

Route::get('/ano-letivo', function () {
    return view('ano-lectivo/ano-lect');
});

Route::get('/editar-ano-letivo', function () {
    return view('ano-lectivo/edit-ano-letivo');
});/**<!--Fim Rotas ano lectivo--> */

/**
 * Rota do perfil de usuario
 */

 Route::get('/perfil', function () {
    return view('perfil/perfil');
});

/******************************************
 * Rotas da ficha biografica-lectivo 
 */
Route::get('/fichas-biograficas', function () {
    return view('ficha-biog/ficha-biog');
});

Route::get('/fichas-biograficas-doc', function () {
    return view('ficha-biog/ficha-biografica-doc');
});

/******************************************
 * Rotas do processo do Aluno 
 */
Route::get('/processos', function () {
    return view('processo/processos');
});


/******************************************
 * Rotas de pauta
 */
Route::get('/pautas', function () {
    return view('pauta/pautas');
});

Route::get('/ver-pauta', function () {
    return view('pauta/pauta-doc');
});


/******************************************
 * Rotas de mini-pauta
 */

Route::get('/mini-pauta', function () {
    return view('mini-pauta/mini-pauta');
});

Route::get('/ver-mini-pauta', function () {
    return view('mini-pauta/mini-pauta-doc');
});



/******************************************
 * Rotas do cadastro de usuário
 */
/* cadastrar usuario*/
Route::get('/use_cadastro', function () {
    return view('usuario/use_cadastro');
});

/*Matricular aluno */
Route::get('/usuarios', function () {
    return view('usuario/usuarios');
});

/*Editar matricula */
Route::get('/use_editar', function () {
    return view('usuario/use_editar');
});

/******************************************
 * Rotas disciplinas
 */
Route::get('/cadastro_dis', function () {
    return view('disciplina/cadastro_dis');
});

Route::get('/disciplinas', function () {
    return view('disciplina/disciplinas');
});

Route::get('/edit-disciplina', function () {
    return view('disciplina/edit-disciplina');
});
