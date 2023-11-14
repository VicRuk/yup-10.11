<?php
include("../models/conexao.php");
include("blades/header2.php");
?>

<div class="container-fluid mb-5 h-100" id="home">
    <a href="add.php"><div class="circle text-center d-flex align-items-center justify-content-center"><i class="bi bi-plus-lg text-white text-center"></i></div></a>
    <div class="container row justify-content-center">
            <form action="index.php" method="post" class="mb-4">
                <div class="input-box position-relative">
                    <i class="fa fa-search"></i>   
                    <input id="placeholder-text" class="form-control shadow" type="text" name="buscar" placeholder="Pesquise sabores">              
                </div>
            </form>
        <?php
        if (isset($_POST["buscar"])) {
            $varBuscar = $_POST["buscar"];
            $query = mysqli_query($conexao, "SELECT * FROM cookie WHERE nome LIKE '%$varBuscar%' ORDER BY cod");
        } else {
            $query = mysqli_query($conexao, "SELECT * FROM cookie ORDER BY cod DESC");
        }
    
        if (mysqli_num_rows($query) === 0) {
            echo "Nenhum resultado";
        } else {
        ?>
            <div class="container-fluid col-12 my-2" id="cookies">
                <h1>Produtos</h1>
                <?php
                while ($exibe = mysqli_fetch_array($query)) {
                ?>
                <div class="card-container bg-white border shadow d-flex flex-column justify-content-center mb-3" id="card">
                    <div class="row align-items-center justify-content-center m-1">
                        <div class="card-image col-4 d-flex flex-column justify-content-center align-items-center">
                            <img src="../files/imgs/<?php echo $exibe[4]?>.png" class="img-fluid" alt="Img"></a>
                        </div>
                        <div class="card-corpo col-6 d-flex bg-white flex-column">
                            <div class="card-title">
                                <h2><?php echo $exibe[1]?></h2>
                            </div>
                            <div class="card-sobre mb-1">
                                <p><?php echo substr($exibe[2],0,50)?></p>
                            </div>
                            <div class="card-sobre">
                                <?php
                                    $valor = $exibe[3];
                                    $ultimosDoisDigitos = substr($valor, -2);
                                    $valorFormatado = substr($valor, 0, -2) . ',' . $ultimosDoisDigitos;
                                ?>
                                <h2>R$<?php echo $valorFormatado; ?></h2>
                            </div>
                        </div>
                        <div class="card-image col-1 d-flex flex-column justify-content-center align-items-center">
                            <a class="mb-1 text-dark" href="editarBlog.php?idb=<?php echo $exibe[0]?>"><i class="bi bi-pencil"></i></a>
                            <a class="text-dark" href="../controllers/deletarBlog.php?idb=<?php echo $exibe[0]?>"><i class="bi bi-trash"></i>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
</div>