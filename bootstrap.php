<?php
    session_start(); 
    require_once("database/database.php");
    $dbh = new DatabaseHelper("localhost", "root", "", "labottega", 3306);
?>