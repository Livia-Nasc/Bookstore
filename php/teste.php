<?php
session_start();
require_once("conexao.php");

// Obtém a conexão PDO
$conn = getConexao();

// Verifica se o usuário está logado; se não, redireciona para a página de login
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit;
}

$usuario = $_SESSION['usuario']; // Recupera o nome de usuário da sessão

// Prepara e executa uma consulta para verificar se o usuário existe no banco de dados
$sql = "SELECT * FROM user WHERE usuario = :usuario";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->execute();

// Se o usuário existe, obtém a lista dos 12 primeiros livros ordenados por preço (em ordem ascendente)
if ($stmt->rowCount() == 1) {
    $query = "SELECT l.nome AS titulo, l.id_livros, l.lancamento, l.descricao, l.preco, a.nome AS autor
              FROM livros AS l
              JOIN autores AS a ON l.id_autores = a.id_autores
              ORDER BY l.preco ASC LIMIT 12";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Armazena o resultado da consulta em uma variável
    $result = $stmt->fetchAll();

    // Se o resultado contém livros, armazena suas informações em variáveis de sessão
    if ($result) {
        $_SESSION['Titulo1'] = [];
        $_SESSION['Lancamento1'] = [];
        $_SESSION['Descricao1'] = [];
        $_SESSION['Autor1'] = [];
        $_SESSION['Id_livros1'] = [];
        $_SESSION['Preco1'] = [];

        // Itera sobre os resultados e preenche as variáveis de sessão com os dados de cada livro
        foreach ($result as $value) {
            $_SESSION['Titulo1'][] = $value['titulo'];
            $_SESSION['Lancamento1'][] = $value['lancamento'];
            $_SESSION['Descricao1'][] = $value['descricao'];
            $_SESSION['Autor1'][] = $value['autor'];
            $_SESSION['Id_livros1'][] = $value['id_livros'];
            $_SESSION['Preco1'][] = $value['preco'];
        }
    } else {
        $_SESSION['erro'] = "Livro não encontrado."; // Define uma mensagem de erro se nenhum livro foi encontrado
    }
}
?>
