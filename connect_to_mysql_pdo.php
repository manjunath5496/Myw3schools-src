<?php
/*** mysql hostname ***/
$db_hostname = 'localhost';

/*** mysql database name ***/
$db_dbname   = 'mywschoo_db';

/*** mysql username ***/
$db_username = 'mywschoo_user';

/*** mysql password ***/
$db_password = 'maczen5496';

/*** mysql database charset ***/
$db_charset = 'utf8';

/***
$dsn = "mysql:host=$db_hostname;dbname=$db_dbname;charset=$db_charset";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dbh = new PDO($dsn, $user, $pass, $opt); ***/

try {
    $dbh = new PDO("mysql:host=$db_hostname;dbname=mywschoo_db", $db_username, $db_password);
    /*** echo a message saying we have connected ***/
    // echo 'Connected to database! </br>';


    }
catch(PDOException $e)
    {
    echo "Error!:". $e->getMessage() . "<br/>";
    die();
    }
 ?>
