<?php
require_once 'bootstrap.php';

if(isUserLoggedIn()){
    $templateParams["titolo"] = "LaBottega - Dashboard";
    $templateParams["categorie"] = $dbh->getCategories(); 
    $templateParams["sottoCategorie"] = $dbh->getSubCategories();
    if($_SESSION['user']['tipo']==0){
        $templateParams["pagina"] = "user_dashboard.php"; 
    }elseif($_SESSION['user']['tipo']==1){
        $templateParams["pagina"] = "admin_dashboard.php"; 
    }

}else{
    header("location: login.php");
}


require 'template/base.php';