<?php
    session_start(); 
    define("ROOT","../");
    define("IMG_ROOT", ROOT."public/img/");
    define("JS_ROOT", ROOT."public/js/");
    require_once(ROOT."database/database.php");
    require_once(ROOT."utils/login-functions.php");
    $dbh = new DatabaseHelper("localhost", "root", "", "labottega", 3306);
?>