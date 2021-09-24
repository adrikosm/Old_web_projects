<?php 
session_start();
if(!isset($_SESSION["userid"])){
	exit();
}
// include connection php
include 'dbconfig.php';

// retrive data via post
$delete_id=$_POST["data_delete"];
// no need to check if data == empty
try{	
// connect to the table and delete where id == given id
$sql= $conn->prepare("DELETE FROM sensortypes WHERE id=:data_delete");
$sql->bindParam(':data_delete',$delete_id);
$sql->execute();
// if everything went well echo OK
echo "OK"; 
}
catch(PDOExcepton $e){
	// echo ERROR if there was an error and give specified message
echo"ERROR:".$e->getMessage();
}
?>