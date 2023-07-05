<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComunicadoStoreRequest extends FormRequest
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
            'titulo_com' => 'required|string|min:2|max:50',
            'conteudo_com' => 'required|string|max:1000|min:2',
        ];
    }
    public function messages()
    {
        return  [
            'titulo_com.required'=>'Este campo deve ser preenchido',
            'conteudo_com.required'=>'Este campo deve ser preenchido',
            '*.string'=>'Há campos com preenchimento obrigatorio de apenas letras e não número, fique mais atento.',

            'titulo_com.max'=>'Este campo não pode conter mais de 50 letras.',
            'titulo_com.min'=>'Este campo não pode conter menos de 2 letras.',
            'conteudo_com.max'=>'Este campo não pode conter mais de 1000 letras.',
            'conteudo_com.min'=>'Este campo não pode conter menos de 2 letras.',

        ];
    }
}
