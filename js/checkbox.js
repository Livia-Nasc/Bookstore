// Função para atualizar o total baseado nas opções selecionadas
function atualizarTotal() {
    // Seleciona todos os checkboxes marcados (cujo nome seja "precos[]")
    const checkboxes = document.querySelectorAll('input[name="precos[]"]:checked');
    
    let total = 0; // Inicializa a variável total com 0

    // Para cada checkbox selecionado, adiciona seu valor (convertido para float) ao total
    checkboxes.forEach((checkbox) => {
        total += parseFloat(checkbox.value); // Converte o valor para número de ponto flutuante e soma ao total
    });

    // Exibe o total calculado na página, formatado com duas casas decimais
    document.getElementById('total').textContent = total.toFixed(2).replace('.', ','); 

    // Atualiza o campo oculto com o valor total calculado (usado no envio do formulário)
    document.getElementById('total_calculado').value = total.toFixed(2); 
}

// Função para selecionar ou desmarcar todos os checkboxes com base no estado de um checkbox mestre
function selecionarTodos(checkbox) {
    // Seleciona todos os checkboxes com o nome "precos[]"
    const checkboxes = document.querySelectorAll('input[name="precos[]"]');
    
    // Para cada checkbox, define seu estado como igual ao estado do checkbox mestre
    checkboxes.forEach((cb) => cb.checked = checkbox.checked);
    
    // Chama a função para atualizar o total após a seleção
    atualizarTotal();
}
