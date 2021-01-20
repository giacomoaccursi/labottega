<?php
require_once 'bootstrap.php';

if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {

    if( isset($_POST["nome"]) && isset($_POST["marca"]) && isset($_POST["descrizione"]) && isset($_POST["prezzo"]) && isset($_FILES["immagine"]) &&  isset($_POST["quantita"]) && isset($_POST["sottocategoria"])  ){
        $dbh -> insertNewProduct($_POST["nome"],$_POST["marca"],$_POST["descrizione"],$_POST["prezzo"],$_FILES["immagine"]["name"],$_POST["quantita"],$_POST["sottocategoria"]);
        $clienti = $dbh->getAllCustomers();
            foreach ($clienti as $cliente) {
                sendEMail($dbh->getEmailById($cliente["id"]),'Nuovo Prodotto!','Abbiamo aggiunto un nuovo prodotto: '.$_POST["nome"].'. Scoprilo ora!');
            }
    }

    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["prodotti"] = $dbh -> getAllProducts();
    $templateParams["section"] = 'insert_product.php';
    $templateParams["sottocategorie"] = $dbh -> getSubCategories();

    require 'template/base.php';
} else {
    header("location: ".ROOT."login.php");
}

?>