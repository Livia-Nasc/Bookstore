<?php
session_start();

// Verifica se a sessão do carrinho já existe, se não, cria uma
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Pega as informações do produto enviado pelo formulário
$produto = [
    'produtoId' => $_POST['produtoId'],
    'preco' => $_POST['preco'],
    'imagem' => $_POST['imagem'],
    'autor' => $_POST['autor'],
    'descricao' => $_POST['descricao'],
];

// Adiciona o produto ao carrinho
$_SESSION['carrinho'][] = $produto;

// Redireciona para a página de carrinho
header('Location: carrinho copy.php');
exit;
?>
