<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "LaBottega - Home";
$templateParams["pagina"] = "carrello.php";
$templateParams["prodotti"] = $dbh->getBestProducts(8); 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 

require 'template/base.php';
?>