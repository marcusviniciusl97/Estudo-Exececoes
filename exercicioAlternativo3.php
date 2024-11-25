<?php

function Divisao($num1, $num2){

    if($num1 == 0 || $num2 == 0 ){
        throw new Exception("Erro: O numero não pode ser dividido por zero!\n");

    }

    return $num1 / $num2;
}

$num1 = 10;
$num2 = 20;

try{
    $resultado = divisao($num1, $num2);
    echo "Resultado: $resultado\n";
    } catch (Exception $e){
        echo $e->getMessage();
    }finally{
        echo "\n....Processo Executado....\n";
}




