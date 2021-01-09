<?php
require_once 'bootstrap.php';
 
$templateParams["titolo"] = "LaBottega - Ordine Confermato";
$templateParams["pagina"] = "order_confirmed_template.php"; 
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories();

//se è loggato gli faccio vedere i prodotti aggiunti al db, altrimenti quelli salvati localmente nella sessione
//ancora non abbiamo gestito la sessione quindi scrivo solo quella per un utente

$templateParams["prodottiInCarrello"] = $dbh->getCartProducts(2); 


require 'template/base.php';
?>