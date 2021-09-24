<?php
session_start();
if(!isset($_SESSION["userid"])){
	exit();
}
// include connection file
include 'dbconfig.php';
//retrieve data with post
$desc=$_POST["description_id"];
// check if data== empty so no null values enter the table

if(empty($desc)){
	//echo ERROR and stop running the php
	echo "ERROR";
}else{
	// if data not empty continue
try{	
// Connect to table and insert data
$sql= $conn->prepare ("INSERT INTO groups(groups_description)
VALUES(:desc)") ;
$sql->bindParam(':desc',$desc);
$sql->execute();
//echo OK if everything went well
echo "OK"; 
}
//echo ERROR if there was an error and give specified message;
catch(PDOExcepton $e){
echo"ERROR:".$e->getMessage();
}	
}






?>