<?php

function getCartProducts()
{
    if (isset($_SESSION["carrello"])) {
        return $_SESSION["carrello"];
    } else {
        return [];
    }
}

function isProductInCart($productId)
{
    if (isset($_SESSION["carrello"])) {
        return array_key_exists($productId, $_SESSION["carrello"]);
    } else {
        $_SESSION["carrello"] = [];
        return false;
    }
}

function insertProductsInCart($prodotto, $disponibilità)
{
    $carrello = $_SESSION["carrello"];
    if (!isProductInCart($prodotto["id"])) {
        $prodottoInCarrello = [
            "quantitàDaComprare" => 1,
            "idProdotto" => $_POST["itemToAdd"],
            "nome" => $prodotto["nome"],
            "immagine" => $prodotto["immagine"],
            "marca" => $prodotto["marca"],
            "prezzoFin" => $prodotto["prezzoFin"],
            "id" => $prodotto["id"],
            "prezzo" => $prodotto["prezzo"],
            "sconto" => $prodotto["sconto"]
        ];
        $carrello[$prodotto["id"]] = $prodottoInCarrello;
        $_SESSION["carrello"] = $carrello;
        return true; 
    } else {
        if($disponibilità >  $carrello[$prodotto["id"]]["quantitàDaComprare"]){
            $carrello[$prodotto["id"]]["quantitàDaComprare"] += 1;
            $_SESSION["carrello"] = $carrello;
            return true; 
        }else{
            return false; 
        }
    }
}

function deleteProductFromCart($idProdotto)
{
    $carrello = $_SESSION["carrello"];
    unset($carrello[$idProdotto]);
    $_SESSION["carrello"] = $carrello;
}


function updateCartProductsQuantity($productId, $currentVal, $disponibilità)
{
    if ($disponibilità >= $currentVal) {
        $carrello = $_SESSION["carrello"];
        $carrello[$productId]["quantitàDaComprare"] = $currentVal;
        $_SESSION["carrello"] = $carrello;
        return true;
    }
    return false;
}

function getItemsQuantityInCart(){
    $carrello = $_SESSION["carrello"]; 
    $totale = 0; 
    foreach($carrello as $prodotto){
        $totale += $prodotto["quantitàDaComprare"]; 
    }
    return $totale; 
}
