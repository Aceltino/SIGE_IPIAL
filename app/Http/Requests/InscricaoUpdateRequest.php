<?php

namespace App\Http\Requests;

use App\Models\Candidato;
use Illuminate\Foundation\Http\FormRequest;

class InscricaoUpdateRequest extends FormRequest
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
        $candidato = Candidato::find($this->request->get('id'));
        // dd($candidato);
        $rules = [
            //Formulario candidato
            'nome_pai_cand'=>'required|string|max:100|min:2',
            'nome_mae_cand'=>'required|string|max:100|min:2',
            'naturalidade_cand'=>'filled|string|max:100|min:2',

            //Formulario da Pessoa
            'nome_completo'=>'required|string|min:2|max:100',
            'data_nascimento'=>'required|date|before:'.now()->format('d-m-Y'),
            'genero' => 'required|string',
            'turno' => 'required|string',
            'id' => 'required',

            //Formulario escola proveniente
            'nome_escola'=>'required|max:100|min:2',
            'num_processo'=>'filled|numeric|min:2',
            'num_aluno'=>'required|numeric|min:1',
            'ultimo_anoLectivo'=>'required|numeric|min:2',
            'turma_aluno' => 'required|string',

            //Dados Telefone
            'num_tel'=>'required|size:9',
        ];

        $count = 1;
        for($i = 1; $i <= count($this->request->all()); $i++)
        {
            if( in_array($this->request->get('curso'.$i), $this->request->all()) )
            {
                $rules['curso'.$i] = 'required|string';
            } else
            {
                break;
            }
            $count++;
        }
        return $rules;
    }

    public function messages()
    {
        return [
            '*.required'=>'Todos os campos devem ser preenchidos',
            '*.string'=>'Há campos com preenchimento obrigatorio de apenas letras e não número.',
            '*.numeric'=>'Há campos com preenchimento obrigatorio de apenas numeros e não letras.',

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

            //Formulario Escola proveniente
            'nome_escola.max'=>'Nome da escola não pode conter mais de 100 letras',
            'nome_escola.min'=>'Nome da escola não pode conter menos de 2 letras',
            'num_aluno.numeric'=>'Número do aluno deve conter apenas digitos validos.',

            //Formulario Telefone
            'num_tel.size'=> 'Número de telefone esta incorrecto',
            'num_tel.unique'=> 'Numero de telefone já em uso.'
        ];
    }
}
