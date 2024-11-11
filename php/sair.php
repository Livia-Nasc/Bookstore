<?php
    session_start(); // Inicia uma sessão ou retoma a sessão existente
    
    // Remove as variáveis de sessão 'usuario' e 'senha' para efetuar o logout
    unset ($_SESSION['usuario']);  // Remove a variável de sessão 'usuario'
    unset ($_SESSION['senha']);    // Remove a variável de sessão 'senha'

    // Redireciona o usuário de volta para a página de login
    header('location:../entrar.php'); // Redireciona para a página 'entrar.php'
?>
