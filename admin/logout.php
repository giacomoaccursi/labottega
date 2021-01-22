<?php
require_once 'bootstrap.php';

session_destroy();
header("location:".ROOT."index.php");

?>