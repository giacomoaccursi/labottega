<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "LaBottega - Home";
$templateParams["pagina"] = "home.php";
$templateParams["prodotti"] = dbh->getBestProducts(8); 
$templateParams["categorie"] = dbh->getCategories(); 

require 'template/base.php';
?>