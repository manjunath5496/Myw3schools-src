<?php

ini_set('display_errors', 'On');

error_reporting(E_ALL);

	$dbConn = new PDO('mysql:host=localhost;dbname=mywschoo_db', 'mywschoo_user', 'maczen5496');
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once 'database.php';

?>