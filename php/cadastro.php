<?php
    /* Cadastro de usuário */   
    require_once('conexao.php');
    $conn = getConexao();
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $senha = $_POST["senha"];
    $senha_confirm = $_POST["senha_confirm"];

    if($senha == $senha_confirm){
        $sql = 'INSERT INTO user(usuario, email, data, senha) VALUES (:usuario, :email, :data, :senha)';
        $stmt = $conn -> prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam('email', $email);
        $stmt->bindParam(':senha', $senha);

        if ($stmt->execute()){                              
            /* Ao cadastrar com sucessor irá ser redirecionado para a página de login e mostrará um alert confirmando a cadastração do usuário  */
            echo "<script type='text/javascript'>
                window.location='http://localhost/livia/Bookstore/entrar.html';
                alert('Usuário cadastrado');
            </script>";
            
        } else {            
            echo "Erro ao cadastrar!";
        }
    }
    else{
        echo "<script type='text/javascript'>
        window.location='http://localhost/livia/Bookstore/cadastrar.html';
        alert('Senhas não coincidem');
        </script>";
    }
?>