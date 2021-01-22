<?php
require_once 'bootstrap.php';
if (isUserLoggedIn()) {
    $templateParams["js"] = JS_ROOT . "wishlist.js";
    $templateParams["titolo"] = "LaBottega - Lista dei desideri";
    $templateParams["pagina"] = "lista_desideri_template.php";
    $templateParams["categorie"] = $dbh->getCategories();
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();
    $templateParams["prodotti_in_lista_desideri"] = $dbh->getAllUserDesiredProduct($_SESSION["id"]); 
   
    require 'template/base.php';
} else {
    header("location: login.php");
}

?>