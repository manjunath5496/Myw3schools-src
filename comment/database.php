<?php
//$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die('MySQL connect failed. ' . mysqli_connect_error());
function dbQuery($sql) {
global $dbConn;


$result = $dbConn->prepare($sql);
							$result->execute();
//$result = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
return $result;
}



function dbAffectedRows() {
global $dbConn;

$countt = $dbConn->rowCount();
return $countt;//mysqli_affected_rows($dbConn);
}
//function dbFetchArray($result, $resultType = MYSQLI_NUM) {

function dbFetchArray($result) {
	
return $result->fetch(PDO::FETCH_BOTH);//mysqli_fetch_array($result, $resultType);
}


function dbFetchAssoc($result) {
return $result->fetch(PDO::FETCH_ASSOC);//mysqli_fetch_assoc($result);
}
function dbFetchRow($result) {
return $result->fetch(PDO::FETCH_BOTH);//mysqli_fetch_row($result);
}



function dbFreeResult($result) {
return $result->closeCursor();//mysqli_free_result($result);
}
function dbNumRows($result) {
	$countt = $result->rowCount();
return $countt;//mysqli_num_rows($result);
}
function dbNumFields($result) {
return $result->columnCount();//mysqli_num_fields($result);
}
function dbInsertId() {
global $dbConn;
return $dbConn->lastInsertId(); //mysqli_insert_id($dbConn);
}
function closeConn() {
global $dbConn;
$dbConn = null;//mysqli_close($dbConn);
}
/*
* End of file database.php
*/
?>