<?php
class Cpf
{
    private $cpf;
    public function __construct($cpf)
    {
        $this->validarCpf($cpf);
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    private function validarCpf($cpf)
    {
        if (empty($cpf) || strlen($cpf) != 11 && strlen($cpf) != 14) {
            echo 'O CPF necessita ter 11 ou 14(com pontuação) caractéres';
            exit();
        }
    }
}
