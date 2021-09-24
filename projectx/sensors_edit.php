<?php 
session_start();

if(!isset($_SESSION["userid"])){
	exit();
}

// include connection php
include 'dbconfig.php';


// retieve data via post
$s_id=$_POST["sensors_id"];
$g_id=$_POST["groups_id"];
$t_id=$_POST["sensortypes_id"];
$desc=$_POST["description_id"];

;

// check if description == empty
if(empty($desc)){
	// if variable is empty echo ERROR
	//in order not to enter null elements to the table
	echo "ERROR";
}else{
	// if variable is not empty continue
	try{
		
		// connect to the table so you can update data
		$sql=$conn->prepare("UPDATE sensor
		SET group_id=:groups_id,
		    type_id=:sensortypes_id,
            description=:description_id	
WHERE id=:sensors_id	");

$sql->bindParam(':sensors_id',$s_id);
$sql->bindParam(':groups_id',$g_id);
$sql->bindParam(':sensortypes_id',$t_id);
$sql->bindParam(':description_id',$desc);
$sql->execute();

//if everything went well echo OK
echo "OK";
	}catch(PDOExcepton $e){
			//if there was an error echo ERROR and give specified message
echo"ERROR:".$e->getMessage();
	}
}










?>