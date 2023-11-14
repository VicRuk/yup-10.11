<?php
include("../models/conexao.php");
include("blades/header3.php");
?>

<div class="container px-3 pt-2" id="painel">
    <h1 class="mb-4">Adicionar Produto</h1>
    <div class="container-fluid shadow bg-white p-3 d-flex flex-column justify-content-center align-items-center" style="border-radius: 20px">
        <img src="../files/imgs/cookieT.png" class="img-fluid col-5 py-4">
        <form name="upload" enctype="multipart/form-data" action="../controllers/adicionarCookie.php" method="post" class="forms w-100 px-3">
            <input class="form-control shadow-sm mb-3" type="text" name="nome" required placeholder="Nome">
            <textarea class="form-control shadow-sm mb-3" rows="2" type="text" name="desc" required placeholder="Descrição"></textarea>
            <input class="form-control shadow-sm mb-3" type="text" name="preco" required placeholder="Preço">
            <select name="imagem" class="form-select mb-3" aria-label="Selecione o sabor">
                <option selected>Imagem</option>
                <option value="cookieT">Tradicional</option>
                <option value="cookieRV">Red Velvet</option>
                <option value="cookieCB">Chocolate Amargo</option>
            </select>
            <input class="btn btn-success fw-bold" type="submit" value="Criar Blog">
        </form>
    </div>
</div>