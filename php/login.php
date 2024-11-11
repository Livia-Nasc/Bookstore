<?php
// Inclui o arquivo de conexão com o banco de dados
require_once('conexao.php');

// Obtém a conexão PDO
$conn = getConexao();

// Inicia a sessão para gerenciar os dados do usuário
session_start();

// Registra os valores recebidos do formulário de login
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Prepara a consulta SQL para buscar o usuário no banco de dados
$sql = "SELECT * FROM user WHERE usuario = :usuario";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario', $usuario);  // Vincula o parâmetro para evitar SQL injection
$stmt->execute();

// Verifica se o usuário foi encontrado no banco
if ($stmt->rowCount() == 1) {
    // Obtém os dados do usuário
    $usuarioData = $stmt->fetch();
    $senhaHash = $usuarioData['senha'];  // Recupera o hash da senha armazenada no banco

    // Verifica se a senha fornecida corresponde ao hash da senha armazenado
    if (password_verify($senha, $senhaHash)) {
        // Se a senha for correta, registra o nome do usuário e sua função (admin) na sessão
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $usuarioData['admin'];
        
        // Redireciona para a página inicial após login bem-sucedido
        header("Location: ../home.php");
        exit;  // Interrompe a execução do script após o redirecionamento
    } else {
        // Se a senha não for válida, exibe um alerta e redireciona para a página de login
        echo "<script type='text/javascript'>
            alert('Senha incorreta');
            window.location='../entrar.php';
        </script>";
    }
} else {
    // Se o usuário não for encontrado, exibe um alerta e redireciona para a página de login
    echo "<script type='text/javascript'>
        alert('Usuário não encontrado');
        window.location='../entrar.php';
    </script>";
}
?>
