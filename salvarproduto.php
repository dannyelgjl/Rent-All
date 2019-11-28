
<?php
include 'header.php';
include 'conexao.php';

if (isset($_POST['nome']) && ($_POST['preco']) && ($_POST['estoque'])) {
    $nome = $_POST['nome'];
    $preço = $_POST['preco'];
    $quant = $_POST['estoque'];
    $conn->exec("INSERT INTO produto (nome, preco, estoque) VALUES ('$nome', '$preço', '$quant')");
    header('location:paineldecontrole.php');
}else{
    echo "<script>alert('Necessario preencher todos os campos!')</script>";
    header("Refresh: 0;url = paineldecontrole.php");
}
