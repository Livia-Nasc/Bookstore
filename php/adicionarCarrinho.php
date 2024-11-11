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

// Verifica se o livro já está no carrinho
$sql = 'SELECT COUNT(*) FROM carrinho WHERE id_usuario = :id_usuario AND id_livros = :id_livros';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id_usuario', $usuario);
$stmt->bindParam(':id_livros', $id_livros);
$stmt->execute();
$contador = $stmt->fetchColumn();

// Se o livro já estiver no carrinho, exibe uma mensagem e não insere novamente
if ($contador > 0) {
    echo "Este livro já foi adicionado ao seu carrinho!";
    // Você pode também redirecionar para o carrinho imediatamente, caso deseje:
    // header('Location: ../carrinho.php');
    // exit;
} else {
    // Se o livro não estiver no carrinho, insere o item
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
}
?>
