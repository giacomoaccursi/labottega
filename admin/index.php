<?php
require_once 'bootstrap.php';

if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {
    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["prodotti"] = $dbh -> getAllProducts();
    $templateParams["section"] = 'products_list.php';
    if (isset($_GET["page"])){
        $templateParams["page"] = $_GET["page"];
    } else{
        $templateParams["page"] = 1;
    }
    $numeroProdottiPerPagina = 20; 
    $templateParams["prodotti"] = array_chunk($templateParams["prodotti"], $numeroProdottiPerPagina); 
    $templateParams["numPagine"] = count($templateParams["prodotti"]); 

    require 'template/base.php';
} else {
    header("location: ".ROOT."login.php");
}

?>
