<?php
require_once 'bootstrap.php';
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["prodotti"] = $dbh->getAllProducts();  
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 

$templateParams["titolo"] = "LaBottega - Prodotti";
$templateParams["pagina"] = "prodotti_template.php";

require 'template/base.php';
?>