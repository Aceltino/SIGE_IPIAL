<?php

namespace App\Http\Requests;

use App\Models\Candidato;
use App\Models\Encarregado;
use App\Models\Pessoa;
use Illuminate\Foundation\Http\FormRequest;

class MatriculaupdateRequest extends FormRequest
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
        $candidato = Candidato::find($this->request->get('id'));
        $enc0 = Pessoa::where('telefone', $this->request->get('telefone0'))->first();
        $enc1 = Pessoa::where('telefone', $this->request->get('telefone1'))->first();
        $enc2 = Pessoa::where('telefone', $this->request->get('telefone2'))->first();
        
        $telefone0 = ($enc0 != null) ? $enc0->telefone : null;
        $telefone1 = ($enc1 != null) ? $enc1->telefone : null;
        $telefone2 = ($enc2 != null) ? $enc2->telefone : null;
        $rules = [
            //Formulario candidato
            'nome_pai_cand'=>'required|string|max:100|min:2',
            'nome_mae_cand'=>'required|string|max:100|min:2',
            'naturalidade_cand'=>'required|string|max:100|min:2',
            'aluno_id' => 'required',
            'id' => 'required',

            //Formulario da Pessoa
            'nome_completo'=>'required|string|min:2|max:100',
            'genero' => 'required|string',
            'num_tel'=>'required|size:9|unique:pessoas,telefone,'.$candidato->pessoa_id.',pessoa_id',

            //Encarregado Form
            'telefone0' => 'required|size:9|unique:pessoas,telefone,' . $telefone0 . ',telefone',
            'telefone1' => 'required|size:9|unique:pessoas,telefone,' . $telefone1 . ',telefone',
            'telefone2' => 'required|size:9|unique:pessoas,telefone,' . $telefone2 . ',telefone',
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

            //Formulario Telefone
            'num_tel.size'=> 'Número de telefone esta incorrecto',
            'num_tel.unique'=> 'Numero de telefone já em uso.',
            'telefone0.size'=> 'Número de telefone esta incorrecto',
            'telefone1.size'=> 'Número de telefone esta incorrecto',
            'telefone2.size'=> 'Número de telefone esta incorrecto',

            'telefone0.unique'=> 'Numero de telefone já em uso.',
            'telefone1.unique'=> 'Numero de telefone já em uso.',
            'telefone2.unique'=> 'Numero de telefone já em uso.'
        ];
    }
}
