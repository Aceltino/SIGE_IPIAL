<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscricaoRequest extends FormRequest
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
        return [
            //Formulario candidato
            'nome_pai_cand'=>'required|string|max:100|min:2',
            'nome_mae_cand'=>'required|string|max:100|min:2',
            'naturalidade_cand'=>'required|string|max:100|min:2',

            //Formulario da Pessoa
            'nome_completo'=>'required|string|min:2|max:100',
            'data_nascimento'=>'required|date|before:'.now()->format('d-m-Y'),
            'num_bi'=>'required|size:14',
            'genero' => 'required|string',
            'turno' => 'required|string',

            //Cursos escolhidos pelos candidatos
            'curso1' => 'required|string',
            'curso2' => 'required|string',
            'curso3' => 'required|string',
            'curso4' => 'required|string',

            //Notas das disciplinas
            'LinguaP' => 'required|numeric',
            'Matematic' => 'required|numeric',
            'Fisic' => 'required|numeric',
            'Quimic' => 'required|numeric',

            //Formulario escola proveniente
            'nome_escola'=>'required|max:100|min:2',
            'num_processo'=>'required|numeric|min:2',
            'num_aluno'=>'required|numeric|min:1',
            'ultimo_anoLectivo'=>'required|numeric|min:2',
            'turma_aluno' => 'required|string',

            //Dados Telefone
            'num_tel'=>'required|size:9'
        ];
    }

    public function messages()
    {
        return [
            '*.required'=>'Todos os campos devem ser preenchidos',
            '*.string'=>'Há campos com preenchimento obrigatorio de apenas letras e não número, fique mais atento.',
            '*.numeric'=>'Há campos com preenchimento obrigatorio de apenas numeros e não letras, fique mais atento.',

            //Formulario do candidato
            'nome_pai_cand.max'=>'O nome não deve ter mais de 100 letras.',
            'nome_pai_cand.min'=>'O nome não deve ter menos de 2 letras.',
            'nome_mae_cand.max'=>'O nome não deve ter mais de 100 letras.',
            'nome_mae_cand.min'=>'O nome não deve ter menos de 2 letras.',
            'naturalidade_cand.max'=>'A naturalidade não deve ter mais de 100 letras.',
            'naturalidade_cand.min'=>'A naturalidade não deve ter menos de 2 letras.',

            //Formulario Pessoa
            'nome_completo.max'=>'O nome não deve ter mais de 100 letras.',
            'nome_completo.min'=>'O nome não deve ter menos de 2 letras',
            'data_nascimento.date' => 'O campo data:attribute deve ser uma data válida.',
            'data_nascimento.before'=> 'O campo data de nascimento deve ser uma data posterior à data atual.',
            'num_bi.size'=> 'Número de identificação esta incorrecto',

            //Formulario Escola proveniente
            'nome_escola.max'=>'Nome da escola não pode conter mais de 100 letras',
            'nome_escola.min'=>'Nome da escola não pode conter menos de 2 letras',
            'num_aluno.numeric'=>'Número do aluno deve conter apenas digitos validos.',

            //Formulario Telefone
            'num_tel.size'=> 'Número de telefone esta incorrecto'
        ];
    }
}
