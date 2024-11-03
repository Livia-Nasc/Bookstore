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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/pesquisa.css">
    <script src="js/principal.js"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <header class="topo">
        <section class="logo-e-titulo">
            <section class="logo-img">
                <!-- ? Imagem do livro transparente, logo marcar da loja -->
                <img src="img/logo.png" alt="logo-livro">
            </section>
            <section>
                <h3 class="logo-texto">Bookstore Online</h3>
            </section>  
        </section>
        <section class="block">
            <section class="pesquisa">
                <!-- ? Campo de pesquisa para o usuário entrar os livros que desejar -->
                <form action="php/pesquisa.php" method="post">
                    <input type="text" class="pes" placeholder="Pesquise na BookStore Online" required name = "pesquisa">
                    <a href="#">
                        <img src="img/lupa.png" alt="Lupa" class="lupa">
                    </a>
                </form>
            </section>
            <section class="carrinho">
                <!-- ? Carrinho que levara o usuário ao seu carrinho, onde irá mostrar os produtos que ele adicionou -->
                <a href="carrinho.php"><img src="img/carrinho.png" alt="carrinho de compras" id="carrinho" ></a>
            </section>
        </section>
    </header>
    <main>
        <section class="primeiraFileira">
            <!-- ? Linha de livros com rolagem lateral.-->
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <!-- ? Imagem do livro -->
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <!-- ? Descrição e informações adicionais sobre o livro -->
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <!-- ? Valores com descontos ou não -->
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <!-- ? Melhor forma de parcelamento -->
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            
        </section>
        <section class="primeiraFileira">
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <img src="img/todas-as-cartas.png" alt="Todas as Cartas">
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro">Todas as cartas: Edição ampliada</p>
                    <p class="autores">por Clarice Lispector, Teresa Monteiro, e outros</p>
                    <p class="Tcapa">
                        Capa dura
                    </p>
                </section>
                <section class="valores">
                    <section class="desconto">
                        <p class="moeda">R$: </p>
                        <p class="vcdesconto">113,35</p>
                        <p class="por">De:</p>
                        <p class="vreal">149,90</p>
                    </section>
                </section>
                <section class="parcelamento">
                    <p>em até 12x de R$56,68 sem juros</p>
                </section>
            </section>
        </section>
    </main>
    <form action="php/sair.php" method="post">
        <button>Sair</button>
    </form>
</body>
</html>