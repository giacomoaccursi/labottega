<?php
require_once 'bootstrap.php';


$templateParams["js"] = JS_ROOT."checkout.js"; 
$templateParams["titolo"] = "LaBottega - Checkout";
$templateParams["pagina"] = "checkout_template.php"; 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories();
$templateParams["pagamenti"] = $dbh->getAllPaymentsType(); 


if(isset($_GET["payed"])){
    if($_GET["payed"] == 1){
        $idSpedizione = $dbh->addNewSpedizione($_POST["nome"], $_POST["cognome"], $_POST["indirizzo"], $_POST["città"], $_POST["nazione"]); 
        $prodotti = $dbh->getCartProducts($_SESSION["id"]);
        $speseDiSpedizione = 10; 
        $totaleOrdine = 0; 
        foreach($prodotti as $prodotto){
            $totaleOrdine += $prodotto["prezzoFin"]; 
            $dbh->removeOrderedItemsFromDisponibility($prodotto["id"], $prodotto["quantitàDaComprare"]);
        }
 
        $totaleOrdine += $speseDiSpedizione; 
        $idOrdine = $dbh->addNewOrder($totaleOrdine, $_SESSION["id"],$idSpedizione, $_POST["metodoPagamento"],"Inlavorazione"); 
        foreach($prodotti as $prodotto){ 
            $dbh->addNewOrderDetail($prodotto["idProdotto"], $idOrdine, $totaleOrdine, $prodotto["quantitàDaComprare"]); 
        }
        $dbh->deleteCartProducts(2); 
        header("location: order_confirmed.php");


    }
}




require 'template/base.php';
?>