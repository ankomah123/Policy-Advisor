<?php
/*My connection string*/
    $servername = "localhost";
    $database = "policy_advisor"
    $username = "root";
    $password = "";

   $log = array();
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " .$conn->connect_error);
	}else{
		$log[] = "Connection Established";
	}
?>

