<?php 
	session_start();
if(!isset($_SESSION["userid"])){
	exit();
}
//include connection php
include 'dbconfig.php';

// retrieve data via post
$edit_id=$_POST["data_edit_id"];
$edit_description=$_POST["data_edit_description"];
$edit_measuremenets=$_POST["data_edit_measurements"];

// check if variables are empty
if(empty($edit_id)||empty($edit_description)||empty($edit_measuremenets) ){
	// if variables are empty echo ERROR
	//in order not to enter null elements to the table
	echo "ERROR";
}else{
// if variables are not empty continue
try{
	// Connect to the table so you can update data with the given one
	$sql=$conn->prepare("UPDATE sensortypes
	SET description=:data_edit_description,
	measurements=:data_edit_measurements
	WHERE id=:data_edit_id");
	
	$sql->bindParam(':data_edit_id',$edit_id);
	$sql->bindParam(':data_edit_description',$edit_description);
	$sql->bindParam(':data_edit_measurements',$edit_measuremenets);
	$sql->execute();
	// if everything went well echo OK 
	echo "OK";
}
catch(PDOExcepton $e){
	//if there was an error echo ERROR and give specified message
echo"ERROR:".$e->getMessage();
}
}





?>