<?php

function getCartProducts(){
    if(isset($_SESSION["carrello"])){
        return $_SESSION["carrello"]; 
    }else{
        return []; 
    }
}

function isProductInCart($productId){
    return array_key_exists($productId, $_SESSION["carrello"]); 
}

function insertProductsInCart($prodotto){
    $carrello = $_SESSION["carrello"]; 
    if(!isProductInCart($prodotto["id"])){
        $prodottoInCarrello = [
            "quantitàDaComprare" => 1,
            "idProdotto" => $_POST["itemToAdd"], 
            "nome" => $prodotto["nome"],
            "immagine" => $prodotto["immagine"],
            "marca" => $prodotto["marca"],
            "prezzoFin" => $prodotto["prezzoFin"], 
            "id" => $prodotto["id"]
        ];  
        $carrello[$prodotto["id"]] = $prodottoInCarrello;
        $_SESSION["carrello"] = $carrello; 
    } else{
        $carrello[$prodotto["id"]]["quantitàDaComprare"] += 1; 
        $_SESSION["carrello"] = $carrello;
    }
}

function deleteProductFromCart($idProdotto){
    $carrello = $_SESSION["carrello"]; 
    unset($carrello[$idProdotto]);
    $_SESSION["carrello"] = $carrello; 
}


function updateCartProductsQuantity($productId, $currentVal){
    $carrello = $_SESSION["carrello"]; 
    $carrello[$productId]["quantitàDaComprare"] = $currentVal; 
    $_SESSION["carrello"] = $carrello; 
}
?>