<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public static function store($dadosEndereco):mixed
    {
        $enderecoCriado= Endereco::create($dadosEndereco);
        return $enderecoCriado->endereco_id;
    }

    public static function update($id, $dadosEndereco)
    {
        $endereco= Endereco::find($id);

        $endereco->municipio=$dadosEndereco['municipio'];
        $endereco->bairro=$dadosEndereco['bairro'];
        $endereco->zona=$dadosEndereco['zona'];
        $endereco->numero_casa=$dadosEndereco['numero_casa'];

        if(!$endereco->save()){
            return false;
        }
        return true;
    }
    
    public static function consultEndereco($dadosEndereco):mixed
    {
        return Endereco::where('municipio', $dadosEndereco['municipio'])
                            ->where('bairro', $dadosEndereco['bairro'])
                            ->where('zona',$dadosEndereco['zona'])
                            ->where('numero_casa',$dadosEndereco['numero_casa'])->first();

    }

}
