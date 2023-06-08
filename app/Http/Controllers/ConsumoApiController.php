<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ConsumoApiController extends Controller
{
     public function consumoinscricao()
    {
        return view('inscricao.inscricoes');
     }
}
