<?php

namespace classes\abstratas;

abstract class Funcionario
{
    public $nome;
    public $cpf;
    public $salario;

    const piso = 981.33;

    public function __construct($nome, $cpf, $salario = self::piso)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    public function __toString()
    {
        return json_encode($this);
    }

    abstract public function getBonificacao();

    final public function aumentarSalario()
    {
        $this->salario *= 1.5;
    }
}
