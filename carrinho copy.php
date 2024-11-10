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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="stylesheet" href="css/pesquisa.css">
    <script src="js/principal.js"></script>
    <script src="js/checkbox.js"></script>
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
                <?php
                if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
                    $total = 0;
                    foreach ($_SESSION['carrinho'] as $index => $produto) {
                        // Soma o total
                        $total += floatval($produto['preco']);
                ?>
                <tbody class="coluna">
                    <tr class="produto">
                        <td class="selecionar">
                            <input type="checkbox" name="precos[]" value="<?php echo $produto['preco']; ?>" onclick="atualizarTotal()">
                        </td>
                        <td class="img">
                            <img src="img/autores/<?php echo $produto['produtoId']; ?>.jpg" alt="">
                        </td>
                        <td class="informe">
                            <section class="descricao">
                                <p class="titulo-livro"><?php echo $produto['titulo']; ?></p>
                                <p class="autores"><?php echo $produto['autor']; ?></p>
                            </section>
                            <section class="valores">
                                <section class="desconto">
                                    <p class="moeda">R$: </p>
                                    <p class="vcdesconto"><?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                                    <p class="por">De:</p>
                                    <p class="vreal"><?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                                </section>
                            </section>
                            <section class="parcelamento">
                                <p>em até 2x de R$56,68 sem juros</p>
                            </section>
                        </td>
                        <td>
                            <section class="lixeira">
                                <img src="img/lixeira.png" alt="lixeira">
                            </section>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="4">Seu carrinho está vazio.</td></tr>';
                }
                ?>
                <tfoot class="finalizar">
                    <tr>
                        <td class="todos">
                            <input type="checkbox" onclick="selecionarTodos(this)">
                            <p>Selecionar todos (<span id="contidade"></span>)</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="position">
                            <p>Total: R$ <span id="total"><?php echo number_format($total, 2, ',', '.'); ?></span></p>
                            <input type="hidden" name="total_calculado" id="total_calculado" value="<?php echo $total; ?>">
                            <button type="submit">Finalizar Compra</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>
</body>
</html>
