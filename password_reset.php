<?php
require_once 'bootstrap.php';

if(isset($_POST["email"])){
        if(isPresentEmail($_POST["email"],$dbh->getAllEmails())){
            $code = generateRandomCode();
            $dbh->insertPwdToken($_POST["email"],$code);
            $templateParams["email"] = $_POST["email"];
            sendEMail($templateParams["email"],"Reset Password","Il Codice per cambiare la password è : ".$code);
            $templateParams["pagina"]='inserimento_codice.php';
        }else{
            $templateParams["pagina"]='password_reset_template.php';
            $templateParams["erroreEmail"]="L'email inserita non è presente nel sito!";
        }
}else{
    $templateParams["pagina"]='password_reset_template.php';
}

if(isset($_POST["code"]) && $_POST["code"]==$dbh->getTokenByEmail($_POST["confirmed_email"])){
    $templateParams["pagina"]='new_password_template.php';
    $templateParams["email"] = $_POST["confirmed_email"];
}

if(isset($_POST["pass_1"]) && isset($_POST["pass_2"])){
    var_dump($_POST);
    $dbh->changePwd($_POST["confirmed_email"], password_hash($_POST["pass_1"], PASSWORD_DEFAULT));
    header("location: login.php");
}

$templateParams["titolo"]='LaBottega - Reset password';
$templateParams["categorie"] = $dbh->getCategories(); 
$templateParams["sottoCategorie"] = $dbh->getSubCategories(); 
$templateParams["js"] = JS_ROOT.'subscribe-validator.js';


require 'template/base.php';
?>