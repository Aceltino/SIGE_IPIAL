<?php

namespace App\Http\Requests;

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
        $rules = [
            //Formulario candidato
            'nome_pai_cand'=>'required|string|max:100|min:2',
            'nome_mae_cand'=>'required|string|max:100|min:2',
            'naturalidade_cand'=>'required|string|max:100|min:2',
            'aluno_id' => 'required',

            //Formulario da Pessoa
            'nome_completo'=>'required|string|min:2|max:100',
            'genero' => 'required|string',
            'num_tel'=>'required|size:9|unique:pessoas,telefone,'.$candidato->pessoa_id.',pessoa_id',

            'num_bi' =>'required|size:14|regex:/^\d{9}[A-Z]{2}\d{3}$/|unique:pessoas,num_bi,'.$candidato->pessoa_id.',pessoa_id',

             //Encarregado Form
             'telefone1'=>'required|size:9|unique:pessoas,telefone,'.$candidato->pessoa_id.',pessoa_id',
             'telefone2'=>'required|size:9|unique:pessoas,telefone,'.$candidato->pessoa_id.',pessoa_id',
             'telefone3'=>'required|size:9|unique:pessoas,telefone,'.$candidato->pessoa_id.',pessoa_id',
        ];
return $rules;

    }
}
