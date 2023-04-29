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


/* Essas são as rotas das matriculas */

Route::get('/matriculas', function () {
    return view('matricula/matriculas');
});

Route::get('/matricular-aluno', function () {
    return view('matricula/matricular-aluno');
});

Route::get('/readmitir-aluno', function () {
    return view('matricula/readmitir-aluno');
});

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







