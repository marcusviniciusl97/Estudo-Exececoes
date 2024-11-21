<?php

class contaBancaria // Foi definida a Classe que será utilizada para realizar o cadastro da conta bancária.
{

    private $banco;
    private $nomeTitular; // Definição dos objetos.
    private $numeroConta;
    private $agenciaConta;
    private $saldo;


    public function __construct($banco, $nomeTitular, $numeroConta, $agenciaConta, $saldo) // Utilizando o function __construct para definir os valores dos objetos.
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
        $this->agenciaConta = $agenciaConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo(){   //utilização da função para saber o saldo vindo do $conta = new contaBnacaria.

        return 'Seu saldo é de R$ ' . $this->saldo;
    }

    public function depositar($valor){ //Função 1

        $this->saldo += $valor;
        return 'Deposito de R$ '. $valor;
    }

    public function sacar($valor){ //Função 2

        $this->saldo -= $valor;
        return 'Saque de R$ '. $valor;
    }
    
} // Lembrar que o escopo deve ser fechado da classe mantendo o que é public e private.

$conta = new contaBancaria( //Seguindo a ordem no qual foi determinada os objetos da classe no function __contruct.

    'Banco Santander', //Valores de entrada para ser reproduzido nos objetos da classe.
    'Marcus Vinicius',
    '96458-7',
    '8504',
    0    
);
    
    echo $conta->obterSaldo(); // Imprimir o saldo da conta atual.

    echo PHP_EOL; // Utilizado para pular uma linha.

    $conta->depositar(500.00); // Valor dado a variável $valor na função depositar, montada dentro do escopo da classe. Função 1.

    echo PHP_EOL;

    echo $conta->obterSaldo(); // Imprimir o saldo da conta atual. Está sendo utilizado o echo pois foi dado como return da function apenas a string. Function 1 e 2.

    echo PHP_EOL;

    $conta->sacar(150.00); // Valor dado a variável $valor na função sacar, montada dentro do escopo da classe. Função 2. JS = conta.sacar() PHP = $conta->sacar()

    echo PHP_EOL;

    echo $conta->obterSaldo();

    



?>