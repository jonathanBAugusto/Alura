<?php

require_once 'autoload.php';

use src\Model\{
    Conta\Conta,
    Conta\Titular,
    CPF,
    Endereco,
};

$conta = new Conta(
    new Titular(
        new CPF('072.072.034-96'),
        'Jhon Doe',
        new Endereco('Maringa', 'Zona 23', 'Rua LoL', '3574A'),
    )
);

$conta->depositar(500);
$conta->sacar(100);
echo ($conta->recuperaSaldo());
