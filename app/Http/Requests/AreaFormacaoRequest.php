<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Area_formacao;
use App\Traits\CursoTrait;

class AreaFormacaoRequest extends FormRequest
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
            'nome_area_formacao' => [
                'required',
                function($attribute, $value, $fail){
                    $nome_area_formacao = Area_formacao::where('nome_area_formacao', $value)->get();
                    if (isset($this->id)) {
                        if (count($nome_area_formacao) > 0 && $nome_area_formacao[0]->area_formacao_id != $this->id) {
                            return $fail("Esta área de formação já existe.");
                        }
                    }
                    elseif(!isset($this->id) && count($nome_area_formacao) > 0){
                        return $fail("Esta área de formação já existe.");
                    }
                    $area_formacao = CursoTrait::checkName($value);
                    if(isset($area_formacao['erro'])){
                        return $fail(CursoTrait::erroAreaFormacao($area_formacao['erro']));
                    }
                }
            ]
            ];

        
    }

    public function messages(){
        return [
            'nome_area_formacao.required' => 'Preencha o nome da área de formação.',
        ];
    }
}

