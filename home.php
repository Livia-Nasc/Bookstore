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
                <h3 class="logo-texto"><a href="home.php">Bookstore Online</a></h3>
            </section>  
        </section>
        <section class="block">
            <section class="pesquisa">
                <!-- ? Campo de pesquisa para o usuário entrar os livros que desejar -->
                <form action="php/pesquisa.php" method="post">
                    <input type="text" class="pes" placeholder="Pesquise na BookStore Online" name = "pesquisa" >
                </form>
                <a href="#">
                    <img src="img/lupa.png" alt="Lupa" class="lupa">
                </a>
            </section>
            <section class="carrinho">
                <!-- ? Carrinho que levara o usuário ao seu carrinho, onde irá mostrar os produtos que ele adicionou -->
                <a href="carrinho.php"><img src="img/carrinho.png" alt="carrinho de compras" id="carrinho" onclick="carrinho()"></a>
            </section>
        </section>
    </header>
    <main>
        <section class="Fileira" id="id">
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
        </section>
        <section class="Fileira">
            <?php
                $titulo = $_SESSION['Titulo'];
                $lancamento = $_SESSION['Lancamento'];
                $descricao = $_SESSION['Descricao'];
                $autor = $_SESSION['Autor'];
                $id_livro =  $_SESSION['id_livro'];
                for ($i = 0; $i < count($titulo); $i++) {
            ?>
            <section class="livros">
                <section class="sentralizar">
                    <section class="img-livro">
                        <a href="descricao-produto.php?id=<?php echo $id_livro[$i]; ?>">
                            <img src="img/autores/<?php echo $id_livro[$i]; ?>.jpg" alt="Todas as Cartas">
                        </a>
                    </section>
                </section>
                <section class="descricao">
                    <p class="titulo-livro"><?php echo $titulo[$i];?></p>
                    <p class="autores"><?php echo $autor[$i];?></p>
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
            <?php
                }
            ?>
        </section>
        
    </main>
    <footer>
        <section id="desenvolvedor">
            <ul>
                <tr>
                    <th class="funcao">Desenvolvedores</th>
                    <li>HTML5, CSS4, JS: <a href="https://github.com/Ivaneudo" target="_blank">Ivaneudo</a></li>
                    <li>PHP: <a href="">Livia</a></li>
                    <li>MSQL: <a href="">Italo</a></li>
                </tr>
            </ul>
        </section>
        <section id="designer">
            <ul>
                <tr>
                    <th class="funcao"><p>Designer</p></th>
                    <li> UX/UI: <a href="https://github.com/Ivaneudo" target="_blank">Ivaneudo</a></li>
                    <li>UX/UI: <a href="#" target="_blank">Geovana</a></li>
                </tr>
            </ul>
        </section>
        <section id="documentação">
            <ul>
                <tr>
                    <th class="funcao"><p>Documentação</p></th>
                    <li class="nome"><a href="#" target="_blank">Kelly Lyeger</a></li>
                </tr>
            </ul>
        </section>
    </footer>
    <form action="php/sair.php" method="post">
        <button>SAIR</button>
    </form>
</body>
</html>