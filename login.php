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
            }
        }

    }elseif($_GET["action"]=="register"){
        if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"]) && isset($_POST["pass_1"]) && isset($_POST["pass_2"])){
            if(isValidEmail($_POST["email"],$dbh -> getAllEmails())){
                $hashedPassword = password_hash($_POST["pass_1"], PASSWORD_DEFAULT);
                $dbh-> registerNewUser($_POST["nome"],$_POST["cognome"],$_POST["email"],$hashedPassword);
                $user_login_result = $dbh -> checkLogin($_POST["email"],$_POST["pass_1"]);
                if($user_login_result != -1){
                    registerLoggedUser($user_login_result);
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

require 'template/base.php';
?>