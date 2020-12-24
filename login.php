<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "LaBottega - Login";
$templateParams["pagina"] = "login_template.php";
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 

require 'template/base.php';
?>