<?php
session_start();
include 'conexao.php'; // Inclua a conexão com o banco de dados
$conn = getConexao();

// Verifica se o ID do livro foi passado e se o usuário está autenticado
if (isset($_POST['id_livros']) && isset($_SESSION['usuario'])) {
    $id_livros = $_POST['id_livros'];
    $id_usuario = $_SESSION['usuario'];

    // Consulta no banco para verificar se o item existe e pertence ao usuário
    $sql = "SELECT * FROM carrinho WHERE id_livros = :id_livros AND id_usuario = :id_usuario";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_livros', $id_livros);
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();

    // Verifica se o item foi encontrado no banco de dados
    if ($stmt->rowCount() == 1) {

        // Remove o item do banco de dados
        $sql = 'DELETE FROM carrinho WHERE id_livros = :id_livros AND id_usuario = :id_usuario';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_livros', $id_livros);
        $stmt->bindParam(':id_usuario', $id_usuario);

        // Executa a query e verifica se foi bem-sucedida
        if ($stmt->execute()) {
            // Sucesso na exclusão, redireciona para a página do carrinho
            header("Location: ../carrinho.php");
            exit;
        } else {
            // Exibe erro caso a exclusão no banco falhe
            echo "Erro ao excluir!<br>";
            print_r($stmt->errorInfo()); // Exibe erros detalhados
        }
    } else {
        // Caso o item não exista no banco de dados para o usuário
        echo "Item não encontrado para este usuário.<br>";
        echo "ID Livro: " . $id_livros . "<br>";
        echo "ID Usuário: " . $id_usuario . "<br>";
    }
} else {
    // Caso os parâmetros não estejam definidos
    echo "ID Livro ou ID Usuário não foram definidos.<br>";
    echo "ID Livro: " . $id_livros . "<br>";
    echo "ID Usuário: " . $id_usuario . "<br>";
}
?>
