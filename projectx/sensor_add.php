<?php 
session_start();
if(!isset($_SESSION["userid"])){
	exit();
}
// include connection php
include 'dbconfig.php';
// retieve data via post
$desc=$_POST["data_description"];
$mes=$_POST["data_mesurements"];

// check if data == empty
if( empty($desc) || empty($mes) ){
	// if data was empty echo ERROR so that no null variables can enter the table
	echo "ERROR";
}else{	
try{

$sql=$conn->prepare("INSERT INTO sensortypes (description,	measurements)
VALUES(:desc,:mes)");
$sql->bindParam(':desc',$desc);
$sql->bindParam(':mes',$mes);

$sql->execute();
// echo OK if everything went well
echo "OK"; 
}
catch(PDOExcepton $e){
	// ehco ERROR if there was an error and give specified message
echo"ERROR:".$e->getMessage();
}	
}
?>