<?php
require_once 'bootstrap.php';
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
    $templateParams["prodotti"] = $dbh->getAllProducts();  
}
if (isset($_GET["page"])){
    $templateParams["page"] = $_GET["page"];
} else{
    $templateParams["page"] = 1;

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