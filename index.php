<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "LaBottega - Home";
$templateParams["pagina"] = "home.php";
$templateParams["prodotti"] = $dbh->getBestProducts(4); 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 

require 'template/base.php';
?>