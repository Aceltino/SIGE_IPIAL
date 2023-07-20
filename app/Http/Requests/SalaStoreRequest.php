<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalaStoreRequest extends FormRequest
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

        $regras = [
            'sala' =>
            [
                'required',
                'numeric',
            ],
            'tipo_sala' =>
            [
                'required',
                'string',
            ],
        ];
        return $regras;
    }
    public function messages()
    {
            return [
                'sala.required' => 'A sala deve ser preenchido',
                'tipo_sala.required'=>'O tipo de sala deve ser preenchido',
                
                'sala.numeric'=>'A sala deve ter preenchimento obrigatorio de apenas numeros e não letras, fique mais atento.',
                'tipo_sala.string'=>'Há campos com preenchimento obrigatorio de apenas letras e não número, fique mais atento.',
            ]; 
    }
}
