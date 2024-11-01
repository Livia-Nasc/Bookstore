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
            <section class="pesquisa">
                <input type="text" class="pes" placeholder="Pesquise na BookStore Online">
                <a href="#">
                    <img src="img/lupa.png" alt="Lupa" class="lupa">
                </a>
            </section>
            <section class="carrinho">
                <img src="img/carrinho.png" alt="carrinho de compras" id="carrinho" onclick="carrinho()">
            </section>
        </section>
    </header>
    <main>
        <section class="produto">
            <section class="disponibilidade">
                <p>Disponível no estoque</p>
            </section>
            <section class="informes">
                <section class="capa-livro">
                    <img src="img/todas-as-cartas.png" alt="">
                </section>
                <section class="sonopse">
                    <h1>Todas as Cartas: Edição ampliada</h1>
                    <p class="autores">Clarisse Lispector (2020)</p>
                    <hr>
                    <p>Reúne correspondências escritas por Clarice Lispector ao longo de sua vida, entre os anos 1940 e 1970. A obra é considerada fundamental para compreender a trajetória literária da escritora, e conta com cerca de metade de cartas inéditas.</p>
                </section>
            </section>
            <section class="button">
                <p>Valor: R$ 113,95</p>
                <button onclick="Entrar()" returne="false">Adicionar ao carrinho</button>
            </section>
        </section>
    </main>
</body>
</html>