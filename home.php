<?php
    // Inclui o arquivo home.php
    require('php/home.php');

    // Verifica se as variáveis de sessão 'usuario' e 'senha' estão definidas
    // Se não estiverem, redireciona para a página de login (entrar.php)
    if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
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
                <!-- Imagem do livro transparente, logo marca da loja -->
                <img src="img/logo.png" alt="logo-livro">
            </section>
            <section>
                <h3 class="logo-texto"><a href="home.php">Bookstore Online</a></h3>
            </section>
        </section>
        <section class="block">
            <section class="pesquisa">
                <!-- Campo de pesquisa para o usuário digitar os livros que deseja -->
                <form action="php/pesquisa.php" method="post">
                    <input type="text" class="pes" placeholder="Pesquise na BookStore Online" name="pesquisa">
                </form>
                <a href="#">
                    <img src="img/lupa.png" alt="Lupa" class="lupa">
                </a>
            </section>
            <section class="carrinho">
                <!-- Carrinho que leva o usuário ao seu carrinho de compras -->
                <a href="carrinho.php"><img src="img/carrinho.png" alt="carrinho de compras" id="carrinho" onclick="carrinho()"></a>
            </section>
        </section>
    </header>

    <main>
        <section class="Fileira">
            <?php
            // Verifica se as variáveis de sessão relacionadas aos livros existem
            if (isset($_SESSION['Titulo1']) && isset($_SESSION['Lancamento1']) && isset($_SESSION['Descricao1']) && isset($_SESSION['Autor1']) && isset($_SESSION['Id_livros1'])) {
                $titulo = $_SESSION['Titulo1'];
                $autor = $_SESSION['Autor1'];
                $id_livro = $_SESSION['Id_livros1']; 
                $preco = $_SESSION['Preco1'];

                // Loop através de todos os livros disponíveis, exibindo os 12 primeiros
                for ($i = 0; $i < 12; $i++) {
            ?>
                    <section class="livros">
                        <section class="sentralizar">
                            <section class="img-livro">
                                <a href="descricao-produto.php?id=<?php echo $id_livro[$i]; ?>">
                                    <img src="img/autores/<?php echo $id_livro[$i]; ?>.jpg" alt="Livro">
                                </a>
                            </section>
                        </section>
                        <section class="descricao">
                            <p class="titulo-livro"><?php echo isset($titulo[$i]) ? $titulo[$i] : 'Título não disponível'; ?></p>
                            <p class="autores"><?php echo isset($autor[$i]) ? $autor[$i] : 'Autor não disponível'; ?></p>
                        </section>
                        <section class="valores">
                            <section class="desconto">
                                <p class="moeda">R$: </p>
                                <p class="vcdesconto"><?php echo number_format($preco[$i], 2, ',', '.');?></p>
                                
                            </section>
                        </section>
                        <section class="parcelamento">
                            <p>em até 2x de R$56,68 sem juros</p>
                        </section>
                    </section>
            <?php
                }
            } else {
                // Caso não existam dados sobre os livros, exibe uma mensagem de erro
                echo "<p>Dados não encontrados.</p>";
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
                    <li>PHP: <a href=": https://github.com/Livia-Nasc " target="_blank">Livia</a></li>
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
                    <li class="nome"><a href="https://github.com/kellylyeger" target="_blank">Kelly Lyeger</a></li>
                </tr>
            </ul>
        </section>
    </footer>
    <form action="php/sair.php" method="post">
        <button>SAIR</button>
    </form>
</body>
</html>
