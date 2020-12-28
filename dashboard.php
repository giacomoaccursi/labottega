<?php
require_once 'bootstrap.php';

if(isUserLoggedIn()){

    $templateParams["titolo"] = "LaBottega - Dashboard";
    $templateParams["categorie"] = $dbh->getCategories(); 
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();
    $templateParams["js"] = JS_ROOT.'dashboard-manager.js';
    if($_SESSION['user']['tipo']==0){
        $templateParams["pagina"] = "user_dashboard.php"; 
        $templateParams["ordini"] = $dbh->getOrdersByUser($_SESSION["user"]["id"]);
    }elseif($_SESSION['user']['tipo']==1){
        $templateParams["pagina"] = "admin_dashboard.php"; 
    }

}else{
    header("location: login.php");
}


require 'template/base.php';