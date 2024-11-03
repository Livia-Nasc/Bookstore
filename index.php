<?php 
    session_start();
    if((isset ($_SESSION['usuario']) == true) and (isset ($_SESSION['senha']) == true))
    {
    header('location:home.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Online</title>
    <link rel="stylesheet" href="css/style.css">
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
        <section>
            <nav>
                <!-- ? Links para a navegação entre as paginas de login -->
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="cadastrar.php">Cadastrar-se</a></li>
                    <li><a href="entrar.php">Entrar</a></li>
                </ul>

                <ul class="menu-mobile">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="cadastrar.html">Cadastrar-se</a></li>
                    <li><a href="entrar.html">Entrar</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <main>
        <section class="apresentacao">
            <!-- ? nome da site/loja-->
            <h1>Bookstore Online</h1>
        </section>
        <section class="apresentacao2">
            <p>Conheça um pouco sobre <br> &#8595 a nossa livraria. &#8595</p>
        </section>
        <section class="infor">
            <!-- ? Blocos de apresentação sobre o site e por qual proposito ele foi desenvolvido -->
            <section class="infor2">
                <p class="texto">Somos uma livraria jovem e inovadora, dedicada a oferecer uma grande variedade de livros a preços acessíveis, especialmente para o público jovem. Nosso compromisso é promover o hábito da leitura, disponibilizando títulos que educam, entretêm e inspiram. Acreditamos que o conhecimento e a diversão através da leitura devem estar ao alcance de todos, e nossa missão é criar as novas gerações de leitores</p>
            </section >
            <section class="infor3">
                <p class="texto">
                    Oferecemos uma seleção diversificada de livros para todas as idades e estilos. Nosso catálogo inclui romances, ficção científica, biografias e obras acadêmicas, cuidadosamente selecionados para garantir que cada leitor encontre algo de seu interesse. Buscamos fornecer uma experiência completa, com opções que vão dos clássicos da literatura aos lançamentos mais recentes, sempre valorizando a leitura.</p>
            </section>
        </section>
    </main>
</body>
</html>