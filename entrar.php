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
    <link rel="stylesheet" href="css/entrar.css">
    <script src="js/funcoes.js"></script>
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
            </nav>
        </section>
    </header>
    <main>
        <section class="formulario">
            <section class="titulo">
                <h1>Entrar</h1>
            </section>
            <form action="php/login.php" method="post">
                <!-- ? Formulario para o usuário já cadastrado poder voltar para o site -->
                <label for="" class="primeiro">Usuário</label>
                <input type="text" placeholder="Digite seu usuário" name="usuario" class="user" required name = "usuario">
                <label for="">Senha:</label>
                <input type="password" placeholder="Digite sua senha" class="place" required name = "senha">
                
                
                <p class="redefinir"><a href="">Esqueceu sua senha?</a></p>
                <section class="button">
                    <!-- ? Botão que levara a pagina principal -->
                    <button onclick="Entrar()" returne="false">entrar</button>
                </section>
            </form>
        </section>
    </main>
    
</body>
</html>