<?php
function getConexao()
{
    $dsn = 'mysql:host=localhost;dbname=booksonli;charset=utf8';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
        exit; // Encerra o script em caso de erro de conexão
    }
}
?>
