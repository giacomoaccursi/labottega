<?php
    session_start(); 
    define("IMG_ROOT", "./public/img/");
    define("JS_ROOT", "./public/js/");
    require_once("database/database.php");
    require_once("utils/login-functions.php");
    $dbh = new DatabaseHelper("localhost", "root", "", "labottega", 3306);
?>