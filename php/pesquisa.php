<?php

function pesquisar(){
    
}
    session_start();
    
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
            $query = "SELECT l.nome AS titulo,l.id_livros,l.lancamento,l.descricao,a.nome AS autor FROM livros as l
            JOIN autores as a
            ON l.id_autores = a.id_autores 
            WHERE l.nome like '%$nome%'
            ORDER BY l.nome";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            if($result){
                unset ($_SESSION['Titulo']);
                unset ($_SESSION['Lancamento']);
                unset ($_SESSION['Descricao']);
                unset ($_SESSION['Autor']);
                unset ($_SESSION['id_livro']);
                foreach ($result as $value){
                    $_SESSION['Titulo'][] = $value['titulo'];     
                    $_SESSION['id_livro'][] = $value['id_livros'];     
                    $_SESSION['Lancamento'][] = $value['lancamento'];                         
                    $_SESSION['Descricao'][] = $value['descricao'];                         
                    $_SESSION['Autor'][] = $value['autor'];                  
                }
                header("Location: ../home.php");
                exit;
            }else{
                header("Location: ../home.php");
                exit;
            }
        }
    }
    else{
       echo $_SESSION['admin'];
    }


?>
