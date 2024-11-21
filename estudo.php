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
    }
}

$conta = new contaBancaria(

    'Banco Santander',
    'Marcus Vinicius',
    '96458-7',
    '8504',
    0    
);

    $conta->depositar(500.00);

    echo 'Você depositou R$ '. $this->saldo;

    echo $conta->obterSaldo();

?>