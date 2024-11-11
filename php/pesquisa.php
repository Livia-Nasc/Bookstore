<?php
// Inicia uma nova sessão
session_start();

// Inclui o arquivo de conexão com o banco de dados
require_once("conexao.php");

// Obtém a conexão com o banco de dados usando a função getConexao
$conn = getConexao();

// Verifica se o usuário não está logado
if (!isset($_SESSION['usuario'])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: ../login.php");
    exit;
}

// Limpa as variáveis de sessão relacionadas a um livro caso existam
if (isset($_SESSION['Titulo'])) {
    unset($_SESSION['Titulo']);
    unset($_SESSION['Lancamento']);
    unset($_SESSION['Descricao']);
    unset($_SESSION['Autor']);
    unset($_SESSION['Id_livros']);
    unset($_SESSION['Preco']);
}

// Obtém o nome de usuário e o nível de administrador da sessão
$usuario = $_SESSION['usuario'];
$admin = $_SESSION['admin'];

// Obtém o valor da pesquisa realizada pelo usuário, caso exista
$nome = isset($_POST["pesquisa"]) ? $_POST["pesquisa"] : '';

// Prepara e executa a consulta para buscar o usuário no banco de dados
$sql = "SELECT * FROM user WHERE usuario = :usuario";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->execute();

// Define os caminhos para as páginas de cadastro de livros e autores
$livros = "admin/livro";
$autores = "admin/autor";

// Verifica se o usuário foi encontrado no banco de dados
if ($stmt->rowCount() == 1) {
    // Verifica se o usuário é um administrador
    if ($admin == 1) {
        // Se o nome pesquisado for "admin/livro", redireciona para a página de cadastro de livro
        if ($nome == $livros) {
            header("Location: ../cadastrar-livro.php");
            exit;
        }
        // Se o nome pesquisado for "admin/autor", redireciona para a página de cadastro de autor
        elseif ($nome == $autores) {
            header("Location: ../cadastrar-autor.php");
            exit;
        } else {
            // Realiza uma consulta para buscar livros no banco de dados com base no nome pesquisado
            $query = "SELECT l.nome AS titulo, l.id_livros, l.lancamento, l.descricao, l.preco, a.nome AS autor
                    FROM livros AS l
                    JOIN autores AS a ON l.id_autores = a.id_autores
                    WHERE l.nome LIKE :nome
                    ORDER BY l.nome";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':nome', "%$nome%");
            $stmt->execute();

            // Obtém os resultados da consulta
            $result = $stmt->fetchAll();

            // Se houver resultados, armazena as informações dos livros nas variáveis de sessão
            if ($result) {
                $_SESSION['Titulo'] = [];
                $_SESSION['Lancamento'] = [];
                $_SESSION['Descricao'] = [];
                $_SESSION['Autor'] = [];
                $_SESSION['Id_livros'] = [];
                $_SESSION['Preco'] = [];

                // Preenche as variáveis de sessão com os dados dos livros encontrados
                foreach ($result as $value) {
                    $_SESSION['Titulo'][] = $value['titulo'];
                    $_SESSION['Lancamento'][] = $value['lancamento'];
                    $_SESSION['Descricao'][] = $value['descricao'];
                    $_SESSION['Autor'][] = $value['autor'];
                    $_SESSION['Id_livros'][] = $value['id_livros'];
                    $_SESSION['Preco'][] = $value['preco'];
                }

                // Redireciona para a página de descrição do produto
                header("Location: ../descricao-produto.php");
                exit;
            } else {
                // Se nenhum livro for encontrado, exibe uma mensagem e redireciona para a home
                echo "<p>Livro não encontrado. Tente novamente.</p>";
                header("Location: ../home.php");
                exit;
            }
        }
    } else {
        // Se o usuário não for administrador, realiza a mesma consulta para livros
        $query = "SELECT l.nome AS titulo, l.id_livros, l.lancamento, l.descricao, l.preco, a.nome AS autor
                FROM livros AS l
                JOIN autores AS a ON l.id_autores = a.id_autores
                WHERE l.nome LIKE :nome
                ORDER BY l.nome";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':nome', "%$nome%");
        $stmt->execute();

        // Obtém os resultados da consulta
        $result = $stmt->fetchAll();

        // Se houver resultados, armazena as informações dos livros nas variáveis de sessão
        if ($result) {
            $_SESSION['Titulo'] = [];
            $_SESSION['Lancamento'] = [];
            $_SESSION['Descricao'] = [];
            $_SESSION['Autor'] = [];
            $_SESSION['Id_livros'] = [];
            $_SESSION['Preco'] = [];

            // Preenche as variáveis de sessão com os dados dos livros encontrados
            foreach ($result as $value) {
                $_SESSION['Titulo'][] = $value['titulo'];
                $_SESSION['Lancamento'][] = $value['lancamento'];
                $_SESSION['Descricao'][] = $value['descricao'];
                $_SESSION['Autor'][] = $value['autor'];
                $_SESSION['Id_livros'][] = $value['id_livros'];
                $_SESSION['Preco'][] = $value['preco'];
            }

            // Redireciona para a página de descrição do produto
            header("Location: ../descricao-produto.php");
            exit;
        } else {
            // Se nenhum livro for encontrado, exibe uma mensagem e redireciona para a home
            echo "<p>Livro não encontrado. Tente novamente.</p>";
            header("Location: ../home.php");
            exit;
        }
    }
} else {
    // Se o usuário não for encontrado, exibe uma mensagem de erro
    echo "Dados não encontrados";
}
?>
