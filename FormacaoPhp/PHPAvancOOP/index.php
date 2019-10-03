<?php
ini_set('display_errors', 1);
ini_set('display_notices', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charser=utf-8');

require "Model/ContaCorrente.php";

$contaJhon = new ContaCorrente('Jhon','3352','35222', 500.25);

$contaDoe = ContaCorrente::Conta('Doe', '0722', '33325', 0.05);

$contas['Jhon'] = $contaJhon;
$contas['Doe'] = $contaDoe;
$contas['Max'] = ContaCorrente::Conta('Max', '3231', '34553', 24033.05);
$contas['Julie'] = ContaCorrente::Conta('Julie', '4123', '76745', 20.443);
$contas['Marry'] = ContaCorrente::Conta('Marry', '0976', '55464', 1130.05);
$contas['Alex'] = ContaCorrente::Conta('Alex', '7885', '87887', 23332.05);

echo $contas['Alex'];
$contas['Alex']->numero = '123456';
echo $contas['Alex'];