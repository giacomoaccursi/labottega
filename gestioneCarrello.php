<?php
require_once 'bootstrap.php';

$templateParams["js"] = JS_ROOT."carrello.js";

if (isset($_POST["currentVal"])) {
    $productId = $_POST["productId"];
    $currentVal = $_POST["currentVal"];
    $dbh->updateCartProductsQuantity($productId, $currentVal);
}

if (isset($_POST["itemToDelete"])) {
    $productId = $_POST["itemToDelete"];
    $dbh->deleteItemFromCart($productId);
}
