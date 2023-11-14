<?php
echo "<html lang='pt-br'>";
include("../models/conexao.php");
$varCod = mysqli_real_escape_string($conexao, $_POST["cod"]);
$varNome = mysqli_real_escape_string($conexao, $_POST["nome"]);
$varDesc = mysqli_real_escape_string($conexao, $_POST["desc"]);
$varPreco = mysqli_real_escape_string($conexao, $_POST["preco"]);
$varImg = mysqli_real_escape_string($conexao, $_POST["imagem"]);

if(mysqli_query($conexao, "UPDATE cookie SET nome = '$varNome', descricao = '$varDesc', preco = '$varPreco', imagem = '$varImg' WHERE cod = '$varCod'")){
	die("<script> alert('Produto atualizado com sucesso!'); window.location='../views/admin.php'; </script>");
}
else{
	die("<script> alert('Falha ao atualizar o produto.'); window.location='../views/admin.php'; </script>");
}
mysqli_close($conexao);
header("location:../views/admin.php");
?>