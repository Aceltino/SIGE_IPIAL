<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\AnoLectivoTrait;

class AnoLectivoRequest extends FormRequest
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
            'ano_lectivo' => [
                //'required',
                //'string',
                'min:1',
                'max:15',
                function($attribute, $value, $fail){
                    $desig = AnoLectivoTrait::validateDesignacao($value);
                    if(!$desig && !isset($this->id)){
                        return $fail("Esta designação para o ano lectivo já existe.");
                    }
                }
            ],
            'data_inicio_ano_lectivo' => [
                //'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateInicioAnoLectivo($value);
                    if(!$ulAno && !isset($this->id)){
                        return $fail("A data de início do ano lectivo deve ser superior ao ano lectivo anterior!");
                    }
                }
            ],
            // 'data_fim_ano_lectivo' => [
            //     'required',
                // function($attribute, $value, $fail){
                //     $ulAno = AnoLectivoTrait::validateFimAnoLectivo($this->data_inicio_ano_lectivo, $value);
                //     if(!$ulAno){
                //         return $fail("A data do fim do ano lectivo deve ser superior a data do início do ano lectivo!");
                //     } elseif($ulAno > 1){
                //         return $fail("O ano lectivo deve terminar em 12 meses!");
                //     }
                // }
            // ],
            'data_inicio_inscricao' => [
                'required',
                // function($attribute, $value, $fail){
                //     $ulAno = AnoLectivoTrait::validateInicioInscricao($value, $this->data_inicio_ano_lectivo);
                //     if(!$ulAno){
                //         return $fail("A data de início das inscrições deve ser superior a data do início do ano lectivo!");
                //     } elseif($ulAno > 1){
                //         return $fail("As inscrições devem decorrer no mesmo mês e no mesmo ano da abertura do ano lectivo!");
                //     }
                // }
            ],
            'data_fim_inscricao' => [
                'required',
                // function($attribute, $value, $fail){
                //     $ulAno = AnoLectivoTrait::validateFimInscricao($this->data_inicio_inscricao, $value);
                //     if(!$ulAno){
                //         return $fail("A data do fim das inscrições deve ser superior a data do início das inscrições!");
                //     } elseif($ulAno > 1){
                //         return $fail("As inscrições devem durar no máximo 15 dias!");
                //     }
                // }
            ],
            'data_inicio_matricula' => [
                'required',
                // function($attribute, $value, $fail){
                //     $ulAno = AnoLectivoTrait::validateInicioMatricula($value, $this->data_fim_inscricao);
                //     if(!$ulAno){
                //         return $fail("A data do início das matriculas deve ser superior a data do fim das inscrições!");
                //     }
                // }
            ],
            'data_fim_matricula' => [
                'required',
                // function($attribute, $value, $fail){
                //     $ulAno = AnoLectivoTrait::validateFimMatricula($this->data_inicio_matricula, $value);
                //     if(!$ulAno){
                //         return $fail("A data do fim das matriculas deve ser superior a data do início das matriculas!");
                //     } elseif($ulAno > 1){
                //         return $fail("As matriculas devem durar no máximo 15 dias!");
                //     }
                // }
            ],
            'num_aluno_na_turma' => [
                'required',
                'integer'
            ],
            'num_sala_escola' => [
                'required',
                'integer'
            ],

            'id' => 'integer'
        ];
    }

    public function messages(){
        return [
            '*.required' => 'O preenchimento deste campo é obrigatório.',
            '*.integer' => 'Este campo só deve ser preenchido com números inteiros.',
            '*.string' => 'O campo pode conter letras e números',
            'ano_lectivo.min' => 'O campo não pode conter menos de 1 caracter.',
            'ano_lectivo.max' => 'O campo deve ter no máximo 15 caracteres.',
        ];
    }
}
