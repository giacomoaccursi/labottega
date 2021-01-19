<?php
require_once 'bootstrap.php';

$templateParams["js"] = JS_ROOT."prodotto.js";
$templateParams["titolo"] = "LaBottega - Prodotto";
$templateParams["pagina"] = "prodotto_template.php";
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories();
$templateParams["prodottiConsigliati"] = []; 
if(isUserLoggedIn()){

    $templateParams["wishlist"] = $dbh->getAllUserDesiredProductId($_SESSION["id"]); 
    if(count($templateParams["wishlist"]) > 0){
        foreach($templateParams["wishlist"] as $prodotto){
            $prodottiWishlist[] = $prodotto["idProdotto"]; 
        }
        $templateParams["wishlist"] = $prodottiWishlist; 
    }
}

if (isset($_GET["id"])){
    $prodotto = $dbh->getProductById((int)$_GET["id"]);
    $consigli = $dbh->getBestProductInOrdersByCategory($prodotto["id"], $prodotto["idCategoria"]);
    $consigliati = []; 
    foreach($consigli as $prodottoConsigliato){
        $consigliati[] = $dbh->getProductById($prodottoConsigliato["idProdotto"]);

    }
    $templateParams["prodottiConsigliati"] = $consigliati; 

}

require 'template/base.php';
