<?php
    session_start();
    require_once("conexao.php");
    $conn = getConexao();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../login.php");
        exit;
    }
    $usuario = $_SESSION['usuario'];
    $admin = $_SESSION['admin'];


    // Prepara e executa a consulta SQL
    $sql = "SELECT * FROM user WHERE usuario = :usuario";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':admin', $admin);
    $stmt->execute();
    $pesquisa = $_POST["pesquisa"];
    $livros = "admin/livro";
    $autores = "admin/autor";
    if ($stmt->rowCount() == 1) {
        if ($admin == 1){
            if($pesquisa == $livros){
                header("Location: ../cadastrar-livro.php");
                exit;
            }else if($pesquisa == $autores){
                header("Location: ../cadastrar-autor.php");
                exit;
            }
        }
    }
    else{
       echo $_SESSION['admin'];
    }


?>
