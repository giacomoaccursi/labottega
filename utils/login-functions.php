<?php
require_once("database/database.php");

function registerLoggedUser($user){
    $_SESSION["id"]= $user["id"];
    $_SESSION["tipo"]= $user["tipo"];
}

function isUserLoggedIn(){
    return !empty($_SESSION['id']);
}

function isValidEmail($input_email,$allEmails){
    foreach($allEmails as $email ){
        if($email["email"] == $input_email){
            return false;
        }
    }
    return true;
}

?>