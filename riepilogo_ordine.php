<?php

require_once 'bootstrap.php';
if (isset($_POST["payed"])) {

    $templateParams["titolo"] = "LaBottega - Ordine Confermato";
    $templateParams["pagina"] = "riepilogo_ordine_template.php";
    $templateParams["categorie"] = $dbh->getCategories();
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();

    $idSpedizione = $dbh->addNewSpedizione($_POST["nome"], $_POST["cognome"], $_POST["indirizzo"], $_POST["città"], $_POST["nazione"]);
    $prodotti = $dbh->getCartProducts($_SESSION["id"]);
    $speseDiSpedizione = 10;
    $totaleOrdine = 0;
    foreach ($prodotti as $prodotto) {
        $totaleOrdine += $prodotto["prezzoFin"];
        $dbh->removeOrderedItemsFromDisponibility($prodotto["id"], $prodotto["quantitàDaComprare"]);
    }

    $totaleOrdine += $speseDiSpedizione;
    $idOrdine = $dbh->addNewOrder($totaleOrdine, $_SESSION["id"], $idSpedizione, $_POST["metodoPagamento"], "Inlavorazione");
    foreach ($prodotti as $prodotto) {
        $dbh->addNewOrderDetail($prodotto["idProdotto"], $idOrdine, $prodtto["prezzoFin"], $prodotto["quantitàDaComprare"]);
    }
    $dbh->deleteCartProducts($_SESSION["id"]);
    require 'template/base.php';

} else {
    header("location: index.php");
}
