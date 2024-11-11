<?php
session_start(); // Inicia a sessão ou retoma a sessão existente

// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';
$conn = getConexao();
// Verifica se a sessão do usuário está ativa
if (!isset($_SESSION['usuario'])) {
    header('location:../entrar.php'); // Redireciona para login se não estiver logado
    exit;
}

// Obtém os dados do produto enviados pelo formulário via POST
$id_livros = $_POST['id_livros'];
$usuario = $_SESSION['usuario'];

// Insere o item no carrinho do banco de dados
$sql = 'INSERT INTO carrinho(id_usuario, id_livros) VALUES (:id_usuario, :id_livros)';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id_usuario', $usuario);
$stmt->bindParam(':id_livros', $id_livros);

if ($stmt->execute()) {
    // Redireciona para o carrinho se a inserção for bem-sucedida
    header('Location: ../carrinho.php');
    exit;
} else {
    echo "Erro ao adicionar ao carrinho.";
}
?>
