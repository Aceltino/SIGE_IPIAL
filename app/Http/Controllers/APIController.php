<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public static function index() //http://127.0.0.1:8000/api/vagas
    {
        return [
        AlunoTurmaController::pegarVagas(),
        ];
    }
}
