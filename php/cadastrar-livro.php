<?php
    /* Cadastro de livro */
    require_once('conexao.php'); // Inclui o arquivo de conexão com o banco de dados
    $conn = getConexao(); // Obtém a conexão PDO com o banco de dados

    // Recebe os dados do formulário de cadastro do livro
    $nome = $_POST["nome"];           // Nome do livro
    $autor = $_POST["autor"];         // Autor do livro
    $lancamento = $_POST["lancamento"]; // Data de lançamento do livro
    $isbn = $_POST["isbn"];           // ISBN do livro
    $descricao = $_POST["descricao"]; // Descrição do livro
    $preco = $_POST["preco"];         // Preço do livro

    // Verifica se o livro já está cadastrado
    $query = "SELECT * FROM livros WHERE nome = :nome"; 
    $stmt = $conn->prepare($query); // Prepara a consulta SQL
    $stmt->bindParam(':nome', $nome); // Vincula o parâmetro :nome ao valor da variável $nome
    $stmt->execute(); // Executa a consulta SQL

    // Se o livro não estiver cadastrado
    if($stmt->rowCount() < 1){
        // Verifica se o autor existe
        $mysql = 'SELECT * FROM autores WHERE nome = :autor';
        $stmt = $conn -> prepare($mysql); // Prepara a consulta SQL
        $stmt->bindParam(':autor', $autor); // Vincula o parâmetro :autor ao valor da variável $autor

        // Se o autor for encontrado
        if ($stmt->execute()){
            $id_autores = $stmt->fetch(); // Obtém o ID do autor correspondente

            // Insere o livro na tabela livros
            $sql = 'INSERT INTO livros(nome, id_autores, lancamento, isbn, descricao, preco) 
                    VALUES (:nome, :id_autores, :lancamento, :isbn, :descricao, :preco)';
            $stmt = $conn -> prepare($sql); // Prepara a consulta SQL de inserção
            $stmt->bindParam(':nome', $nome); // Vincula o parâmetro :nome
            $stmt->bindParam(':id_autores', $id_autores['id_autores']); // Vincula o parâmetro :id_autores
            $stmt->bindParam(':lancamento', $lancamento); // Vincula o parâmetro :lancamento
            $stmt->bindParam(':isbn', $isbn); // Vincula o parâmetro :isbn
            $stmt->bindParam(':descricao', $descricao); // Vincula o parâmetro :descricao
            $stmt->bindParam(':preco', $preco); // Vincula o parâmetro :preco

            // Se a inserção for bem-sucedida
            if ($stmt->execute()){
                // Redireciona para a página de cadastro de livro e exibe uma mensagem de sucesso
                echo "<script type='text/javascript'>
                    window.location='../cadastrar-livro.php'; // Redireciona para a página de cadastro de livro
                    alert('Livro cadastrado'); // Exibe um alerta de sucesso
                </script>";
                
            } else {
                // Se ocorrer um erro na inserção
                echo "Erro ao cadastrar!"; // Exibe uma mensagem de erro
            }
        } else {
            // Se ocorrer um erro ao encontrar o autor
            echo "Erro ao cadastrar!"; // Exibe uma mensagem de erro
        }
    }
    else{
        // Se o livro já estiver cadastrado
        echo "<script type='text/javascript'>
        window.location='../cadastrar-livro.php'; // Redireciona para a página de cadastro de livro
        alert('Livro já cadastrado'); // Exibe um alerta informando que o livro já está cadastrado
        </script>";
    }
?>
