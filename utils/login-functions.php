<?php

function registerLoggedUser($user){
    $_SESSION["user"]= $user;
}

function isUserLoggedIn(){
    return !empty($_SESSION['user']['id']);
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