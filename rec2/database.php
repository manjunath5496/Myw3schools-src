<?php

$DB_host = "localhost";
$DB_user = "mywschoo_user";
$DB_pass = "maczen5496";
$DB_name = "mywschoo_db";

 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }


?>