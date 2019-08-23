<?php

require "autoload.php";

use Alura\ArrayUtils;

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];
//  adiciona os arrays em um unico array  [array1[0], array1[1], array2[0], array2[1]]
//  $relacionados = array_merge($correntistas, $saldos);
//  combina os arrays em um unico array associativo, [array1[0]] => [array2[0], ...]
$relacionados = array_combine($correntistas, $saldos);

if (array_key_exists("João", $relacionados)) {
    echo "O saldo do Joao é: {$relacionados["João"]}";
} else {
    echo "Não foi encontrado";
}

echo json_encode(ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados));




















// $correntistas = [
//     "Giovanni",
//     "João",
//     "Maria",
//     "Luis",
//     "Luisa",
//     "Rafael"
//   ];

//   $correntistasNaoPagantes = [
//     "Luis",
//     "Luisa",
//     "Rafael",
//   ];

//   $correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

//   echo "<pre>";
//   var_dump($correntistasPagantes);
//   echo "</pre>";






























// declare(strict_types=1);

// use Alura\ArrayUtils;

// require_once "autoload.php";

// echo "<pre>";

// $correntistas_e_compras = [
//     "Maria",
//     12,
//     "Giovanni",
//     25,
//     "Luis",
//     "Luisa",
//     "12"
// ];

// ArrayUtils::remover(12, $correntistas_e_compras);

// echo json_encode($correntistas_e_compras);



















// $nomes = "Jhon, Doe, Mary, July";

// $array_nomes = explode(", ", $nomes);

// foreach ($array_nomes as $nome) {
//     echo "<p><strong style=\"background-color: red;\">$nome</strong></p>";
// }

// $nomes_string = implode(", ", $array_nomes);

// echo "<p><strong style=\"background-color: red;\">$nomes_string</strong></p>";

// $saldos = [
//     1660,
//     3000,
//     2253,
//     4456,
//     100,
//     0.05,
//     10000
// ];

// foreach ($saldos as $saldo) {
//     echo "<p>O saldo é de: $saldo</p>";
// }

// sort($saldos);

// echo "<p>O menor saldo é de: $saldos[0]</p>";

// require_once "Calculadora.php";

// $notas = [7, 7, 7, 7, 7];

// Calculadora::calculaMedia($notas);

echo "</pre>";
