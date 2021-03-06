<?php
require_once 'bootstrap.php'; 

$templateParams["js"] = JS_ROOT."prodotto.js";
$templateParams["titoloCategoria"] = "Tutti i prodotti"; 

if(isUserLoggedIn()){

    $templateParams["wishlist"] = $dbh->getAllUserDesiredProductId($_SESSION["id"]); 
    if(count($templateParams["wishlist"]) > 0){
        foreach($templateParams["wishlist"] as $prodotto){
            $prodottiWishlist[] = $prodotto["idProdotto"]; 
        }
        $templateParams["wishlist"] = $prodottiWishlist; 
    }
}

if(isset($_GET["order"])){
    $templateParams["order"] = $_GET["order"]; 
    switch($templateParams["order"]){
        case 1: $templateParams["prodotti"] = $dbh->getProductsByDate(); break;   
        case 2: $templateParams["prodotti"] = $dbh->getProductsByPriceAsc(); break;  
        case 3: $templateParams["prodotti"] = $dbh->getProductsByPriceDesc(); break;  
        case 4: $templateParams["prodotti"] = $dbh->getProductsByPopularity(); break;  
    }

} 
else{
    $templateParams["order"] = 1; 
    $templateParams["prodotti"] = $dbh->getRandomProducts();  
}

if (isset($_GET["page"])){
    $templateParams["page"] = $_GET["page"];
} else{
    $templateParams["page"] = 1;
}

if(isset($_GET["cat"])){
    $templateParams["titoloCategoria"] = $dbh->getCategoryById((int)$_GET["cat"]);  

    $templateParams["categoriaCorrente"] = $_GET["cat"]; 

    foreach($templateParams["prodotti"] as $prodotto){
        foreach($dbh->getProductsByCategory((int)$_GET["cat"]) as $prodInCategria){
            if($prodotto["id"] == $prodInCategria["id"]){
                $prodotti[] = $prodotto; 
            }
        }
    }
    $templateParams["prodotti"] = $prodotti; 

    
} elseif(isset($_GET["sub"])){
    $templateParams["titoloCategoria"] = $dbh->getSubCategoryById((int)$_GET["sub"]);  
    $templateParams["sottoCategoriaCorrente"] = $_GET["sub"]; 
    foreach($templateParams["prodotti"] as $prodotto){
        foreach($dbh->getProductsBySubCategory($_GET["sub"]) as $prod_in_sub){
            if($prodotto["id"] == $prod_in_sub["id"]){
                $prodotti[] = $prodotto; 
            }
        }
    }
    $templateParams["prodotti"]=$prodotti;
}

if(isset($_GET["sales"])){

    $templateParams["titoloCategoria"] = "Offerte";  
    $templateParams["sales"] = 1; 
    foreach($templateParams["prodotti"] as $prodotto){
        foreach($dbh->getProductsInSale() as $prod_in_sale){
            if($prodotto["id"] == $prod_in_sale["id"]){
                $prodotti[] = $prodotto; 
            }
        }
    } 
    $templateParams["prodotti"]=$prodotti;
}

if(isset($_GET["cerca"])){
    $templateParams["titoloCategoria"] = "risultato di ricerca per ".$_GET["cerca"];   
    $templateParams["cerca"] = $_GET["cerca"]; 
    $prodotti=[];
    foreach($templateParams["prodotti"] as $prodotto){
        foreach($dbh->getProductsBySearch($_GET["cerca"]) as $prodTrovato){
            if($prodotto["id"] == $prodTrovato["id"]){
                $prodotti[] = $prodotto; 
            }
        }
    } 
    $templateParams["prodotti"]=$prodotti;
}


$numeroProdottiPerPagina = 12; 
$templateParams["prodotti"] = array_chunk($templateParams["prodotti"], $numeroProdottiPerPagina); 
$templateParams["numPagine"] = count($templateParams["prodotti"]); 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 
$templateParams["titolo"] = "LaBottega - Prodotti";
$templateParams["pagina"] = "prodotti_template.php";

require 'template/base.php';

?>