<?php
require_once 'bootstrap.php';
var_dump($_POST);
var_dump($_FILES["myfile"]["name"]);
if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {
    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["prodotti"] = $dbh -> getAllProducts();
    $templateParams["section"] = 'insert_product.php';
    $templateParams["sottocategorie"] = $dbh -> getSubCategories();
    require 'template/base.php';
} else {
    header("location: ".ROOT."login.php");
}

?>