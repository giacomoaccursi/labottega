<?php
require_once 'bootstrap.php';

if (isUserLoggedIn()) {
    $templateParams["titolo"] = "LaBottega - Dashboard";
    $templateParams["categorie"] = $dbh->getCategories();
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();
    $templateParams["pagina"] = "user_dashboard.php";
    $templateParams["ordini"] = $dbh->getOrdersByUser($_SESSION["id"]);
    $templateParams["notifiche"] = $dbh -> getNotificationsByUser($_SESSION["id"]);
} else {
    header("location: login.php");
}

require 'template/base.php';
