<?php
require_once 'bootstrap.php';

$templateParams["js"] = JS_ROOT . "wishlist.js";

if (isset($_POST["itemToDelete"])) {
    $productId = $_POST["itemToDelete"];
    $dbh->removeDesiredProduct($productId); 
}

if (isset($_POST["itemToAdd"])) {
    $productId = $_POST["itemToAdd"];
    $dbh->addNewDesiredProduct($productId, $_SESSION["id"]); 
    
}