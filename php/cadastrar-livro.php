<?php
    /* Cadastro de usuário */   
    require_once('conexao.php');
    $conn = getConexao();
    $nome = $_POST["nome"];
    $nascimento = $_POST["data"];
    $nacionalidade = $_POST["nacionalidade"];
    
    $query = "SELECT * FROM livros WHERE nome = :nome";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();
    if($stmt->rowCount() < 1){
        $sql = 'INSERT INTO autores(nome, nascimento, nacionalidade) VALUES (:nome, :data, :nacionalidade)';
        $stmt = $conn -> prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':nacionalidade', $nacionalidade);

        if ($stmt->execute()){                              
            /* Ao cadastrar com sucessor irá ser redirecionado para a página de login e mostrará um alert confirmando a cadastração do usuário  */
            echo "<script type='text/javascript'>
                window.location='../cadastrar-autor.php';
                alert('Autor cadastrado');
            </script>";
            
        } else {            
            echo "Erro ao cadastrar!";
        }
    }
    else{
        echo "<script type='text/javascript'>
        window.location='../cadastrar-autor.php';
        alert('Autor já cadastrado');
        </script>";
    }
?>