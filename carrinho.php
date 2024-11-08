<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="stylesheet" href="css/pesquisa.css">
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
                <a href="home.php"><img src="img/arrow-left.svg" alt="carrinho de compras" id="carrinho" onclick="carrinho()"></a>
            </section>
        </section>
    </header>
    <main>
        
        <section class="alinha-carrinho">
            <table>
                <tbody class="coluna">
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox">
                        </td>
                        <td class="img">
                            <img src="img/todas-as-cartas.png" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro">Todas as cartas:Edição ampliada</p>
                                <p class="autores">por Clarice Lispector,Teresa Monteiro, e outros</p>
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
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="finalizar">
                    <!-- ? Separação para o usuario confimra a compra, esse botão não fara nada, só direcionara o usuário pra uma tela que diz: "Obrigado por assistir nossa apresetanção e por visitar nosso site" -->
                    <tr>
                        <td class="todos">
                            <input type="checkbox">
                            <p>Selecionar todos (<span id="contidade"></span>)</p>
                        </td>
                    </tr>
                        <tr>
                            <td class="position">
                                <!-- ? Essa section serve para que o dois elementos a boixo se permação um em cima do outro sem sobre com o estilo da sectio "finalizar" -->
                                <p>Total: R$: <span class="valor">113,35</span></p>
                                <button>Finalizar compra</button>
                            </td>
                        </tr>
                </tfoot>
            </table>
        </section>
    </main>
</body>
</html>