<?php
session_start();

// Verifica se o id do produto foi passado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Remove o produto do carrinho
    foreach ($_SESSION['carrinho'] as $key => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['carrinho'][$key]);
            break;
        }
    }

    // Redireciona para o carrinho após a remoção
    header('Location: ../carrinho copy.php');
    exit();
}
?>
