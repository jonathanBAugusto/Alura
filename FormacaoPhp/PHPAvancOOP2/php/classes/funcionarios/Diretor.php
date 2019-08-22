<?php

namespace classes\funcionarios;

use classes\abstratas\FuncionarioAutenticavel;

class Diretor extends FuncionarioAutenticavel
{
    public $gerenciados;
    public function getBonificacao()
    {
        return $this->salario * 0.5;
    }

    public function gerenciados(){
        return json_encode($this->gerenciados);
    }
    
    public function __toString()
    {
        return json_encode([$this->nome, $this->cpf, $this->salario]);
    }
}
