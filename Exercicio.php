<?php

class dadosVenda{

    private $produto;
    private $quantidade;
    private $data;
    private $valorTotal;

    public function __construct($produto, $quantidade, $data, $valorTotal){

    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->data = $data;
    $this->valorTotal = $valorTotal;

    }

    public function detalhesVenda(){

        return "Produto: $this->produto\nQuantidade: $this->quantidade\nData: $this->data\nvalor Total: $this->valorTotal"; 
    }
}

$venda1 = new dadosVenda(

    'Placa de Video',
    3,
    '21/11/2024',
    4500.00,
);

echo $venda1->detalhesVenda();

?>
