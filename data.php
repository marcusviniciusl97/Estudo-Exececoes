<?php

$dataAtual = new DateTime();

$dataAtual->sub(new DateInterval('P5DT10H50M'));

echo $dataAtual->format('d-m-Y - H:i:s'). PHP_EOL;

?>

