<?php
require_once 'bootstrap.php';

if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {
    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["prodotti"] = $dbh -> getAllProducts();
    $templateParams["section"] = 'products_list.php';
    require 'template/base.php';
} else {
    header("location: ".ROOT."login.php");
}

?>
