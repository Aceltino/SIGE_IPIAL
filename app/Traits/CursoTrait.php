<?php

namespace App\Traits;
use App\Models\Cursos;
use App\Models\Professor;
use App\Models\Area_formacao;
use App\Models\Pessoa;

trait CursoTrait
{
    public static function validateName($nome){

    $tot = strlen($nome);
    $erro['erro'] = 0;

    if ($tot == 0) {
        $erro['erro'] = 5;
    }

    for($i = 0; $i < $tot; $i++){
    	if ($erro['erro'] > 0) {
    		break;
    	}

    	$get = substr($nome, $i, 1);

    	if($i == 0 && $get == " "){
    		$erro['erro'] = 1;
    	}
    	switch ($get) {
    		case ' ':{
				if (substr($nome, $i+1, 1) == " ") {
					$erro['erro'] = 2;
    			} break;
    		}
			case '0':
			case '1':
			case '2':
			case '3':
			case '4':
			case '5':
			case '6':
			case '7':
			case '8':
			case '9':{
				$erro['erro'] = 3; break;
			}
			case '|':
			case '!':
			case '"':
			case '@':
			case '#':
			case '£':
			case '$':
			case '§':
			case '%':
			case '€':
			case '&':
			case '/':
			case '{':
			case '(':
			case '[':
			case ')':
			case ']':
			case '=':
			case '}':
			case '?':
			case '«':
			case '»':
			case '+':
			case '*':
			case '¨':
			case '´':
			case '`':
			case 'º':
			case 'ª':
			case '~':
			case '^':
			case ',':
			case ';':
			case '.':
			case ':':
			case '-':
			case '_':
			case '<':
			case '>': {
				$erro['erro'] = 4; break;
			}
			default:
				if ($get == "'" || $get == "«") {
	    			$erro['erro'] = 4; break;
	    		}
		}
	}

	if($erro['erro'] > 1){
        return $erro;
    } else{
		$n = strtoupper($nome);
		$var[0] = str_replace("«",  "", $n);
        $var[1] = str_replace("»",  "", $var[0]);
        $var[2] = str_replace("'",  "", $var[1]);
        $var[3] = str_replace("´",  "", $var[2]);
        $var[4] = str_replace("º",  "", $var[3]);
        $var[5] = str_replace("ª",  "", $var[4]);
        $var[6] = str_replace("£",  "", $var[5]);
        $var[7] = str_replace("§",  "", $var[6]);
        $var[8] = str_replace("€",  "", $var[7]);
        $var['nome'] = str_replace("¨",  "", $var[8]);

		return $var;
	}

    }

    public static function letrasMaiusculas($nome){

        $n = strtoupper($nome);

        $var[0] = str_replace("á",  "Á", $n);
        $var[1] = str_replace("à",  "À", $var[0]);
        $var[2] = str_replace("ã",  "Ã", $var[1]);
        $var[3] = str_replace("â",  "Â", $var[2]);
        $var[4] = str_replace("é",  "É", $var[3]);
        $var[5] = str_replace("è",  "È",  $var[4]);
        $var[6] = str_replace("ê",  "Ê",  $var[5]);
        $var[7] = str_replace("í",  "Í",  $var[6]);
        $var[8] = str_replace("ì",  "Ì", $var[7]);
        $var[9] = str_replace("î",  "Î", $var[8]);
        $var[10] = str_replace("ó",  "Ó",  $var[9]);
        $var[11] = str_replace("ò",  "Ò", $var[10]);
        $var[12] = str_replace("õ",  "Õ", $var[11]);
        $var[13] = str_replace("ô",  "Ô", $var[12]);
        $var[14] = str_replace("ú",  "Ú", $var[13]);
        $var[15] = str_replace("ù",  "Ù", $var[14]);
        $var[16] = str_replace("ç",  "Ç", $var[15]);
        $var[17] = str_replace("Ç",  "Ç", $var[16]);

        $var['nome'] = str_replace("û",  "Û", $var[17]);

        return $var;
    }

    public static function validateSigla($sigla){

        $s = strtoupper($sigla);
        $var[0] = str_replace("á", "A", $s);
        $var[1] = str_replace("à",  "A", $var[0]);
        $var[2] = str_replace("ã",  "A", $var[1]);
        $var[3] = str_replace("â",  "A", $var[2]);
        $var[4] = str_replace("é",  "E", $var[3]);
        $var[5] = str_replace("è",  "E",  $var[4]);
        $var[6] = str_replace("ê",  "E",  $var[5]);
        $var[7] = str_replace("í",  "E",  $var[6]);
        $var[8] = str_replace("ì",  "I", $var[7]);
        $var[9] = str_replace("î",  "I", $var[8]);
        $var[10] = str_replace("ó",  "O",  $var[9]);
        $var[11] = str_replace("ò",  "O", $var[10]);
        $var[12] = str_replace("õ",  "O", $var[11]);
        $var[13] = str_replace("ô",  "O", $var[12]);
        $var[14] = str_replace("ú",  "U", $var[13]);
        $var[15] = str_replace("ù",  "U", $var[14]);
        $var[16] = str_replace("û",  "U", $var[15]);
        $var[17] = str_replace("Á", "A", $var[16]);
        $var[18] = str_replace("À", "A", $var[17]);
        $var[19] = str_replace("Ã", "A", $var[18]);
        $var[20] = str_replace("Â", "A", $var[19]);
        $var[21] = str_replace("É", "E", $var[20]);
        $var[22] = str_replace("È", "E",  $var[21]);
        $var[23] = str_replace("Ê", "E", $var[22]);
        $var[24] = str_replace("Í", "I",  $var[23]);
        $var[25] = str_replace("Ì", "I", $var[24]);
        $var[26] = str_replace("Î", "I", $var[25]);
        $var[27] = str_replace("Ó", "O",  $var[26]);
        $var[28] = str_replace("Ò", "O", $var[27]);
        $var[29] = str_replace("Õ", "O", $var[28]);
        $var[30] = str_replace("Ô", "O", $var[29]);
        $var[31] = str_replace("Ú", "U", $var[30]);
        $var[32] = str_replace("Ù", "U", $var[31]);
        $var[33] = str_replace("Û", "U", $var[32]);
        $var[34] = str_replace("ç", "C", $var[33]);
        $var[35] = str_replace("Ç", "C", $var[34]);
        $var['sigla'] = str_replace(" ", "", $var[35]);

        return ($var);

    }

    public static function checkSigla($sigla){
        $valor = self::validateName($sigla);
        //dd($valor);
        if(isset($valor['erro'])){
            return $valor;
        }elseif(isset($valor['nome'])){
            $sig['sigla'] = self::validateSigla($valor['nome']);
            return $sig;
        }
    }

    public static function checkName($nome){
        $valor = self::validateName($nome);
        //dd($valor);
        if(isset($valor['erro'])){
            return $valor;
        }elseif(isset($valor['nome'])){
            $dados['curso'] = self::letrasMaiusculas($valor['nome']);
            return $dados;
        }
    }

    public static function erro($erro){
        if($erro == 1){
            return redirect()->back()->with("erro", "Os campos não podem conter nenhum espaço no início!");
        } elseif($erro == 2){
            return redirect()->back()->with("erro", "Espaçamento amais entre os nomes!");
        } elseif ($erro == 3) {
            return redirect()->back()->with("erro", "Os campos não podem conter nenhum número!");
        } elseif ($erro == 4) {
            return redirect()->back()->with("erro", "Os campos devem conter apenas letras do alfabeto");
        }
        elseif ($erro == 5) {
            return redirect()->back()->with("erro", "Preencha todos os campos!");
        }
    }


    public static function erroAreaFormacao($erro){
        if($erro == 1){
            return "Os campos não podem conter nenhum espaço no início!";
        } elseif($erro == 2){
            return "Espaçamento amais entre os nomes!";
        } elseif ($erro == 3) {
            return "Os campos não podem conter nenhum número!";
        } elseif ($erro == 4) {
            return "Os campos devem conter apenas letras do alfabeto";
        }
        elseif ($erro == 5) {
            return "Preencha todos os campos!";
        }
    }
}
?>
