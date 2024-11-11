<?php
session_start(); // Inicia a sessão ou retoma a sessão existente

// Verifica se a sessão do carrinho já existe. Se não, cria um carrinho vazio.
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Pega as informações do produto enviadas pelo formulário via POST
$produto = [
    'id_livros' => $_POST['id_livros'], // ID do livro
    'preco' => $_POST['preco'],         // Preço do livro
    'titulo' => $_POST['titulo'],       // Título do livro
    'autor' => $_POST['autor'],         // Autor do livro
    'descricao' => $_POST['descricao'], // Descrição do livro
    'lancamento' => $_POST['lancamento'], // Data de lançamento do livro
];

// Adiciona o produto ao carrinho, que é armazenado na sessão
$_SESSION['carrinho'][] = $produto;

// Redireciona o usuário para a página de carrinho após adicionar o produto
header('Location: ../carrinho.php');
exit; // Garante que o script pare de ser executado após o redirecionamento
?>
