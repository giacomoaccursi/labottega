<?php
require_once 'bootstrap.php';

if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {
    if(isset($_GET["user_id"])){
        $templateParams["cliente"] = $dbh -> getCustomerById($_GET["user_id"]);
    }
    if(isset($_POST["cliente"]) && isset($_POST["messaggio"])){
        if($_POST["cliente"]==0){
            $clienti = $dbh->getAllCustomers();
            foreach ($clienti as $cliente) {
                $dbh -> insertNotification($cliente["id"],$_POST["messaggio"]);
                sendEMail($dbh->getEmailById($cliente["id"]),'Nuova Comunicazione',$_POST["messaggio"]);
            }
        }else{
            $dbh -> insertNotification($_POST["cliente"],$_POST["messaggio"]);
            sendEMail($dbh->getEmailById($_POST["cliente"]),'Nuova Comunicazione',$_POST["messaggio"]);
        }

    }
    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["section"] = 'insert_notification.php';
    $templateParams["clienti"] = $dbh -> getAllCustomers();
    require 'template/base.php';
} else {
    header("location: ".ROOT."login.php");
}

?>