<?php
require_once 'bootstrap.php';

if(isset($_GET["action"])){
    if($_GET["action"]=="login"){
        if( isset($_POST["email"]) && isset($_POST["pass"])){
            $login_result = $dbh -> checkLogin($_POST["email"],$_POST["pass"]);
            if(count($login_result)==0){
                $templateParams["errorelogin"] = "Errore! Controllare username o password!";
            }else{
                registerLoggedUser($login_result[0]);
            }
        }

    }elseif($_GET["action"]=="register"){
        if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"]) && isset($_POST["pass_1"]) && isset($_POST["pass_2"])){
            if(isValidEmail($_POST["email"],$dbh -> getAllEmails())){
                $dbh-> registerNewUser($_POST["nome"],$_POST["cognome"],$_POST["email"],$_POST["pass_1"]);
                $login_result = $dbh -> checkLogin($_POST["email"],$_POST["pass_1"]);
                if(count($login_result)>0){
                    registerLoggedUser($login_result[0]);
                }else{
                    $templateParams["erroreEmail"] = "L'email inserita è gia presente nel sito!";
                }
            }
        }
    }
}

if(isUserLoggedIn()){
    header("location: dashboard.php");
}



$templateParams["titolo"] = "LaBottega - Login";
$templateParams["pagina"] = "login_template.php";
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 
$templateParams["js"] = JS_ROOT.'subscribe-validator.js';

require 'template/base.php';
?>