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

Route::get('/', function () {
    return view('welcome');
});

/* Essas rotas sao apenas para conseguirem visualizar cada pagina*/

Route::get('/inicio', function () {
    return view('pagina-inicial');
});

Route::get('/login', function () {
    return view('autenticacao/login');
});

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

Route::get('/conf-inscricao', function () {
    return view('inscricao/conf-inscricao');
});

/* Essas são as rotas das matriculas */

Route::get('/matriculas', function () {
    return view('matricula/matriculas');
});

Route::get('/matricular-aluno', function () {
    return view('matricula/matricular-aluno');
});











