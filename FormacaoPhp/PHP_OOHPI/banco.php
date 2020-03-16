<?php

require_once './autoload.php';

use src\Model\{
    Conta\Conta,
    Conta\Titular,
    CPF,
    Endereco,
};

$endereco = new Endereco('Maringa', 'zona 2', 'Marco Véio', '35F');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
