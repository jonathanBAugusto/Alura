<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta('071.065.151-23', 'Jhon Doe');
$primeiraConta->depositar(600);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
