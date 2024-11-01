<?php
require_once('conexao.php');
        // Obter a conexão PDO
        $conn = getConexao();

        // Escapar os valores recebidos do formulário
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Preparar e executar a consulta SQL
        $sql = "SELECT * FROM user WHERE usuario = :usuario AND senha = :senha";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        // Verificar se existe algum registro retornado
        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch();

            header("Location: ../home.html");
            exit;
        } else {
            echo "<script type='text/javascript'>
        window.location='http://localhost/livia/Bookstore/entrar.html';
        alert('Usuário ou senha incorreto');
        </script>";;
        }
    

?>
