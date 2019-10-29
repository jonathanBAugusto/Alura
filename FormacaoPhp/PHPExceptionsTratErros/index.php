<?php
ini_set('display_errors', 1);
ini_set('display_notices', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charser=utf-8');

require "autoload.php";

use src\model\ContaCorrente;

echo "<pre>";
$contaJhon = new ContaCorrente('Jhon', '3352', '35222', 500.25);

$contaDoe = ContaCorrente::Conta('Doe', '0722', '33325', 0.05);
$contas = [];
$contas['Jhon'] = $contaJhon;
$contas['Doe'] = $contaDoe;
$contas['Max'] = ContaCorrente::Conta('Max', '3231', '34553', 24033.05);
$contas['Julie'] = ContaCorrente::Conta('Julie', '4123', '76745', 20.443);
$contas['Marry'] = ContaCorrente::Conta('Marry', '0976', '55464', 1130.05);
$contas['Alex'] = ContaCorrente::Conta('Alex', '7885', '987887', 23332.05);
$contas['Joao'] = ContaCorrente::Conta('Joao', '7885', '4879887', 23332.05);
$contas['Lincon'] = ContaCorrente::Conta('Lincon', '7885', '7887887', 23332.05);
$contas['Pella'] = ContaCorrente::Conta('Pella', '7885', '687887', 23332.05);
$contas['AleNincomx'] = ContaCorrente::Conta('Nincom', '7885', '870887', 23332.05);

echo '<br>';
echo 'Total de contas: ' . ContaCorrente::$totalDeContas;
echo '<br>';
echo 'Taxa: ' . ContaCorrente::$taxaOperação;
echo '<br>';
echo '<h1>Contas Correntes</h1>';
echo '<h2>Conta corrente: Titular: ' . $contas['Julie']->titular . '</h2>';
echo '<br>Saldo: ' . $contas['Julie'];
try {
    echo '<br>';
    $contas['Julie']->transferir(3000, $contas['Pella']);
} catch (\src\exceptions\SaldoInsuficienteException $e) {
    $contas['Julie']->totalSaquesNaoPermitidos++;
    echo  $e->getMessage() . ' Saldo em conta: ' . $e->saldo . ' Valor do Saque: ' . $e->valor;
    echo ($e);
} catch (\InvalidArgumentException $e) {
    echo  $e->getMessage();
} catch (\Exception $e) {
    echo $e->getPrevious()->getTraceAsString();
    // echo $e->getPrevious()->getMessage();
    // echo $e->getMessage();
}
echo '<br>';
echo '<br>Saldo: ' . $contas['Julie'];

echo '<br>';

echo '<br>';

echo (ContaCorrente::$operacoesNaoRealizadas);
