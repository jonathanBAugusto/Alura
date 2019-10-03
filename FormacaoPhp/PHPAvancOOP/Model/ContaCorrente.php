<?php
class ContaCorrente
{
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;
    /* ----------- Getters and Setters ----------- */
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $valor){
        if ($attribute == 'titular' || $attribute == 'saldo')
            return;
        $this->$attribute = $valor;
    }
    /* ----------- Getters and Setters -----------*/

    public function __construct($titular, $agencia, $numero, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    /**
     * New Constructor of ContaCorrente
     *
     * @param $titular
     * @param $agencia
     * @param $numero
     * @param $saldo
     * @return new Object ContaCorrente
     */
    public static function Conta($titular, $agencia, $numero, $saldo)
    {
        $new = new ContaCorrente($titular, $agencia, $numero, $saldo);
        return $new;
    }

    public function sacar($valor)
    {
        if ($valor > $this->saldo)
            echo "Impossível sacar o valor de R$ {$valor}. Saldo Insuficiente!" . PHP_EOL;
        else
            $this->saldo -= $valor;

        return $this;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;

        return $this;
    }

    public static function depositarStc(&$conta, $valor)
    {
        $conta->saldo += $valor;
    }

    public static function sacarStc(&$conta, $valor)
    {
        if ($valor > $conta->saldo)
            echo "Impossível sacar o valor de R$ {$valor}. Saldo Insuficiente!" . PHP_EOL;
        else
            $conta->saldo -= $valor;
    }

    public function __toString()
    {   
        $conta = ['titular' => $this->titular, 'agencia' => $this->agencia, 'numero' => $this->numero, 'saldo' => number_format($this->saldo, 2, ",", ".")];
        return json_encode($conta);
    }
}
