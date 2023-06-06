<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ConsumoApiController extends Controller
{
    public function consumoinscricao()
    {
        $client = new Client(); //Instância do GuzzleHttp para utilização
        $response = $client->get('http://sige_ipial.test/api/candidatos'); //Endpoint da API interna
        $dados = json_decode($response->getBody(), true); //Entregando o Json do enponit da API interna a variavel $Dados

        return view('inscricao.inscricoes', compact('dados'));
    }
}
