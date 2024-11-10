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
$nome = isset($_POST["pesquisa"]) ? $_POST["pesquisa"] : '';

$sql = "SELECT * FROM user WHERE usuario = :usuario";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->execute();

$livros = "admin/livro";
$autores = "admin/autor";

if ($stmt->rowCount() == 1) {
    if ($admin == 1) {
        if ($nome == $livros) {
            header("Location: ../cadastrar-livro.php");
            exit;
        } elseif ($nome == $autores) {
            header("Location: ../cadastrar-autor.php");
            exit;
        }
        else {
            $query = "SELECT l.nome AS titulo, l.id_livros, l.lancamento, l.descricao, l.preco, a.nome AS autor
            FROM livros AS l
            JOIN autores AS a ON l.id_autores = a.id_autores
            WHERE l.nome LIKE :nome
            ORDER BY l.nome";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':nome', "%$nome%");
            $stmt->execute();
    
            $result = $stmt->fetchAll();
    
            if ($result) {
                $_SESSION['Titulo'] = [];
                $_SESSION['Lancamento'] = [];
                $_SESSION['Descricao'] = [];
                $_SESSION['Autor'] = [];
                $_SESSION['id_livros'] = [];
                $_SESSION['preco'] = [];
    
                foreach ($result as $value) {
                    $_SESSION['Titulo'][] = $value['titulo'];
                    $_SESSION['id_livros'][] = $value['id_livros'];
                    $_SESSION['Lancamento'][] = $value['lancamento'];
                    $_SESSION['Descricao'][] = $value['descricao'];
                    $_SESSION['Autor'][] = $value['autor'];
                    $_SESSION['preco'][] = $value['preco'];
                }
    
                header("Location: ../descricao-produto.php");
                exit;
            } else {
                header("Location: ../home.php");
                exit;
            }
        }
    } else {
        $query = "SELECT l.nome AS titulo, l.id_livros, l.lancamento, l.descricao, l.preco, a.nome AS autor
        FROM livros AS l
        JOIN autores AS a ON l.id_autores = a.id_autores
        WHERE l.nome LIKE :nome
        ORDER BY l.nome";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':nome', "%$nome%");
        $stmt->execute();

        $result = $stmt->fetchAll();

        if ($result) {
            $_SESSION['titulo'] = [];
            $_SESSION['lancamento'] = [];
            $_SESSION['descricao'] = [];
            $_SESSION['autor'] = [];
            $_SESSION['id_livros'] = [];
            $_SESSION['preco'] = [];

            foreach ($result as $value) {
                $_SESSION['titulo'][] = $value['titulo'];
                $_SESSION['lancamento'][] = $value['lancamento'];
                $_SESSION['descricao'][] = $value['descricao'];
                $_SESSION['autor'][] = $value['autor'];
                $_SESSION['id_livros'][] = $value['id_livros'];
                $_SESSION['preco'][] = $value['preco'];
            }

            header("Location: ../descricao-produto.php");
            exit;
        } else {
            header("Location: ../home.php");
            exit;
        }
    }
} else {
    echo "nada encontrado";
}
?>
