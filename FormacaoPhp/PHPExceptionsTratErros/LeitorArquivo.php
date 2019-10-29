<?php

class LeitorArquivo
{
    private $arquivo;

    public function __construct($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function abrirArquivo()
    {
        echo 'Abrindo o arquivo <br />';
    }

    public function lerArquivo()
    {
        echo 'Lendo o arquivo <br />';
    }

    public function escreverArquivo()
    {
        echo 'Escrevendo o arquivo <br />';
    }

    public function fecharArquivo()
    {
        echo 'Fechando o arquivo <br />';
    }
}
