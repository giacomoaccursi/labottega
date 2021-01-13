<?php
require_once 'bootstrap.php';

if(isset($_POST["newsletter"])){
    $dbh -> addNewEmail($_POST["newsletter"]);
}
$templateParams["titolo"] = "LaBottega - Home";
$templateParams["pagina"] = "home.php";
$templateParams["prodotti"] = $dbh->getBestProducts(8); 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 
$templateParams["js"] = JS_ROOT."prodotti.js";

require 'template/base.php';
?>