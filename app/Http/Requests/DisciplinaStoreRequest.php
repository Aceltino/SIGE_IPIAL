<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $regras = [];

        $regras =
        [
            'nome_disciplina' =>[
                'required',
                'string',
                'unique:disciplinas,nome_disciplina',
                'min:2',
                'max:50',
            ],
            'componente'=>[
                'required',
                'string',
            ],
            'classe'=>[
                'required',
                'string',
            ],
            'Tipo_disciplina'=>[
                'required',
                'string',
            ],
            'carga_horaria'=>[
                'required',
                'numeric',
            ],
            'tempo_prova'=>[
                'required',
            ],
            'sigla'=>[
                'required',
                'unique:disciplinas,sigla',
                'max:4',
                'min:2',
                'regex:/^[A-Z]+$/',
            ],
        ];
        return $regras;
    }
    public function messages()
    {
        return [
            // Validações obrigatorias
            'nome_disciplina.required'=>'O nome da disciplina deve ser preenchido',
            'componente.required'=>'O componente deve ser preenchido',
            'tempo_prova.required'=>'O Tempo de Prova deve ser preenchido',
            'carga_horaria.required'=>'A carga horaria deve ser preenchido',
            'Tipo_disciplina.required'=>'O Tipo_disciplina deve ser preenchido',
            'sigla.required'=>'A sigla deve ser preenchido',
            'classe.required'=>'A classe deve ser preenchido',
            //
            'carga_horaria.numeric'=>'A carga horaria deve ter preenchimento obrigatorio de apenas numeros e não letras, fique mais atento.',
            //Validações de strings
            'nome_disciplina.string'=>'Há campos com preenchimento obrigatorio de apenas letras e não número, fique mais atento.',
            'componente.string'=>'Há campos com preenchimento obrigatorio de apenas letras e não número, fique mais atento.',
            'sigla.string'=>'Há campos com preenchimento obrigatorio de apenas letras e não número, fique mais atento.',
            //Validações unicas
            'nome_disciplina.unique'=>'Este nome ja pertense a uma disciplina ja cadastrada',
            'sigla.unique'=>'Esta sigla ja ja pertense a uma disciplina ja cadastrada',
            //Validações Maximo e minimo
            'nome_disciplina.max'=>'O nome desta disciplina não pode conter mais de 50 letras.',
            'nome_disciplina.min' =>'O nome desta disciplina não pode conter menos de 2 letras.',
            'sigla.max'=>'Esta sigla não pode conter mais de 4 letras.',
            'sigla.min' =>'Esta sigla não pode conter menos de 2 letras.',
            //Validações de letras maiúsculas
            'sigla.regex' => 'Esta sigla deve conter apenas letras maiúsculas.',
        ];
    }
}
