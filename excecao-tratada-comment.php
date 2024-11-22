<?php

// Função para validar os dados do usuário
function validarUsuario(array $usuario) {

    // Verifica se os campos 'codigo', 'nome' ou 'idade' estão vazios
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        // Se algum campo obrigatório estiver vazio, lança uma exceção com uma mensagem de erro
        throw new Exception("Campos obrigatórios não foram preenchidos! \n");
    }

    // Se todos os campos estiverem preenchidos, retorna true
    return true;
}

// Array associativo representando um usuário
$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57, // Corrigido para 'idade' (antes estava 'Idade', sensível a maiúsculas)
];

// Inicializa a variável $status como false
$status = false;

try {
    // Tenta validar o usuário chamando a função validarUsuario
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    // Captura a exceção lançada pela função validarUsuario e exibe a mensagem de erro
    echo $e->getMessage();
    die(); // Termina a execução do script após exibir a mensagem de erro
} finally {
    // O bloco finally é sempre executado, independentemente de exceção
    echo "Status da operação: " . (int)$status; // Converte o status para um número inteiro (0 ou 1)
    die(); // Termina a execução do script aqui (ou seja, o código após este ponto não será executado)
}

// Este código nunca será alcançado devido ao 'die()' no bloco finally
echo "\n.... Executando....\n";

?>
