<?php
error_reporting(0);
try {
$dbc = new PDO('mysql:host=localhost; dbname=mywschoo_db', 'mywschoo_user', 'maczen5496');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>