<?php 
	session_start();
if(!isset($_SESSION["userid"])){
	exit();
}
// include connection php
include 'dbconfig.php';
//retrieve data with post
$delete_id=$_POST["deletion_id"];
// no need to check if id == empty

try{	
// Connect to table and delete data where id= given id
$sql= $conn->prepare("DELETE FROM groups WHERE id=:deletion_id");
$sql->bindParam(':deletion_id',$delete_id);
$sql->execute();
// echo OK if everything went well
echo "OK"; 
}
// echo ERROR if something went wrong give specidied message
catch(PDOExcepton $e){
echo"ERROR:".$e->getMessage();
}

?>