<?php
require_once 'bootstrap.php';

if (isUserLoggedIn()) {
    if(isset($_POST["notificationToDelete"])){
        $dbh->deleteNotification($_POST["notificationToDelete"]);
    }
    $templateParams["titolo"] = "LaBottega - Dashboard";
    $templateParams["categorie"] = $dbh->getCategories();
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();
    $templateParams["pagina"] = "user_dashboard.php";
    $templateParams["ordini"] = $dbh->getOrdersByUser($_SESSION["id"]);
    $templateParams["notifiche"] = $dbh -> getNotificationsByUser($_SESSION["id"]);
    $templateParams["js"] = JS_ROOT.'notifications.js';
} else {
    header("location: login.php");
}

require 'template/base.php';

?>