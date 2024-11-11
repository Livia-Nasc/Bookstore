<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cadastrar.css">
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
            <a href="home.html"><img src="img/arrow-left.svg" alt="carrinho de compras" id="carrinho" onclick="carrinho()"></a>
        </section>
    </header>
    <main>
        <section class="formulario">
            <section class="titulo">
                <h1>Cadastrar Livro</h1>
            </section>
            <form action="php/cadastrar-livro.php" method="post">
                <!-- ? Formulario para o administrador poder cadastrar novos livros, para conseguir cadastrar outros autores isso devera ser feito diretamente no SQL -->
                <label for="" class="primeiro">Nome do livro:</label>
                <input type="text" placeholder="Digite o nome do livro" name="nome" required>
                <label for="">Nome do Autor:</label>
                <input type="text" placeholder="Digite o nome do autor" name="autor" required>
                
                <label for="">Ano de lançamento</label>
                <input type="text" placeholder=YYYY name="lancamento" required>
                
                <label for="">isbn:</label>
                <input type="password" placeholder="Digite o isbn" name="isbn" required>
                <label for="">Descrição</label>
                <input type="password" placeholder="Digite a sinopse" name="descricao" required>
                <label for="">Preco:</label>
                <input type="number" placeholder="Digite o valor do livro" name="preco" required>
                
                <section class="button">
                    <!-- ? Botão que levara as informações sobre o novo livro para o banco de dados -->
                    <button onclick="enviar()">Cadastra livro</button>
                </section>
            </form>
        </section>
    </main>
    
</body>
</html>