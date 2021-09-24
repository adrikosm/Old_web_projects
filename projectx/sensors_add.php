<?php
session_start();

if(!isset($_SESSION["userid"])){
	exit();
}
// include connection php
include 'dbconfig.php';

// retieve data via post
$g_id=$_POST["data_group_id"];
$t_id=$_POST["data_type_id"];
$desc=$_POST["data_description"];

// check if variables are empty 
if( empty($desc)){
// if data was empty echo ERROR so that no null variables can enter the table
	echo "ERROR";
}
else{
	try{
	// connect to the table and insert given data
	$sql=$conn->prepare("INSERT INTO sensor (group_id,type_id,description)
	VALUES(:g_id,:t_id,:desc)");
		$sql->bindParam(':g_id',$g_id);
		$sql->bindParam(':t_id',$t_id);
		$sql->bindParam(':desc',$desc);
		$sql->execute();

		echo "OK";
	
	}
	
	catch(PDOExcepton $e){
	// ehco ERROR if there was an error and give specified message	
	echo"ERROR:".$e->getMessage();
}
}

?>