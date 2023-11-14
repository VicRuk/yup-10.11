<?php
include("../models/conexao.php");
include("blades/header3.php");
$idb = $_GET["idb"];
$query = mysqli_query($conexao, "SELECT * FROM cookie WHERE cod = $idb");
?>

<div class="container px-3 pt-2" id="painel">
    <h1 class="mb-4">Editar Produto</h1>
    <div class="container-fluid shadow bg-white p-3 d-flex flex-column justify-content-center align-items-center" style="border-radius: 20px">
        <?php
            while ($exibe = mysqli_fetch_array($query)) {
        ?>
        <img src="../files/imgs/<?php echo $exibe[4]?>.png" class="img-fluid col-5 py-4">
        <form name="atualizar" enctype="multipart/form-data" action="../controllers/atualizarCookie.php" method="post" class="forms w-100 px-3">
            <input type="hidden" name="cod" value="<?php echo $exibe[0]?>">
            <input class="form-control shadow-sm mb-3" type="text" name="nome" required value="<?php echo $exibe[1]?>">
            <textarea class="form-control shadow-sm mb-3" rows="2" type="text" name="desc" required placeholder="Descrição"><?php echo $exibe[2]?></textarea>
            <input class="form-control shadow-sm mb-3" type="text" name="preco" required placeholder="Preço" value="<?php echo $exibe[3]?>">
            <select name="imagem" class="form-select mb-3" aria-label="Selecione o sabor">
                <option value="cookieT" <?php echo ($exibe[4] === 'cookieT') ? 'selected' : ''; ?>>Tradicional</option>
                <option value="cookieRV" <?php echo ($exibe[4] === 'cookieRV') ? 'selected' : ''; ?>>Red Velvet</option>
                <option value="cookieCB" <?php echo ($exibe[4] === 'cookieCB') ? 'selected' : ''; ?>>Chocolate Amargo</option>
            </select>
            <input class="btn btn-success fw-bold" type="submit" value="Editar Produto">
        </form>
        <?php } ?>
    </div>
</div>