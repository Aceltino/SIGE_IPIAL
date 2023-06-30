<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarRequest extends FormRequest
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

        // dd($this->request->all());
        $rules = [];

        $rules = [
            //Formulario candidato
            'nome_pai_cand'=>'required|string|max:100|min:2',
            'nome_mae_cand'=>'required|string|max:100|min:2',
            'naturalidade_cand'=>'required|string|max:100|min:2',

            //Formulario da Pessoa
            'nome_completo'=>'required|string|min:2|max:100',
            'data_nascimento'=>'required|date|before:'.now()->format('d-m-Y'),
            'num_bi'=>'required|size:14|regex:/^\d{9}[A-Z]{2}\d{3}$/',
            'genero' => 'required|string',
            'turno' => 'required|string',

            //Formulario escola proveniente
            'nome_escola'=>'required|max:100|min:2',
            'num_processo'=>'required|numeric|min:2',
            'num_aluno'=>'required|numeric|min:1',
            'ultimo_anoLectivo'=>'nullable|numeric|min:2',
            'turma_aluno' => 'required|string',

            //Dados Telefone
            'num_tel'=>'required|size:9',

            //encarregado 1
            'telefone1'=>'required|size:9',
            'grau1'=>'required|string',
            'nome_enc1' => 'required|string|max:100|min:2',
            'data_nascimento_enc1' => 'required|date|before:'.now()->format('d-m-Y'),
            'genero1' =>'required|string',
            'num_bi_enc1' =>'required|size:14|regex:/^\d{9}[A-Z]{2}\d{3}$/',

            //encarregado 2
            'telefone2'=>'required|size:9',
            'grau2'=>'required|string',
            'nome_enc2' => 'required|string|max:100|min:2',
            'data_nascimento_enc2' => 'required|date|before:'.now()->format('d-m-Y'),
            'genero2' =>'required|string',
            'num_bi_enc2' =>'required|size:14|regex:/^\d{9}[A-Z]{2}\d{3}$/',

            //encarregado 3
            'telefone3'=>'required|size:9',
            'grau3'=>'required|string',
            'nome_enc3' => 'required|string|max:100|min:2',
            'data_nascimento_enc3' => 'required|date|before:'.now()->format('d-m-Y'),
            'genero3' =>'required|string',
            'num_bi_enc3' =>'required|size:14|regex:/^\d{9}[A-Z]{2}\d{3}$/',

            'email'=>'required|email|unique:users,email',
            'curso_escolhido' => 'required',
            'turno_escolhido' => 'required',
            'classe_escolhido' => 'required',
        ];
        return $rules;
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
            'num_bi.unique'=> 'Número de identificação já esta a ser usado',
            'num_bi'=> 'Número de identificação inválido',

            //Formulario Escola proveniente
            'nome_escola.max'=>'Nome da escola não pode conter mais de 100 letras',
            'nome_escola.min'=>'Nome da escola não pode conter menos de 2 letras',
            'num_aluno.numeric'=>'Número do aluno deve conter apenas digitos validos.',

            //Formulario Telefone
            'num_tel.unique'=> 'Número de telefone em uso.',
            'num_tel.size'=> 'Número de telefone esta incorrecto',

            //Dados encarregado 1
            'nome_enc1'=>'O nome não deve ter mais de 100 letras.',
            'data_nascimento_enc1.date' => 'O campo data:attribute deve ser uma data válida.',
            'data_nascimento_enc1.before'=> 'O campo data de nascimento deve ser uma data posterior à data atual.',
            'num_bi_enc1'=>'Número de identificação inválido',


            //Dados encarregado 2
            'nome_enc2'=>'O nome não deve ter mais de 100 letras.',
            'data_nascimento_enc2.date' => 'O campo data:attribute deve ser uma data válida.',
            'data_nascimento_enc2.before'=> 'O campo data de nascimento deve ser uma data posterior à data atual.',
            'num_bi_enc2'=>'Número de identificação inválido',


            //Dados encarregado 3
            'nome_enc3'=>'O nome não deve ter mais de 100 letras.',
            'data_nascimento_enc3.date' => 'O campo data:attribute deve ser uma data válida.',
            'data_nascimento_enc3.before'=> 'O campo data de nascimento deve ser uma data posterior à data atual.',
            'num_bi_enc3'=>'Número de identificação inválido',
        ];
    }
}
