<?php

function validarUsuario(array $usuario){

    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos! \n");
    }

    return true;

}   

$usuario = [
    'codigo' => 1,
    'nome' => 'Marcus',
    'Idade' => 57,

];

$status = false;

try {

    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
} finally {
    echo "Status da operação: ". (int)$status;
    die();
}

echo "\n.... Executando....\n";

?>