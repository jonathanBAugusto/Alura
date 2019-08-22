<?php declare(strict_types=1);
echo "<pre>";
require_once "ArrayUtils.php";

$correntistas_e_compras = [
    "Maria",
    12,
    "Giovanni",
    25,
    "Luis",
    "Luisa",
    "12"
];

ArrayUtils::remover(12, $correntistas_e_compras);

echo json_encode($correntistas_e_compras);



















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