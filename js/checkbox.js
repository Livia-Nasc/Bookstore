function atualizarTotal() {
    const checkboxes = document.querySelectorAll('input[name="precos[]"]:checked');
    let total = 0;

    checkboxes.forEach((checkbox) => {
        total += parseFloat(checkbox.value);
    });

    // Exibe o total formatado na página
    document.getElementById('total').textContent = total.toFixed(2).replace('.', ',');

    // Atualiza o campo oculto para enviar o valor ao PHP
    document.getElementById('total_calculado').value = total.toFixed(2);
}

function selecionarTodos(checkbox) {
    const checkboxes = document.querySelectorAll('input[name="precos[]"]');
    checkboxes.forEach((cb) => cb.checked = checkbox.checked);
    atualizarTotal();
}