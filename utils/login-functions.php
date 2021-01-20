<?php

function registerLoggedUser($user){
    $_SESSION["id"]= $user["id"];
    $_SESSION["tipo"]= $user["tipo"];
}

function isUserLoggedIn(){
    return !empty($_SESSION['id']);
}

function isPresentEmail($input_email,$allEmails){
    foreach($allEmails as $email ){
        if($email["email"] == $input_email){
            return true;
        }
    }
    return false;
}

function sendEMail($to_email,$subject,$message){
    $headers = 'From: labottega@amministrazione.com';
    mail($to_email,$subject,$message,$headers);
}

function generateRandomCode(){
    return rand(10000,99999);
}

?>