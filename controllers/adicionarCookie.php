<?php
echo "<html lang='pt-br'>";
include("../models/conexao.php");
$varCod = mysqli_real_escape_string($conexao, $_POST["cod"]);
$varNome = mysqli_real_escape_string($conexao, $_POST["nome"]);
$varDesc = mysqli_real_escape_string($conexao, $_POST["desc"]);
$varPreco = mysqli_real_escape_string($conexao, $_POST["preco"]);
$varImg = mysqli_real_escape_string($conexao, $_POST["imagem"]);

if(mysqli_query($conexao, "INSERT INTO cookie (nome, descricao, preco, imagem) VALUES ('$varNome', '$varDesc', '$varPreco', '$varImg')")){
	die("<script> alert('Produto cadastrado com sucesso!'); window.location='../views/admin.php'; </script>");
}
else{
	die("<script> alert('Falha ao cadastrar o produto.'); window.location='../views/admin.php'; </script>");
}
mysqli_close($conexao);
header("location:../views/admin.php");
?>