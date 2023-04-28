<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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
Route::get('/', [HomeController::class,'index'])->name('inicio')->middleware('auth'); 

//Routas para Autenticação no Sistema
Route::prefix('autenticacao')->group(function(){

    Route::get('login', [AuthController::class,'formLogin'])->name('login');//Rota de Login
    Route::post('login', [AuthController::class,'checkLogin'])->name('checkLogin');//Rota metodo para consultar Login   
    Route::get('logout',[AuthController::class, 'logout'])->name('logout')->middleware('auth');//Rota do metodo de Logout

    //Rota de Cadastro
    Route::get('registrar', function () {
        return view('autenticacao/registrar');
    });

    //Rota do formulario de recuperação de senha. 
    Route::get('lembrar',[AuthController::class, 'recuperarPassword'])->name('recuperarPassword');
    
});

//Routas de Formulario de inscrição
Route::prefix('inscricao')->middleware('auth')->group(function(){

    Route::get('inscricoes', function () {
        return view('inscricao/inscricoes');
    })->name('inscricoes');

    Route::get('inscrever', function () {
        return view('inscricao/inscr-candidato');
    })->name('inscrever');

    Route::get('/inscritos-online', function () {
        return view('inscricao/inscritos-online');
    })->name('inscritos-online');
    
    Route::get('/inscritos-rejeitados', function () {
        return view('inscricao/inscritos-rejeitados');
    })->name('inscritos-rejeitados');

    Route::get('/conf-inscricao', function () {
        return view('inscricao/conf-inscricao');
    })->name('conf-inscricao');

    Route::get('/rej-inscricao', function () {
        return view('inscricao/rejeitar-inscricao');
    })->name('rejeitar-inscricao');
    
});

//Routas de Formulario da Matricula
Route::prefix('matricula')->group(function(){

    Route::get('matriculas', function () {
        return view('matricula/matriculas');
    })->name('matriculas');

    Route::get('matricular-aluno', function () {
        return view('matricula/matricular-aluno');
    })->name('matricular-aluno');

});


/******Algumas paginas que nao estarao no menu*****/


Route::get('/cadastrar-professor', function () {
    return view('professor/cadastrar-prof');
})->name('cadastrar-prof');




