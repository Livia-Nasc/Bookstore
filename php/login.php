<?php
require_once('conexao.php');
        // Obtém a conexão PDO
        $conn = getConexao();
        // Inicia uma sessão
        session_start();
        // Registra os valores recebidos do formulário
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Prepara e executa a consulta SQL
        $sql = "SELECT * FROM user WHERE usuario = :usuario AND senha = :senha";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        // Verifica se existe algum registro retornado
        if ($stmt->rowCount() == 1) {
            $usuarioData = $stmt->fetch();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['admin'] = $usuarioData['admin'];

            header("Location: ../home.php");
            exit;
        } else {
            echo "<script type='text/javascript'>
                window.location='http://localhost/livia/Bookstore/entrar.php';
                alert('Usuário ou senha incorreto');
            </script>";
        }
    

?>
