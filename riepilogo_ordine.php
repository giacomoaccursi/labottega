<?php

require_once 'bootstrap.php';
if (isset($_POST["payed"])) {
    $templateParams["titolo"] = "LaBottega - Ordine Confermato";
    $templateParams["pagina"] = "riepilogo_ordine_template.php";
    $templateParams["header"] = "small_header.php"; 
    $templateParams["categorie"] = $dbh->getCategories();
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();

    $idSpedizione = $dbh->addNewSpedizione($_POST["nome"], $_POST["cognome"], $_POST["indirizzo"], $_POST["città"], $_POST["nazione"]);
    $prodotti = $dbh->getCartProducts($_SESSION["id"]);
    $speseDiSpedizione = 10;
    $totaleOrdine = 0;
    foreach ($prodotti as $prodotto) {
        $totaleOrdine += $prodotto["prezzoFin"]*$prodotto["quantitàDaComprare"];
        $dbh->removeOrderedItemsFromDisponibility($prodotto["id"], $prodotto["quantitàDaComprare"]);
    }

    $totaleOrdine += $speseDiSpedizione;
    $idOrdine = $dbh->addNewOrder($totaleOrdine, $_SESSION["id"], $idSpedizione, $_POST["metodoPagamento"], "In lavorazione");
    foreach ($prodotti as $prodotto) {
        $dbh->addNewOrderDetail($prodotto["id"], $idOrdine, $prodotto["prezzoFin"], $prodotto["quantitàDaComprare"]);
    }
    $dbh->deleteCartProducts($_SESSION["id"]);
    sendEMail($dbh->getEmailById($_SESSION["id"]),"Conferma Ordine","Il tuo ordine è stato confermato! ");
    require 'template/base.php';

} else {
    header("location: index.php");
}
?>