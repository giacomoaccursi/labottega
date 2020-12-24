<?php
require_once 'bootstrap.php';


$templateParams["titolo"] = "LaBottega - Carrello";
$templateParams["pagina"] = "carrello_template.php"; 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories();


require 'template/base.php';
?>