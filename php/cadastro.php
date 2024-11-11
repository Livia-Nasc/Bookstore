<?php
    /* Cadastro de usuário */
    require_once('conexao.php'); // Inclui o arquivo de conexão com o banco de dados
    $conn = getConexao(); // Obtém a conexão PDO com o banco de dados

    // Recebe os dados do formulário de cadastro do usuário
    $usuario = $_POST["usuario"];      // Nome de usuário
    $email = $_POST["email"];          // Email do usuário
    $data = $_POST["data"];            // Data de nascimento do usuário
    $senha = $_POST["senha"];          // Senha fornecida pelo usuário
    $senha_confirm = $_POST["senha_confirm"]; // Confirmação de senha fornecida pelo usuário

    // Verifica se a senha e a confirmação de senha são iguais
    if($senha == $senha_confirm){
        // Se as senhas coincidem, cria um hash da senha usando bcrypt
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Prepara a consulta SQL para inserir os dados do novo usuário
        $sql = 'INSERT INTO user(usuario, email, data, senha) VALUES (:usuario, :email, :data, :senha)';
        $stmt = $conn -> prepare($sql); // Prepara a consulta para execução
        $stmt->bindParam(':usuario', $usuario);  // Vincula o valor do nome de usuário
        $stmt->bindParam(':data', $data);        // Vincula o valor da data de nascimento
        $stmt->bindParam(':email', $email);      // Vincula o valor do email
        $stmt->bindParam(':senha', $senhaHash);  // Vincula o valor da senha criptografada

        // Executa a consulta de inserção no banco de dados
        if ($stmt->execute()){                              
            // Se a inserção for bem-sucedida, redireciona para a página de login com uma mensagem de sucesso
            echo "<script type='text/javascript'>
                window.location='../entrar.php'; // Redireciona para a página de login
                alert('Usuário cadastrado'); // Exibe um alerta informando que o usuário foi cadastrado
            </script>";
        } else {
            // Se ocorrer um erro ao cadastrar o usuário
            echo "Erro ao cadastrar!"; // Exibe uma mensagem de erro
        }
    }
    else{
        // Se as senhas não coincidirem, redireciona de volta para a página de cadastro com um alerta
        echo "<script type='text/javascript'>
        window.location='../cadastrar.php'; // Redireciona para a página de cadastro
        alert('Senhas não coincidem'); // Exibe um alerta informando que as senhas não coincidem
        </script>";
    }
?>