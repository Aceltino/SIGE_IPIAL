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
                'string',
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
                'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateInicioAnoLectivo($value);
                    if(!$ulAno && !isset($this->id)){
                        return $fail("A data de início do ano lectivo deve ser superior ao ano lectivo anterior!");
                    }
                }
            ],
            'data_fim_ano_lectivo' => [
                'required',
                // function($attribute, $value, $fail){
                //     $ulAno = AnoLectivoTrait::validateFimAnoLectivo($this->data_inicio_ano_lectivo, $value);
                //     if(!$ulAno){
                //         return $fail("A data do fim do ano lectivo deve ser superior a data do início do ano lectivo!");
                //     } elseif($ulAno > 1){
                //         return $fail("O ano lectivo deve terminar em 12 meses!");
                //     }
                // }
            ],
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
            'data_inicio1' => [
                'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateInicioTrimestres($value, $this->data_fim_matricula);
                    if(!$ulAno){
                        return $fail("O 1º trimestre deve começar após o término das matriculas!");
                    }
                }
            ],
            'data_fim1' => [
                'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateFimTrimestres($this->data_inicio1, $value);
                    if(!$ulAno){
                        return $fail("A data do fim do 1º trimestre deve ser superior a data do início do 1º trimestre!");
                    }
                    // elseif($ulAno > 1){
                    //     return $fail("O trimestre deve ter uma duração de 3 meses!");
                    // }
                }
            ],
            'data_inicio2' => [
                'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateInicioTrimestres($value, $this->data_fim1);
                    if(!$ulAno){
                        return $fail("O 2º trimestre deve começar após o término do 1º trimestre!");
                    }
                }
            ],
            'data_fim2' => [
                'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateFimTrimestres($this->data_inicio2, $value);
                    if(!$ulAno){
                        return $fail("A data do fim do 2º trimestre deve ser superior a data do início do 2º trimestre!");
                    }
                    // elseif($ulAno > 1){
                    //     return $fail("O trimestre deve ter uma duração de 3 meses!");
                    // }
                }
            ],
            'data_inicio3' => [
                'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateInicioTrimestres($value, $this->data_fim2);
                    if(!$ulAno){
                        return $fail("O 3º trimestre deve começar após o término do 2º trimestre!");
                    }
                }
            ],
            'data_fim3' => [
                'required',
                function($attribute, $value, $fail){
                    $ulAno = AnoLectivoTrait::validateFimTrimestres($this->data_inicio3, $value);
                    if(!$ulAno){
                        return $fail("A data do fim do 3º trimestre deve ser superior a data do início do 3º trimestre!");
                    }
                    // elseif($ulAno > 1){
                    //     //dd($ulAno);
                    //     return $fail("O trimestre deve ter uma duração de 3 meses!");
                    // }
                }
            ],
            'hora_inicio_manha' => [
                'required',
                // function($attribute, $value, $fail){
                //     $get = AnoLectivoTrait::verifyHoraManha($value);
                //     if(!$get){
                //         return $fail("Este horário não corresponde ao turno da manhã!");
                //     }
                // }
            ],
            'hora_fim_manha' => [
                'required',
                // function($attribute, $value, $fail){
                //     $get = AnoLectivoTrait::verifyHoraManha($this->hora_fim_manha);
                //     $fim = AnoLectivoTrait::horaFimAula($this->hora_inicio_manha, $value);
                //     if(!$get){
                //         return $fail("Este horário não corresponde ao turno da manhã!");
                //     } elseif(!$fim){
                //         return $fail("A hora do final das aulas deve ser superior a hora de início das aulas!");
                //     }
                // }
            ],
            'duracao_tempo_manha' => [
                'required',
                'integer',
                'max:60',
                'min:1'
            ],
            'duracao_int_menor_manha' => [
                'required',
                'integer',
                'max:15',
                'min:1'
            ],
            'duracao_int_maior_manha' => [
                'required',
                'integer',
                'max:30',
                'min:1'
            ],
            'hora_inicio_tarde' => [
                'required',
                // function($attribute, $value, $fail){
                //     $get = AnoLectivoTrait::verifyHoraTarde($value);
                //     $fim = AnoLectivoTrait::horaFimAula($this->hora_fim_manha, $value);
                //     if(!$get){
                //         return $fail("Este horário não corresponde ao turno da tarde!");
                //     } elseif(!$fim){
                //         return $fail("A hora do início das aulas do turno da tarde deve ser superior a hora do final das aulas do turno da manhã!");
                //     }
                // }
            ],
            'hora_fim_tarde' => [
                'required',
                // function($attribute, $value, $fail){
                //     $get = AnoLectivoTrait::verifyHoraTarde($value);
                //     $fim = AnoLectivoTrait::horaFimAula($this->hora_inicio_tarde, $value);
                //     if(!$get){
                //         return $fail("Este horário não corresponde ao turno da tarde!");
                //     } elseif(!$fim){
                //         return $fail("A hora do fim das aulas deve ser superior a hora do início das aulas!");
                //     }
                // }
            ],
            'duracao_tempo_tarde' => [
                'required',
                'integer',
                'max:60',
                'min:1'
            ],
            'duracao_int_menor_tarde' => [
                'required',
                'integer',
                'max:15',
                'min:1'
            ],
            'duracao_int_maior_tarde' => [
                'required',
                'integer',
                'max:30',
                'min:1'
            ],
            'hora_inicio_noite' => [
                'required',
                // function($attribute, $value, $fail){
                //     $get = AnoLectivoTrait::verifyHoraNoite($value);
                //     $fim = AnoLectivoTrait::horaFimAula($this->hora_fim_tarde, $value);
                //     if(!$get){
                //         return $fail("Este horário não corresponde ao turno da noite!");
                //     } elseif(!$fim){
                //         return $fail("A hora do início das aulas do turno da noite deve ser superior a hora do final das aulas do turno da tarde!");
                //     }
                // }
            ],
            'hora_fim_noite' => [
                'required',
                // function($attribute, $value, $fail){
                //     $get = AnoLectivoTrait::verifyHoraNoite($value);
                //     $fim = AnoLectivoTrait::horaFimAula($this->hora_inicio_noite, $value);
                //     if(!$get){
                //         return $fail("Este horário não corresponde ao turno da noite!");
                //     } elseif(!$fim){
                //         return $fail("A hora do fim das aulas deve ser superior a hora do início das aulas!");
                //     }
                // }
            ],
            'duracao_tempo_noite' => [
                'required',
                'integer',
                'max:60',
                'min:1'
            ],
            'duracao_int_menor_noite' => [
                'required',
                'integer',
                'max:15',
                'min:1'
            ],
            'duracao_int_maior_noite' => [
                'required',
                'integer',
                'max:30',
                'min:1'
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

            'duracao_tempo_manha.max' => 'Cada tempo deve durar no máximo 60 minutos.',
            'duracao_tempo_manha.min' => 'Não é permitido números abaixo de 1.',
            'duracao_int_menor_manha.min' => 'Não é permitido números abaixo de 1.',
            'duracao_int_menor_manha.max' => 'A duração do intervalo menor deve ser no máximo de 15 minutos.',
            'duracao_int_maior_manha.max' => 'A duração do intervalo maior deve ser no máximo de 30 minutos.',
            'duracao_int_maior_manha.min' => 'Não é permitido números abaixo de 1.',

            'duracao_tempo_tarde.max' => 'Cada tempo deve durar no máximo 60 minutos.',
            'duracao_tempo_tarde.min' => 'Não é permitido números abaixo de 1.',
            'duracao_int_menor_tarde.min' => 'Não é permitido números abaixo de 1.',
            'duracao_int_menor_tarde.max' => 'A duração do intervalo menor deve ser no máximo de 15 minutos.',
            'duracao_int_maior_tarde.max' => 'A duração do intervalo maior deve ser no máximo de 30 minutos.',
            'duracao_int_maior_tarde.min' => 'Não é permitido números abaixo de 1.',

            'duracao_tempo_noite.max' => 'Cada tempo deve durar no máximo 60 minutos.',
            'duracao_tempo_noite.min' => 'Não é permitido números abaixo de 1.',
            'duracao_int_menor_noite.min' => 'Não é permitido números abaixo de 1.',
            'duracao_int_menor_noite.max' => 'A duração do intervalo menor deve ser no máximo de 15 minutos.',
            'duracao_int_maior_noite.max' => 'A duração do intervalo maior deve ser no máximo de 30 minutos.',
            'duracao_int_maior_noite.min' => 'Não é permitido números abaixo de 1.',
        ];
    }
}
