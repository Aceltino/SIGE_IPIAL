<?php

/*
 * @author Augusto Kussema
 */

if (!function_exists('getIdade')) {
    function getIdade($dataNascimento) {
        return \Carbon\Carbon::parse($dataNascimento)->age;
    }
}

if (!function_exists('getGenero')) {
    function getGenero($genero, $short=true) {

        if ($short)
            return $genero == "Masculino" ? "M" : "F";
            
        return $genero == "Masculino" ? "Masculino" : "Feminino";
    }
}
