<?php
require_once 'bootstrap.php';

$templateParams["js"] = JS_ROOT."carrello.js";
$templateParams["titolo"] = "LaBottega - Prodotto";
$templateParams["pagina"] = "prodotto_template.php";
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories();

if (isset($_GET["id"])){
    $prodotto = $dbh->getProductById((int)$_GET["id"]);  
}

require 'template/base.php';
?>