<?php
require_once "autoload.php";

use classes\abstratas\Funcionario;
use classes\funcionarios\Designer;
use classes\funcionarios\Diretor;
use classes\sistemaInterno\GerenciadorBonificacao;

$d = new Diretor("Jhon", "00100100132", 5000.00);


$d->gerenciados['Marcelo'] = new Designer("Marcelo", "02310100132", 5000.00);
$d->gerenciados['Joao'] = new Designer("Joao", "03210100132");
$d->gerenciados['Junior'] = new Designer("Junior", "03310100132");

$d->senha = '071';

$gerenciador = new GerenciadorBonificacao();
$gerenciador->AutentiqueAqui($d, '071');
$gerenciador->registrar($d);

echo($d);
echo '<br/><br/>';
echo($d->gerenciados());
