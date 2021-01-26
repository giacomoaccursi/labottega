<?php
require_once 'bootstrap.php';

if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) {
    if(isset($_POST["notificationToDelete"])){
        $dbh->deleteNotification($_POST["notificationToDelete"]);
    }
    $templateParams["titolo"] = "LaBottega - Admin";
    $templateParams["notifiche"] = $dbh -> getNotificationsByUser($_SESSION["id"]);
    $templateParams["section"] = 'notifications_list.php';
    $templateParams["js"] = JS_ROOT . "admin-notifications.js";
    require 'template/base.php';
} else {
    header("location: ".ROOT."login.php");
}

?>