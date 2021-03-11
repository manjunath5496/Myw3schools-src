<?php
$db_server = "localhost";
$db_username = "mywschoo_user";
$db_password = "maczen5496";
$db_database = "mywschoo_db";
 
$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>