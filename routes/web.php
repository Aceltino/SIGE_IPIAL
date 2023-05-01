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
Route::get('/', function () {
    return view('pagina-inicial');
})->name('inicio')->middleware('auth');


/* Essas rotas sao apenas para conseguirem visualizar cada pagina*/

Route::get('/lembrar', function () {
    return view('autenticacao/recuperar-senha');
});

Route::get('/registrar', function () {
    return view('autenticacao/registrar');
});

Route::get('/inscricoes', function () {
    return view('inscricao/inscricoes');
});

Route::get('/inscrever', function () {
    return view('inscricao/inscr-candidato');
});


/* Essas são as rotas das Matriculas */

/* Crud das matriculas e readmitir*/

Route::get('/matriculas', function () {
    return view('matricula/matriculas');
});

Route::get('/matricular-aluno', function () {
    return view('matricula/matricular-aluno');
});

Route::get('/editar-matricula', function () {
    return view('matricula/edit-matricula');
});


Route::get('/readmitir-aluno', function () {
    return view('matricula/readmitir-aluno');
});

/* Fim*/

/* Crud do regitro de Aluno*/

Route::get('/registrar-aluno', function () {
    return view('matricula/registrar-aluno');
});

Route::get('/alunos-registrado', function () {
    return view('matricula/alunos-registrado');
});

Route::get('/editar-registro', function () {
    return view('matricula/edit-registro-aluno');
});



/* Fim*/


/* Rotas das Turmas*/

/* Crud das turmas*/
Route::get('/criar-turma', function () {
    return view('turma/cri-turma');
});

Route::get('/turmas', function () {
    return view('turma/turmas');
});

Route::get('/editar-turma', function () {
    return view('turma/edit-turma');
});

/*Fim*/

/* Rotas dos cursos*/

/* Crud dos curso*/

Route::get('/criar-curso', function () {
    return view('curso/criar-curso');
});

Route::get('/cursos', function () {
    return view('curso/cursos');
});

Route::get('/editar-curso', function () {
    return view('curso/edit-curso');
});

/*Fim*/


/* Rotas do Ano Letivo*/

/* Crud do Ano Letivo*/

Route::get('/criar-ano-letivo', function () {
    return view('ano-lectivo/criar-aluno-lect');
});

Route::get('/ano-letivo', function () {
    return view('ano-lectivo/ano-lect');
});

Route::get('/editar-ano-letivo', function () {
    return view('ano-lectivo/edit-ano-letivo');
});

/*Fim*/



Route::get('/inscritos-online', function () {
    return view('inscricao/inscritos-online');
});

Route::get('/inscritos-rejeitados', function () {
    return view('inscricao/inscritos-rejeitados');
});

/******Algumas paginas que nao estarao no menu*****/
Route::get('/conf-inscricao', function () {
    return view('inscricao/conf-inscricao');
});

Route::get('/cadastrar-professor', function () {
    return view('professor/cadastrar-prof');
});


Route::get('/rej-inscricao', function () {
    return view('inscricao/rejeitar-inscricao');
});









