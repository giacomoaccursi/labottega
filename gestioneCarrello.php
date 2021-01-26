<?php
require_once 'bootstrap.php';

if (isset($_POST["currentVal"])) {
    $productId = $_POST["productId"];
    $currentVal = $_POST["currentVal"];
    if (isUserLoggedIn()) {
        $update = $dbh->updateCartProductsQuantity($productId, $currentVal);
        print($update); 
    } else {
        $prodotto = $dbh->getProductById($productId); 
        $update = updateCartProductsQuantity($productId, $currentVal, $prodotto["quantità"]);
        print($update); 
    }
    
}

if (isset($_POST["itemToDelete"])) {
    $productId = $_POST["itemToDelete"];
    if (isUserLoggedIn()) {
        $productId = $_POST["itemToDelete"];
        $dbh->deleteItemFromCart($productId);
    } else {
        deleteProductFromCart($productId);
    }
}

if (isset($_POST["itemToAdd"])) {
    //se l'utente è loggato
    $productId = $_POST["itemToAdd"];
    if (isUserLoggedIn()) {
        $productId = $_POST["itemToAdd"];
        $insert = $dbh->insertProductInCart($_SESSION["id"],  $productId);
        print($insert); 
    } else {
        $prodottoDB = $dbh->getProductById($productId);
        $insert = insertProductsInCart($prodottoDB, $prodottoDB["quantità"]);
        print($insert); 
    }
}


if(isset($_POST["cartQuantity"])){
    if (isUserLoggedIn()) {
        $quantità = $dbh->getItemsQuantityInCart($_SESSION["id"]);
        print($quantità[0]["quantità"]);  
    } else {
        print (getItemsQuantityInCart()); 
    }
}
?>