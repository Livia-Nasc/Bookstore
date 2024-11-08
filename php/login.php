<?php
require_once('conexao.php');
// Obtém a conexão PDO
$conn = getConexao();
// Inicia uma sessão
session_start();
// Registra os valores recebidos do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Prepara e executa a consulta SQL para obter o hash da senha
$sql = "SELECT * FROM user WHERE usuario = :usuario";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->execute();

// Verifica se existe algum registro retornado
if ($stmt->rowCount() == 1) {
    $usuarioData = $stmt->fetch();
    $senhaHash = $usuarioData['senha'];

    // Verifica se a senha inserida pelo usuário corresponde ao hash armazenado
    if (password_verify($senha, $senhaHash)) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $usuarioData['admin'];
        
        // Redireciona para a página inicial
        header("Location: ../home.php");
        exit;
    } else {
        echo "<script type='text/javascript'>
            alert('Senha incorreta');
            window.location='../entrar.php';
        </script>";
    }
} else {
    echo "<script type='text/javascript'>
        alert('Usuário não encontrado');
        window.location='../entrar.php';
    </script>";
}
?>
