<?php
require_once 'bootstrap.php';

$templateParams["js"] = JS_ROOT."carrello.js"; 
$templateParams["titolo"] = "LaBottega - Carrello";
$templateParams["pagina"] = "carrello_template.php"; 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories();


if(isUserLoggedIn()){
    $templateParams["prodottiInCarrello"] = $dbh->getCartProducts($_SESSION["id"]); 
} else{
    $templateParams["prodottiInCarrello"] = getCartProducts(); 
}
require 'template/base.php';
?>