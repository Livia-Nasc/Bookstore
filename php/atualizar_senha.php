<?php
    require_once('conexao.php'); // Inclui o arquivo de conexão com o banco de dados

    // Obtém a conexão PDO usando a função getConexao()
    $conn = getConexao();

    // Registra os valores recebidos do formulário
    $email = $_POST['email'];          // Email enviado pelo formulário
    $senha = $_POST['senha'];          // Nova senha fornecida pelo usuário
    $senhaConfirm = $_POST['senhaConfirm']; // Confirmação da nova senha fornecida pelo usuário

    // Prepara a consulta SQL para verificar se o email existe na tabela de usuários
    $sql = "SELECT * FROM user WHERE email = :email";
    $stmt = $conn->prepare($sql); // Prepara a consulta SQL
    $stmt->bindParam(':email', $email); // Vincula o parâmetro :email à variável $email
    $stmt->execute(); // Executa a consulta SQL

    // Verifica se um usuário com o email fornecido foi encontrado
    if ($stmt->rowCount() == 1) {
        // Verifica se a senha e a senha de confirmação coincidem
        if($senha == $senhaConfirm){
            // Se as senhas coincidem, cria um hash para a nova senha
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT); // Cria um hash seguro da senha

            // Prepara a consulta SQL para atualizar a senha do usuário
            $query = "UPDATE user SET senha = :senha WHERE email = :email";
            $stmt = $conn->prepare($query); // Prepara a consulta SQL
            $stmt->bindParam(':email', $email); // Vincula o parâmetro :email
            $stmt->bindParam(':senha', $senhaHash); // Vincula o parâmetro :senha
            $stmt->execute(); // Executa a atualização no banco de dados

            // Redireciona o usuário para a página de login após a atualização da senha
            header("Location: ../entrar.php");
            exit; // Garante que o script pare de ser executado após o redirecionamento
        } else {
            // Exibe uma mensagem de erro se as senhas não coincidirem
            echo "Senhas não coincidem";
        }
    }
?>
