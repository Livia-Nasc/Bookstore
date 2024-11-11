<?php
    /* Cadastro de usuário */
    require_once('conexao.php'); // Inclui o arquivo de conexão com o banco de dados
    $conn = getConexao(); // Obtém a conexão PDO com o banco de dados

    // Recebe os dados do formulário de cadastro
    $nome = $_POST["nome"];               // Nome do autor
    $nascimento = $_POST["data"];         // Data de nascimento do autor
    $nacionalidade = $_POST["nacionalidade"]; // Nacionalidade do autor

    // Verifica se já existe um autor com o nome fornecido
    $query = "SELECT * FROM autores WHERE nome = :nome"; 
    $stmt = $conn->prepare($query); // Prepara a consulta SQL
    $stmt->bindParam(':nome', $nome); // Vincula o parâmetro :nome ao valor da variável $nome
    $stmt->execute(); // Executa a consulta SQL

    // Se não encontrar o autor (o nome não está na base de dados)
    if($stmt->rowCount() < 1){
        // Insere o autor na tabela autores
        $sql = 'INSERT INTO autores(nome, nascimento, nacionalidade) VALUES (:nome, :data, :nacionalidade)';
        $stmt = $conn -> prepare($sql); // Prepara a consulta SQL de inserção
        $stmt->bindParam(':nome', $nome); // Vincula o parâmetro :nome
        $stmt->bindParam(':data', $nascimento); // Vincula o parâmetro :data
        $stmt->bindParam(':nacionalidade', $nacionalidade); // Vincula o parâmetro :nacionalidade

        // Se a inserção for bem-sucedida
        if ($stmt->execute()){
            // Redireciona para a página de cadastro de autor e exibe uma mensagem de sucesso
            echo "<script type='text/javascript'>
                window.location='../cadastrar-autor.php'; // Redireciona para a página de cadastro
                alert('Autor cadastrado'); // Exibe um alerta de sucesso
            </script>";
            
        } else {
            // Se ocorrer um erro na inserção
            echo "Erro ao cadastrar!"; // Exibe uma mensagem de erro
        }
    }
    else{
        // Se o autor já estiver cadastrado
        echo "<script type='text/javascript'>
        window.location='../cadastrar-autor.php'; // Redireciona para a página de cadastro
        alert('Autor já cadastrado'); // Exibe um alerta informando que o autor já existe
        </script>";
    }
?>
