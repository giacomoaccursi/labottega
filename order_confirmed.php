<?php
require_once 'bootstrap.php';
 
$templateParams["titolo"] = "LaBottega - Ordine Confermato";
$templateParams["pagina"] = "order_confirmed_template.php"; 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories();



require 'template/base.php';
?>