<?php
    require_once("conexao.php");
    $conn = getConexao();

    $pesquisa = $_POST["pesquisa"];
    $livros = "admin/livro";
    $autores = "admin/autores";
    if($pesquisa == $livros){
        header("Location: ../cadastrar-livro.html");
        exit;
    }else if($pesquisa == $autores){
        header("Location: ../cadastrar-autor.html");
        exit;
    }
    else{

    }
?>