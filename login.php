<?php
require_once 'bootstrap.php';

if(isset($_GET["action"])){
    if($_GET["action"]=="login"){
        if( isset($_POST["email"]) && isset($_POST["pass"])){
            $user_login_result = $dbh -> checkLogin($_POST["email"],$_POST["pass"]);
            if($user_login_result == -1){
                $templateParams["errorelogin"] = "Errore! Controllare username e password!";
            }else{
                registerLoggedUser($user_login_result);
                addSessionCartToLoggedUser($dbh); 
                //CHECK-NOTIFICATIONS
                $templateParams["prodottiInCarrello"] = $dbh->getCartProducts($_SESSION["id"]);
                foreach($templateParams["prodottiInCarrello"] as $prodotto){
                    if($prodotto["quantità"]==0){
                        $dbh->insertNotification($_SESSION["id"],"Il prodotto ".$prodotto["nome"]." non è più disponibile.");
                        sendEMail($dbh->getEmailById($_SESSION["id"]),'Prodotto Esaurito','Ti informiamo che il prodotto: '.$prodotto["nome"].' presente nel carrello è esaurito.');
                    }elseif($prodotto["quantità"] > 0 && $prodotto["quantità"]<5){
                        $dbh->insertNotification($_SESSION["id"],"Il prodotto ".$prodotto["nome"]." sta per terminare, compralo ora !");
                        sendEMail($dbh->getEmailById($_SESSION["id"]),'Affrettati, il prodotto sta per terminare','Ti informiamo che il prodotto: '.$prodotto["nome"].' presente nel carrello sta per terminare: COMPRALO ORA!');
                    }
               }   
            }
        }

    }elseif($_GET["action"]=="register"){
        if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"]) && isset($_POST["pass_1"]) && isset($_POST["pass_2"])){
            if(!isPresentEmail($_POST["email"],$dbh -> getAllEmails())){
                $hashedPassword = password_hash($_POST["pass_1"], PASSWORD_DEFAULT);
                $dbh-> registerNewUser($_POST["nome"],$_POST["cognome"],$_POST["email"],$hashedPassword);
                $user_login_result = $dbh -> checkLogin($_POST["email"],$_POST["pass_1"]);
                if($user_login_result != -1){
                    registerLoggedUser($user_login_result);
                    sendEMail($dbh->getEmailById($_SESSION["id"]),'Benvenuto!','Ti diamo il benvenuto nel nostro sito. Scopri ora tutti i prodotti!');
                }
            }else{
                $templateParams["erroreEmail"] = "Errore: L'email inserita è gia presente!";
            }
        }
    }
}

if(isUserLoggedIn()){
    if($_SESSION["tipo"]==0){
        header("location: dashboard.php");
    }elseif($_SESSION["tipo"]==1){
        header("location: admin/index.php");
    }else{
        header("location: login.php");
    }
}

$templateParams["titolo"] = "LaBottega - Login";
$templateParams["pagina"] = "login_template.php";
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 
$templateParams["js"] = JS_ROOT.'subscribe-validator.js';

function checkNotifications(){

}

function addSessionCartToLoggedUser($dbh)
{
    $carrello = getCartProducts(); 
    foreach($carrello as $prodotto){
        $dbh->insertProductInCart($_SESSION["id"], $prodotto["idProdotto"]); 
    }
}
require 'template/base.php';
?>