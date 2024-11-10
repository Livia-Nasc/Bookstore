<?php
    // Aqui, recuperamos os detalhes do produto (ajustar conforme sua estrutura)
    $produtoId = $titulo[$i]; // Exemplo: usaremos o título como ID
    $produtoPreco = 113.35; // Exemplo: preço fixo para o produto
    $produtoImagem = "todas-as-cartas.png"; // Exemplo de imagem
    $produtoAutor = $autor[$i]; // Autor do livro
    $produtoDescricao = $descricao[$i]; // Descrição do livro
?>

<button onclick="adicionarCarrinho('<?php echo $produtoId; ?>', '<?php echo $produtoPreco; ?>', '<?php echo $produtoImagem; ?>', '<?php echo $produtoAutor; ?>', '<?php echo $produtoDescricao; ?>')">Adicionar ao Carrinho</button>

<script>
    function adicionarCarrinho(id, preco, imagem, autor, descricao) {
        const formData = new FormData();
        formData.append('id', id);
        formData.append('preco', preco);
        formData.append('imagem', imagem);
        formData.append('autor', autor);
        formData.append('descricao', descricao);

        fetch('php/adicionarCarrinho.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert('Produto adicionado ao carrinho!');
            // Aqui podemos redirecionar ou atualizar a página do carrinho
            window.location.href = 'carrinho.php';
        });
    }
</script>
