<?php
    /* Cadastro de usuário */   
    require_once('conexao.php');
    $conn = getConexao();
    $nome = $_POST["nome"];
    $autor = $_POST["autor"];
    $lancamento = $_POST["lancamento"];
    $isbn = $_POST["isbn"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    
    $query = "SELECT * FROM livros WHERE nome = :nome";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();
    if($stmt->rowCount() < 1){
        $mysql = 'SELECT * FROM autores WHERE nome = :autor';
        $stmt = $conn -> prepare($mysql);
        $stmt->bindParam(':autor', $autor);

        if ($stmt->execute()){
            $id_autores = $stmt->fetch();         
            $sql = 'INSERT INTO livros(nome, id_autores, lancamento, isbn, descricao, preco) VALUES (:nome, :id_autores, :lancamento, :isbn, :descricao, :preco)';
            $stmt = $conn -> prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':id_autores', $id_autores['id_autores']);
            $stmt->bindParam(':lancamento', $lancamento);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':preco', $preco);

            if ($stmt->execute()){                              
                /* Ao cadastrar com sucessor irá ser redirecionado para a página de login e mostrará um alert confirmando a cadastração do usuário  */
                echo "<script type='text/javascript'>
                    window.location='../cadastrar-livro.php';
                    alert('Livro cadastrado');
                </script>";
                
            } else {            
                echo "Erro ao cadastrar!";
            }
        } else {            
            echo "Erro ao cadastrar!";
        }
    }
    else{
        echo "<script type='text/javascript'>
        window.location='../cadastrar-autor.php';
        alert('Livro já cadastrado');
        </script>";
    }
?>