<?php
require_once 'bootstrap.php';

if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {
    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["vendite"] = $dbh -> getAllOrders();
    $templateParams["section"] = 'sales_list.php';
    require 'template/base.php';
} else {
    header("location: ".ROOT."login.php");
}

?>