<?php
	
	$db = new PDO('mysql:host=localhost;dbname=mywschoo_db', 'mywschoo_user', 'maczen5496');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = $db->prepare("SELECT signups_id, signup_email_address,signup_date FROM signups");
							$query->execute();
							$countt = $query->rowCount();
if($countt > 0){
    $delimiter = ",";
    $filename = "signups_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array( 'signup id', 'signup email address', 'signup date' );
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
       // $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['signups_id'], $row['signup_email_address'], $row['signup_date']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}


if(empty($fields)) {

	echo '<meta HTTP-EQUIV="refresh" CONTENT="0;URL=e1.php" /> ';

      echo'</br>';  

}	

exit;

?>