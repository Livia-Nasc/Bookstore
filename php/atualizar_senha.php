<?php
    require_once('conexao.php');
    // Obtém a conexão PDO
    $conn = getConexao();
    // Registra os valores recebidos do formulário
    $email = $_POST['email'];
    $senha = 'a';
    $senhaConfirm = 'a';
    $sql = "SELECT * FROM user WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    if ($stmt->rowCount() == 1) {
        if($senha == $senhaConfirm){
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $query = "UPDATE user SET senha = :senha WHERE email = :email";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senhaHash);
            $stmt->execute();
            header("Location: ../entrar.php");
            exit;
        }else{
            echo "Senhas não coincidem";
        }
    }
?>