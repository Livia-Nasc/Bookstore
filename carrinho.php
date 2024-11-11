<?php
    include 'php/carrinho.php';
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
            <section class="logo-img">
                <!-- Imagem do livro transparente, logo marca da loja -->
                <img src="img/logo.png" alt="logo-livro">
            </section>
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
            <?php if (empty($livrosCarrinho)){ ?>
                <!-- Mensagem de carrinho vazio -->
                <p class="mensagem-vazio">Carrinho vazio</p>
           <?php }else{ ?>
            <!-- ? Tabela onde ficará todos os produtos que o usuário adicionar ao seu carrinho. -->
            <table>
                <?php foreach ($livrosCarrinho as $livro){ ?>
                <tbody class="coluna">
                    <!-- ? Linha onde ficara armazenado o primerio produto que for adicionado ao carrinho -->
                    <tr class="produto">
                        <!-- ? Botão onde o usuario podera selecionar o produto para finalizar a compra. -->
                        <td class="selecionar">
                            <input type="checkbox" name="precos[]" value="<?php echo $livro['preco'] ?>" onclick="atualizarTotal()">
                        </td>
                        <!-- ? Imagem do produto que o usuário adicou ao carrinho. -->
                        <td class="img">
                        <img src="img/autores/<?php echo $livro['id_livros']; ?>.jpg" alt="<?php echo $livro['titulo']; ?>">
                        </td>
                        <td class="informe">
                            <!-- ? Descrição simples do produto -->
                            <section class="descricao">
                                <p class="titulo-livro"><?php echo $livro['titulo']; ?></p> 
                                <p class="autores"><?php echo $livro['autor']; ?></p>
                            </section>
                            <!-- ? Valores do produto -->
                            <section class="valores">
                                <section class="desconto">
                                    <p class="moeda">R$: </p>
                                    <p class="vcdesconto"><?php echo number_format($livro['preco'], 2, ',', '.'); ?></p>
                                </section>
                            </section>
                            <!-- ? Quantidades que o usuário pode parcelar sem juros -->
                            <section class="parcelamento">
                                <p>em até 2x de R$<?php echo number_format($livro['preco'] / 2, 2, ',', '.'); ?> sem juros</p>
                            </section>
                        </td>
                        <td>
                            <!-- ? Lixeira que ao ser clicada irá excluir o item. -->
                            <section class="lixeira">
                            <form action="php/excluirCarrinho.php" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este item do carrinho?');">
                                <input type="hidden" name="id_livros" value="<?php echo $livro['id_livros']; ?>">
                                <button type="submit">
                                    <img src="img/lixeira.png" alt="lixeira">
                                </button>
                            </form>
                            </section>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
                <tfoot class="finalizar">
                    <!-- ? Separação para o usuario confimra a compra, esse botão não fara nada, só direcionara o usuário pra uma tela que diz: "Obrigado por assistir nossa apresetanção e por visitar nosso site" -->
                    <tr>
                        <td class="todos">
                            <input type="checkbox" onclick="selecionarTodos(this)">
                            <p>Selecionar todos (<span id="contidade"></span>)</p>
                        </td>
                    </tr>
                        <tr>
                            <td class="position">
                                <!-- ? Essa section serve para que o dois elementos a boixo se permação um em cima do outro sem sobre com o estilo da sectio "finalizar" -->
                                <p>Total: R$ <span id="total">0,00</span></p>
                                <input type="hidden" name="total_calculado" id="total_calculado" value="0">
                                <button type="submit">Finalizar Compra</button>
                            </td>
                        </tr>
                </tfoot>
            </table>
            <?php } ?>
        </section>
    </main>
</body>
</html>
