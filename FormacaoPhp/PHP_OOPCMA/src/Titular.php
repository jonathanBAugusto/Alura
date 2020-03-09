<?php

class Titular
{
    private $cpf;
    private $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
    public function getCpf()
    {
        return $this->cpf->getCpf();
    }
    public function getNome()
    {
        return $this->nome;
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 Caracteres!";
            exit();
        }
    }
}
