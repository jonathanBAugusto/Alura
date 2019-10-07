<?php

namespace src\model;

use src\exceptions\OperacaoNaoRealizadaException;
use src\logics\Validacao;
use src\exceptions\SaldoInsuficienteException;

class ContaCorrente
{
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;

    public $totalSaquesNaoPermitidos;

    public static $operacoesNaoRealizadas;

    public static $taxaOperação;

    public static $totalDeContas;


    /* ----------- Getters and Setters ----------- */
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $valor)
    {
        if ($attribute == 'saldo' || $attribute == 'titular')
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

        self::$totalDeContas++;
        try {
            if (self::$totalDeContas < 1)
                throw new DivisionByZeroError('Valor inferior a zero!');
            self::$taxaOperação = 1263 / self::$totalDeContas;
        } catch (\DivisionByZeroError $e) {
            echo $e->getMessage();
            exit();
        }
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
        Validacao::verificaNumerico($valor);

        if ($valor > $this->saldo)
            throw new SaldoInsuficienteException('Saldo Insuficiente', $valor, $this->saldo);

        $this->saldo -= $valor;

        return $this;
    }

    public function depositar($valor)
    {
        Validacao::verificaNumerico($valor);

        $this->saldo += $valor;

        return $this;
    }

    public function transferir($valor, ContaCorrente $contaCorrente)
    {
        try {
            Validacao::verificaNumerico($valor);
    
            if ($valor < 0) {
                throw new \Exception('Não é permitido transferências de valor negativo!');
            }
    
            $this->sacar($valor);
            $contaCorrente->depositar($valor);
            return $this;
        } catch (\Exception $e) {
            ContaCorrente::$operacoesNaoRealizadas++;
            throw new OperacaoNaoRealizadaException("Operação não realizada", 55, $e);
        }
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
        $conta = ['titular' => $this->titular, 'agencia' => $this->agencia, 'numero' => $this->numero, 'saldo' => number_format($this->saldo, 2, ",", "."), 'totalSaquesNaoPermitidos' => $this->totalSaquesNaoPermitidos];
        return json_encode($conta);
    }
}
