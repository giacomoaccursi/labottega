<?php
require_once 'bootstrap.php';

if (isUserLoggedIn()) {

    $templateParams["titolo"] = "LaBottega - Dashboard";
    $templateParams["categorie"] = $dbh->getCategories();
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();
    $templateParams["pagina"] = "order_details_template.php";
    $templateParams["titoloCategoria"] = "DETTAGLI ORDINE";
    if(isset($_GET["id"])){
    $templateParams["dettagli"] = $dbh -> getOrderDetails($_GET["id"]);
    }
} else {
    header("location: login.php");
}

require 'template/base.php';

?>