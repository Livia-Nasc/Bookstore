<?php
    session_start();
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
            $titulo = $_SESSION['Titulo'];
            $lancamento = $_SESSION['Lancamento'];
            $descricao = $_SESSION['Descricao'];
            $autor = $_SESSION['Autor'];
            for ($i = 0; $i < count($titulo); $i++) {
        ?>
        <section class="produto">
            <section class="disponibilidade">
                <p>Disponível no estoque</p>
            </section>
            <section class="informes">
                <section class="capa-livro">
                    <img src="img/autores/<?php echo $titulo[$i]; ?>" alt="">
                </section>
                <section class="sonopse">
                    <h1>
                        <?php echo $titulo[$i]; ?>
                    </h1>
                    <p class="autores"><?php echo $autor[$i]; ?> <spam><?php echo $lancamento[$i];?></spam></p>
                    <hr>
                    <p><?php echo $descricao[$i];?></p>
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