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
        //$idUtente = $_SESSION["id"]; 
        $prodotti = $dbh->getCartProducts(2);
        $totaleOrdine = 10; 
        //elimino i prodotti dalla disponibilità
        foreach($prodotti as $prodotto){
            $totaleOrdine += $prodotto["prezzoFin"]; 
            $dbh->removeOrderedItemsFromDisponibility($prodotto["id"], $prodotto["quantitàDaComprare"]);
        }
 

        $idOrdine = $dbh->addNewOrder($totaleOrdine, 2,$idSpedizione, $_POST["metodoPagamento"],"Inlavorazione"); 
        foreach($prodotti as $prodotto){ 
            $dbh->addNewOrderDetail($prodotto["idProdotto"], $idOrdine, $totaleOrdine, $prodotto["quantitàDaComprare"]); 
        }
        $dbh->deleteCartProducts(2); 
        header("location: order_confirmed.php");


    }
}




require 'template/base.php';
?>