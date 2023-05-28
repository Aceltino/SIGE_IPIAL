<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscricaoController extends Controller
{
    public function create(){
        return view('inscricao/inscr-candidato');;
    }
    public function store(Request $request)
    {

        // $medias=[
        //     'Portugues'=>$request->porgu,
        //     'Quimica'=>$request->porgu,
        //     'Fisica'=>$request->porgu,
        //     'Matematica'=>$request->porgu,
        // ];

    $dados=[

        //Dados do candidato
        'nome_pai_cand'=>$request->nome_pai_cand,
        'nome_mae_cand'=>$request->nome_mae_cand,
        'naturalidade_cand'=>$request->naturalidade_cand,

        //Dados da escola proveniente
        'nome_escola'=>$request->nome_escola,
        'turno'=>$request->turno,
        'num_processo'=>$request->num_processo,
        'num_aluno'=>$request->num_aluno,
        'ultimo_anoLectivo'=>$request->ultimo_anoLectivo,
        // 'media'=> $medias,//por enquanto esse campo estou com duvidas
        'certificado'=>$request->certificado,    
 
        //Dados pessoais
        'nome_completo'=>$request->nome_completo,
        'num_bi'=>$request->num_bi,
        'data_nascimento'=>$request->data_nascimento,
        'gerero_DG'=>$request->gerero_DG,

        //Dados Telefone
        'num_tel'=>$request->num_tel,

    ];
    $regras=[

        //Formulario candidato
        'nome_pai_cand'=>'required|string|max:50|min:2',
        'nome_mae_cand'=>'required|string|max:50|min:2',
        'naturalidade_cand'=>'required|string|max:50|min:4',

        //Formulario da Pessoa
        'nome'=>'required|string|min:2|max:50',
        'sobre_nome'=>'required|string|min:5|max:50',
        'data_nascimento'=>'required|date|before:'.now()->format('d-m-Y'),
        'num_bi'=>'required|size:14',

        //Formulario escola proveniente
        'nome_escola'=>'required|max:100|min:2',
        'num_processo'=>'required|int|min:2',
        'num_aluno'=>'required|int|min:2',
        'ultimo_anoLectivo'=>'required|numeric|min:2',
        'media'=>'required|',
        'certificado'=>'required|mimes:pdf',

          //Dados Telefone
          'num_tel'=>'required|size:9',
    ];

    $validacao = Validator::make($dados,$regras);
    if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
    }

    //DEPOIS COMEÇA A INSERÇÃO DE DADOS NAS TABELAS...




    // $dadosuser=[

    // ]
    // $user= User::created()
        
    // sleep(2);
    
    // $dadospessoas=[
        
    //     ]
    //     $user= User::created()
    

    if(!PessoaController::store($request)){
        $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
        return redirect()->back()->with("erroCadastroPessoa",$msg);
    }
                
    }
}
