<?php
require_once 'bootstrap.php';
if(isUserLoggedIn()){
    if (isset($_POST["checkout"])) {
    
        $templateParams["js"] = JS_ROOT . "checkout.js";
        $templateParams["titolo"] = "LaBottega - Checkout";
        $templateParams["pagina"] = "checkout_template.php";
        $templateParams["header"] = "small_header.php"; 
        $templateParams["categorie"] = $dbh->getCategories();
        $templateParams["sottoCategorie"] = $dbh->getSubCategories();
        $templateParams["pagamenti"] = $dbh->getAllPaymentsType();
        require 'template/base.php';
    } else {
        header("location: index.php");
    }

} else {
    header("location: index.php");
}