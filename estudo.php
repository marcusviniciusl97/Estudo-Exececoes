<?php

class contaBancaria
{

    private $banco;
    private $nomeTitular;
    private $numeroConta;
    private $agenciaConta;
    private $saldo;


    public function __construct($banco, $nomeTitular, $numeroConta, $agenciaConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
        $this->agenciaConta = $agenciaConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo(){

        return 'Seu saldo é de R$ ' . $this->saldo;
    }

    public function depositar($valor){

        $this->saldo += $valor;
        return 'Deposito de R$ '. $valor;
    }

    public function sacar($valor){

        $this->saldo -= $valor;
        return 'Saque de R$ '. $valor;
    }
    
}

$conta = new contaBancaria(

    'Banco Santander',
    'Marcus Vinicius',
    '96458-7',
    '8504',
    0    
);
    
    echo $conta->obterSaldo();

    echo PHP_EOL;

    $conta->depositar(500.00);

    echo PHP_EOL;

    echo $conta->obterSaldo();

    echo PHP_EOL;

    $conta->sacar(150.00);

    



?>