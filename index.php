<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "LaBottega - Home";
$templateParams["pagina"] = "home.php";
$templateParams["prodotti"] = $dbh->getBestProducts(8); 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 
$templateParams["js"] = JS_ROOT."carrello.js";

require 'template/base.php';
?>