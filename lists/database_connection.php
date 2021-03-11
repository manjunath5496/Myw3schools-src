<?php


$connect = new PDO("mysql:host=localhost;dbname=mywschoo_db", "mywschoo_user", "maczen5496");

session_start();

$_SESSION["user_id"] = "1";

?>
