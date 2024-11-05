<?php
require_once('conexao.php');

$conn = getConexao();
//INSERIR DADOS
/*
function inserirDados($nome,$qtd,$conn){
    $sql = "INSERT INTO produtos(prod_nome,prod_qtd) VALUES ('$nome',$qtd)";

    if ($conn->exec(statement: $sql)){
        echo "<h1>Deu rock! XD</h1>";
    } else {
        echo "<h1>vixe, temos um problema >.</h1>";
    }
}

inserirDados("Peixe",2,$conn);
inserirDados("Camarão",20,$conn);
inserirDados("Goiaba",50,$conn);
*/


//inserir da forma correta

/*
$produto = $_POST['produto'];
$qtd = $_POST['qtd'];

$sql = 'INSERT INTO produtos(prod_nome,prod_qtd) VALUES(:prod_nome,:qtd)';
$stmt = $conn -> prepare($sql);
$stmt->bindParam(':prod_nome',$produto);
$stmt->bindParam(':qtd', $qtd);
if ($stmt->execute()){                                                                               
    echo "Deu Rock! >V< !";
} else {
    echo "Erro ao salvar!";
}
*/


// DELETAR DADOS


// $produto = $_POST['produto'];

// $sql = 'DELETE FROM produtos WHERE prod_nome = :prod_nome';
// $stmt = $conn -> prepare($sql);
// $stmt->bindParam(':prod_nome',$produto);

// if ($stmt->execute()){                                                                               
//     echo "Excluido com sucesso UwU";
// } else {
//     echo "Erro ao excluir";
// }
    


// function atualizarDados($conn, $prod_id, $prod_nome, $prod_qtd){
//     $sql = 'UPDATE produtos SET prod_nome = :prod_nome, prod_qtd = :prod_qtd WHERE prod_id = :prod_id;';
//     $stmt = $conn -> prepare($sql);

//     $stmt->bindParam(':prod_nome',$prod_nome);
//     $stmt->bindParam(':prod_qtd',$prod_qtd);
//     $stmt->bindParam(':prod_id',$prod_id);
//     if ($stmt->execute()){                                                                               
//         echo "Alterado com sucesso! -V-";
//     } else {
//         echo "Erro ao alterar!";
//     }
// }

// atualizarDados($conn,4,"abacaxi",23)


// function selecionarDados($conn){
//     $sql = 'SELECT * FROM produtos ORDER BY prod_nome;';
//     $smt = $conn -> prepare($sql);
//     $smt->execute();
//     $result = $smt->fetchAll();
//     foreach ($result as $value){
//         echo "produto: " . $value['prod_nome'] . "<br>";
//     }
// }

// selecionarDados($conn);

/* Crie uma função, onde se passa o nome do produto se ele existir exiba os dados, se não existir informe que o produto não foi encontrado */

function selecionarDados($conn, $prod_nome) {
    $sql = 'SELECT * FROM produtos';
    $smt = $conn->prepare($sql);
    $smt->execute();
    $result = $smt->fetchAll();
    $produtoEncontrado = false;
    if($result){
        foreach ($result as $value){
            echo "Produto: " . $value['prod_nome'] . "<br>";     
        }
    }else{
        echo "Produto não existe";
    }
    
}
selecionarDados($conn, "abacai");

?>