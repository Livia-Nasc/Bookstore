<?php
session_start();
include 'php/conexao.php'; // Inclui a conexão com o banco de dados
$conn = getConexao();
// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('location:entrar.php');
    exit;
}

$id_usuario = $_SESSION['usuario'];

// Consulta para buscar os livros adicionados ao carrinho do usuário
$sql = 'SELECT l.preco, l.id_livros, l.nome as titulo, l.id_autores, l.preco,a.nome AS autor 
    FROM livros as l JOIN carrinho as c ON c.id_livros = l.id_livros
    JOIN autores AS a ON l.id_autores = a.id_autores 
    WHERE c.id_usuario = :id_usuario';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id_usuario', $id_usuario);
$stmt->execute();
$livrosCarrinho = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>