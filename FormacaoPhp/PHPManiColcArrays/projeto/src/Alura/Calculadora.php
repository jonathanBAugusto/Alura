<?php

namespace Alura;

class Calculadora
{
    static function calculaMedia(array $notas)
    {
        $qtdeNotas = sizeof($notas);

        if($qtdeNotas > 0){
        $soma = 0;
        foreach ($notas as $nota)
            $soma += $nota;

        $media = $soma / $qtdeNotas;

        echo "<p>A média é: $media</p>";
        }else{
            echo "<p>Sem médias a Calcular</p>";
        }
    }
}
