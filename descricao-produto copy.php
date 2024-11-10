<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Online</title>
    <link rel="stylesheet" href="css/style.css">
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
                <a href="carrinho.php"><img src="img/carrinho.png" alt="carrinho de compras" id="carrinho"></a>
            </section>
        </section>
    </header>
    <main>
        <?php
            session_start();
            $titulo = $_SESSION['Titulo'];
            $lancamento = $_SESSION['Lancamento'];
            $descricao = $_SESSION['Descricao'];
            $autor = $_SESSION['Autor'];
            $preco = 113.95; // Preço fixo para este exemplo
            for ($i = 0; $i < count($titulo); $i++) {
                $produtoId = $i; // Supondo que o índice seja o ID do produto
        ?>
        <section class="produto">
            <section class="disponibilidade">
                <p>Disponível no estoque</p>
            </section>
            <section class="informes">
                <section class="capa-livro">
                    <img src="img/autores/<?php echo $imagem; ?>" alt="">
                </section>
                <section class="sinopse">
                    <h1><?php echo $titulo[$i]; ?></h1>
                    <p class="autores"><?php echo $autor[$i]; ?> <span><?php echo $lancamento[$i]; ?></span></p>
                    <hr>
                    <p><?php echo $descricao[$i]; ?></p>
                </section>
            </section>
            <section class="button">
                <p>Valor: R$ <?php echo number_format($preco, 2, ',', '.'); ?></p>
                <form action="php/adicionarCarrinho.php" method="post">
                    
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
