<?php 
    // Inicia a sessão
    session_start();

    // Verifica se as variáveis de sessão 'usuario' e 'senha' estão definidas
    // Se estiverem, redireciona o usuário para a página home.php
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
    <link rel="stylesheet" href="css/cadastrar.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <script src="js/menu-animado.js"></script>
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
                <!-- ? Botão animado do menu mobile -->
                <button class="btn" onclick="BtnAnimado()">
                    <span class="linha"></span>
                    <span class="linha"></span>
                    <span class="linha"></span>
                </button>
                <!-- ? Menu igual que só será visivel caso o usuário clique no botão acima. -->
                <section class="menu-mobile" id="menu-mobile" onclick="BtnAnimado()">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="cadastrar.php">Cadastrar-se</a></li>
                        <li><a href="entrar.php">Entrar</a></li>
                    </ul>
                </section>
            </nav>
        </section>
    </header>
    <main>
        <section class="formulario">
            <section class="titulo">
                <h1>Cadastrar-se</h1>
            </section>
            <form action="php/cadastro.php" method="post">
                <!-- ? Formulário que usuários novos poderam se cadastrar e conheser nosso site -->
                <label for="" class="primeiro">Usuário</label>
                <input type="text" placeholder="Digite seu usuário" name="usuario" required>
                <label for="">E-mail:</label>
                <input type="email" placeholder="Digite seu e-mail" name="email" required>
                
                <label for="">Data de nascimento</label>
                <input type="date" placeholder="MM/DD/YYYY" name="data" required>
                
                <label for="">Senha:</label>
                <input type="password" placeholder="Digite sua senha" required name = "senha">
                <label for="">Confirme sua senha</label>
                <input type="password" placeholder="Confirme sua senha" required name = "senha_confirm">
                
                <section class="button">
                    <!-- ? Botão que levara as informações sobre o novo livro para o banco de dados -->
                    <button onclick="enviar()">Cadastra-se</button>
                </section>
            </form>
        </section>
    </main>
    
</body>
</html>