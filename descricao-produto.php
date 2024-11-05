<?php
    session_start();
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
                <h3 class="logo-texto">Bookstore Online</h3>
            </section>  
        </section>
        <section class="block">
            <form action="php/pesquisa.php" method="post">
                <section class="pesquisa">
                    <input type="text" class="pes" placeholder="Pesquise na BookStore Online" required name = "pesquisa">
                    <a href="#">
                        <img src="img/lupa.png" alt="Lupa" class="lupa">
                    </a>
                </section>
            </form> 
            <section class="carrinho">
                <img src="img/carrinho.png" alt="carrinho de compras" id="carrinho" onclick="carrinho()">
            </section>
        </section>
    </header>
    
    <main>
    <?php
    $nomeLivro = $_SESSION['nomeLivro'];
    $lancamentoLivro = $_SESSION['lancamentoLivro'];
    $descricaoLivro = $_SESSION['descricaoLivro'];
    for ($i = 0; $i < count($nomeLivro); $i++) {
        ?>
        <section class="produto">
            <section class="disponibilidade">
                <p>Disponível no estoque</p>
            </section>
            <section class="informes">
                <section class="capa-livro">
                    <img src="img/<?php echo $nomeLivro[$i]; ?>" alt="">
                </section>
                <section class="sonopse">
                    <h1>
                        <?php echo $nomeLivro[$i]; ?>
                    </h1>
                    <p class="autores">Clarisse Lispector <spam><?php echo $lancamentoLivro[$i];?></spam></p>
                    <hr>
                    <p><?php echo $descricaoLivro[$i];?></p>
                </section>
            </section>
            <section class="button">
                <p>Valor: R$ 113,95</p>
                <button onclick="Entrar()" returne="false">Adicionar ao carrinho</button>
            </section>
        </section>
    <?php
    }
        ?>
    </main>
    
</body>
</html>