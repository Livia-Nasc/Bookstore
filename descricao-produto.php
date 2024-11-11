<?php
    // Inicia a sessão
    session_start();

    // Verifica se as variáveis de sessão 'usuario' e 'senha' estão definidas
    // Se não estiverem, redireciona para a página de login
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        header('location:entrar.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Online</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/pesquisa.css">
    <link rel="stylesheet" href="css/produto.css">

    <script src="js/principal.js"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <header class="topo">
        <section class="logo-e-titulo">
            <section>
            <h3 class="logo-texto"><a href="home.php">Bookstore Online</a></h3>
            </section>  
        </section>
        <section class="block">
            <section class="pesquisa">
                <form action="php/pesquisa.php" method="post">
                    <input type="text" class="pes" placeholder="Pesquise na BookStore Online">
                </form>
                <a href="#">
                    <img src="img/lupa.png" alt="Lupa" class="lupa">
                </a>
            </section>
            <section class="carrinho">
                <a href="carrinho.php"><img src="img/carrinho.png" alt="carrinho de compras" id="carrinho" onclick="carrinho()"></a>
            </section>
        </section>
    </header>
    <main>
        <?php
            // Recupera os dados das variáveis de sessão
            $titulo = $_SESSION['Titulo']; // Títulos dos livros
            $lancamento = $_SESSION['Lancamento']; // Datas de lançamento dos livros
            $descricao = $_SESSION['Descricao']; // Descrição dos livros
            $autor = $_SESSION['Autor']; // Autores dos livros
            $id_livros = $_SESSION['Id_livros']; // IDs dos livros
            $preco = $_SESSION['Preco']; // Preços dos livros

            // Laço de repetição para exibir cada livro
            for ($i = 0; $i < count($titulo); $i++) {
        ?>
        <section class="produto">
            <section class="disponibilidade">
                <p>Disponível no estoque</p>
            </section>
            <section class="informes">
                <section class="capa-livro">
                <!-- Exibe a imagem do livro com base no id do livro -->
                <img src="img/autores/<?php echo $id_livros[$i]; ?>.jpg" alt="<?php echo $titulo[$i] ?>">
                </section>
                <section class="sonopse">
                    <h1>
                        <!-- Exibe o título do livro -->
                        <?php echo $titulo[$i]; ?>
                    </h1>
                    <p class="autores">
                        <!-- Exibe o autor do livro -->
                        <?php echo $autor[$i]; ?> 
                        <!-- Exibe a data de lançamento do livro -->
                        <spam><?php echo $lancamento[$i];?></spam>
                    </p>
                    <hr>
                    <!-- Exibe a descrição do livro -->
                    <p><?php echo $descricao[$i];?></p>
                </section>
            </section>
            <section class="button">
                <!-- Exibe o preço do livro formatado em moeda -->
                <p>Valor: R$ <?php echo number_format($preco[$i], 2, ',', '.'); ?></p>
                <form action="php/adicionarCarrinho.php" method="post">
                    <!-- Envia os dados do livro para adicionar ao carrinho -->
                    <input type="hidden" name="id_livros" value="<?php echo $id_livros[$i]; ?>">
                    <input type="hidden" name="preco" value="<?php echo $preco[$i]; ?>">
                    <input type="hidden" name="autor" value="<?php echo $autor[$i]; ?>">
                    <input type="hidden" name="descricao" value="<?php echo $descricao[$i]; ?>">
                    <input type="hidden" name="titulo" value="<?php echo $titulo[$i]; ?>">
                    <input type="hidden" name="lancamento" value="<?php echo $lancamento[$i]; ?>">
                    <!-- Botão para adicionar o livro ao carrinho -->
                    <button type="submit">Adicionar ao carrinho</button>
                </form>
            </section>
        </section>
        <?php
            }
        ?>
    </main>
</body>
</html>
