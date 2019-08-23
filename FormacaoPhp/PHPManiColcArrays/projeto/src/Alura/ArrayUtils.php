<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils{
    public static function remover($elemento, array &$array){
        $posicao = array_search($elemento, $array, true);
        if(is_int($posicao))
            unset($array[$posicao]);
        else
            echo "Elemento $elemento nao encontrado";
    }

    public static function encontrarPessoasComSaldoMaior(float $saldo, array $array){
        $correntistasComSaldoMaior = [];
        foreach ($array as $key => $value) {
            if ($value > $saldo){
                $correntistasComSaldoMaior[] = $key;
            }
        }
        return $correntistasComSaldoMaior;
    }
}