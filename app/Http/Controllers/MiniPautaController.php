<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiniPautaController extends Controller
{
    public function index()
    {
        return view('mini-pauta.mini-pauta');
    }

    public function show()
    {
        return view('mini-pauta.mini-pauta-doc');
    }
}
