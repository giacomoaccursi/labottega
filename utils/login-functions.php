<?php

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

function sendEmail($to,$subject,$message){
    $headers =  'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    mail($to,$subject,$message,$headers);
}

?>