<?php
    require_once 'bootstrap.php';

    if(isset($_POST["productId"])){
        $productId = $_POST["productId"]; 
        $dbh->insertProductInCart(1, $productId); 
        //da aggiungere anche lo user se esiste
    } 
 
    //qui in teoria bisogna controllare se lo user è loggato, 
    // se si aggiungo i prodotti al db, altrimenti a una var di sessione ($_SESSION).
    
?>