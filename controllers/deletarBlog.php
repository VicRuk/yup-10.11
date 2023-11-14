<?php
include("../models/conexao.php");
$idb = $_GET["idb"];

mysqli_query($conexao, "DELETE FROM cookie WHERE cod = $idb");
header("location:../views/admin.php");
?>