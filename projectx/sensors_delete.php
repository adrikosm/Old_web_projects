<?php 
session_start();
if(!isset($_SESSION["userid"])){
	exit();
}

// include connection php
include 'dbconfig.php';

// retrieve data via POST
$delete_sensors=$_POST["sensors_delete"];
// no need to check if data == empty

try{
	// connect to the table and delete where id=$delete_sensors
$sql= $conn->prepare("DELETE FROM sensor WHERE id=:sensors_delete");
$sql->bindParam(':sensors_delete',$delete_sensors);
$sql->execute();
	
	
	//if everything went well echo OK
	echo "OK";
}
catch(PDOExcepton $e){
	// ehco ERROR if there was an error and give specified message
echo"ERROR:".$e->getMessage();
}
?>