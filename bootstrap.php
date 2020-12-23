<?php
    session_start(); 
    define("IMG_ROOT", "./public/img/");
    require_once("database/database.php");
    $dbh = new DatabaseHelper("localhost", "root", "", "labottega", 3306);
?>