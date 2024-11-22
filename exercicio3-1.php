<?php

function divisao(Array $numero){

    if (($numero['num1'] == 0) || ($numero['num2'] == 0)){
        throw new Exception("Resultado não pode ser igual a 0!\n");
    }
        return $numero;
    
}

$numeros = [

    'num1' => 10,
    'num2' => 0,
];

$status = false;

try {
    $status = divisao($numeros);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
} finally {
    echo "\n.....Processo Executado....\n";
}



?>
