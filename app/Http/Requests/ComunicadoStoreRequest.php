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
        $regras = [];

        $regras = [
            'titulo_com' => [
                'required',
                'string',
                'min:2',
                'max:50', 
            ],
            'conteudo_com' => [
                'required',
                'string',
                'max:255',
                'min:2',
            ],
        ];
        return $regras;
    }
    public function messages()
    {
        return  [
            'titulo_com.required'=>'O titulo deve ser preenchidos',
            'conteudo_com.required'=>'O conteudo deve ser preenchidos',
            'titulo_com.string'=>'O titulo deve ter preenchimento obrigatorio de apenas letras e não número, fique mais atento.',
            'conteudo_com.string'=>'O conteudo deve ter preenchimento obrigatorio de apenas letras e não número, fique mais atento.',
            //Fomulario Comunicado
            'titulo_com.max'=>'O titulo não pode conter mais de 50 letras.',
            'titulo_com.min'=>'O titulo não pode conter menos de 2 letras.',
            'conteudo_com.max'=>'O Conteudo não pode conter mais de 1000 letras.',
            'conteudo_com.min'=>'O Conteudo não pode conter menos de 2 letras.',

        ];
    }
}
