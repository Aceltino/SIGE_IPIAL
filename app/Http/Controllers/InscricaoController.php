<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscricaoController extends Controller
{
    public function create(){
        return view('inscricao/inscr-candidato');
    }
    
    public function store(Request $request)
    {
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
            'certificado'=>$request->certificado,

            //Dados pessoais
            'nome_completo'=>$request->nome_completo,
            'num_bi'=>$request->num_bi,
            'data_nascimento'=>$request->data_nascimento,
            'gerero_DG'=>$request->gerero_DG,

            //Dados Telefone
            'num_tel'=>$request->num_tel,

             // Dados da media
             'Portugues'=>$request->LinguaP,
             'Quimica'=>$request->Quimic,
             'Fisica'=>$request->Fisic,
             'Matematica'=>$request->Matematic,

             // Dados do curso
             'Opcoes'=>$request->opcao;
             //opcao[]

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
            'num_processo'=>'required|numeric|min:2',
            'num_aluno'=>'required|numeric|min:2',
            'ultimo_anoLectivo'=>'required|numeric|min:2',
            'media'=>'required|',
            'certificado'=>'required|mimes:pdf',

            //Dados Telefone
            'num_tel'=>'required|size:9',

        ];

        $msg_erro=[

            '*.required'=>'Este campo deve ser preenchido',
            '*.string'=>'Este campo deve conter apenas Letras',
            '*.numeric'=>'Este campo deve conter apenas numeros',
    
            //Formulario do candidato
            'nome_pai_cand.max'=>'Este campo não pode conter mais de 50 letras.',
            'nome_pai_cand.min'=>'Este campo não pode conter menos de 2 letras.',
            'nome_mae_cand.max'=>'Este campo não pode conter mais de 50 letras.',
            'nome_mae_cand.min'=>'Este campo não pode conter menos de 2 letras.',
            'naturalidade_cand.max'=>'Este campo nao deve conter mais de 59 letras',
            'naturalidade_cand.min'=>'Este campo nao deve conter menos de 4 letras',
            
            //Formulario Pessoa
            'nome.max'=>'Este campo não pode conter mais de 50 letras.',
            'nome.min'=>'Este campo não pode conter menos de 2 letras.',
            'sobre_nome.max'=>'Este campo não pode conter mais de 50 letras.',
            'sobre_nome.min'=>'Este campo não pode conter menos de 2 letras.',
            'data.date' => 'O campo :attribute deve ser uma data válida.',
            'data_nascimento.before'=> 'O campo :attribute deve ser uma data posterior à data atual.',
            'num_bi.size'=> 'Número de identificação esta incorrecto',

            //Formulario Escola proveniente
            'nome_escola.max'=>'Este campo não pode conter mais de 100 letras',
            'nome_escola.min'=>'Este campo não pode conter menos de 2 letras',
            'num_processo'=>'Número do Processo deve conter apenas digitos validos.',
            'nome_completo.min'=>'Este campo não deve conter menos que 2 numeros',
            'num_aluno'=>'Número do aluno deve conter apenas digitos validos.',
            'ultimo_anoLectivo'=>'O ano Letivo deve conter apenas digitos validos.',
            'certificado'=>'Deve contar apenas um arquivo PDF',

            //Formulario Telefone
            'num_tel'=>'Este campo nao pode conter mais de 9 numeros',
        ];

        $validacao = Validator::make($dados, $regras);
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
