<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PautaController extends Controller
{
    public function index()
    {
        return view('pauta.pautas');
    }

    public function show()
    {
        return view('pauta.pauta-doc');
    }
}
