<?php
    session_start();
    if(isset ($_SESSION['nomeLivro']) == true){
        unset ($_SESSION['nomeLivro']);
        unset ($_SESSION['lancamentoLivro']);
        unset ($_SESSION['descricaoLivro']);
    }
    
    require_once("conexao.php");
    $conn = getConexao();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../login.php");
        exit;
    }
    $usuario = $_SESSION['usuario'];
    $admin = $_SESSION['admin'];


    // Preparar e executar a consulta SQL
    $sql = "SELECT * FROM user WHERE usuario LIKE :usuario";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $nome = $_POST["pesquisa"];
    $livros = "admin/livro";
    $autores = "admin/autor";
    if ($stmt->rowCount() == 1) {
        if ($admin == 1){
            if($nome == $livros){
                header("Location: ../cadastrar-livro.php");
                exit;
            }else if($nome == $autores){
                header("Location: ../cadastrar-autor.php");
                exit;
            }
            
        }
        else{
            $query = "SELECT * FROM livros WHERE nome like '%$nome%'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            if($result){
                foreach ($result as $value){
                    $_SESSION['nomeLivro'][] = $value['nome'];     
                    $_SESSION['lancamentoLivro'][] = $value['lancamento'];                         
                    $_SESSION['descricaoLivro'][] = $value['descricao'];                         
                }
                header("Location: ../descricao-produto.php");
                exit;
            }else{
                echo "Livro não encontrado";
            }

        }
    }
    else{
       echo $_SESSION['admin'];
    }


?>
