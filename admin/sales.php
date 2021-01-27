<?php
require_once 'bootstrap.php';

if (isset($_POST["stato"]) && isset($_GET["mod"])) {
    $dbh->changeOrderState($_GET["mod"], $_POST["stato"]);
    sendEMail($dbh->getCustomerEmailByOrder($_GET["mod"]),"Informazioni Ordine", "Il tuo ordine N. ".$_GET["mod"]." è in stato: ".$_POST["stato"]);
    $dbh-> insertNotification($dbh->getCustomerIdByOrder($_GET["mod"]), "Il tuo ordine N. ".$_GET["mod"]." è in stato: ".$_POST["stato"]);
    header("location: sales.php");
}

if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {
    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["vendite"] = $dbh->getAllOrders();
    $templateParams["section"] = 'sales_list.php';
    require 'template/base.php';
} else {
    header("location: " . ROOT . "login.php");
}

?>