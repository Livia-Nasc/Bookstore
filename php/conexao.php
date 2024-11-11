<?php
// Função para obter a conexão com o banco de dados
function getConexao()
{
    // Definindo os parâmetros de conexão (DSN) com o banco de dados MySQL
    $dsn = 'mysql:host=localhost;dbname=booksonli;charset=utf8';  // DSN define o host e o nome do banco de dados
    $user = 'root';  // Nome de usuário para acessar o banco de dados
    $pass = '';      // Senha para o usuário (nesse caso, está em branco)

    try {
        // Tentativa de criação da conexão PDO com o banco de dados
        $pdo = new PDO($dsn, $user, $pass);  // Cria a instância PDO para conectar ao MySQL
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Configura o modo de erro para lançar exceções
        return $pdo;  // Retorna a instância de conexão PDO em caso de sucesso
    } catch (PDOException $e) {
        // Caso ocorra um erro na conexão, captura a exceção e exibe a mensagem de erro
        echo "Erro de conexão: " . $e->getMessage();  // Exibe a mensagem de erro da exceção
        exit;  // Encerra o script em caso de erro de conexão
    }
}
?>
