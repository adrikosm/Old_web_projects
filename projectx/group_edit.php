<?php 
	session_start();
if(!isset($_SESSION["userid"])){
	exit();
}
//include connection php
include 'dbconfig.php';
// take post data
$edit_description=$_POST["data_edit_description"];
$edit_id=$_POST["data_edit_id"];

//check if data equals empty
if(!$edit_description || empty($edit_description)|| $edit_description==NULL || !isset($edit_description)){
	// echo error if empty so no null data can enter the table 
	echo "ERROR";
}
else{// if data is not empty continue
try{	
//UPDATE TABLE WITH GIVEN DATA
$sql= $conn ->prepare("UPDATE groups 
SET groups_description=:editable_description
WHERE id=:editable_id");

$sql->bindParam(':editable_description',$edit_description);
$sql->bindParam(':editable_id',$edit_id);
$sql->execute();

// echo OK if everything went well
echo "OK"; 
}
catch(PDOExcepton $e){
	//echo ERROR if an error occured .Give a specified message
echo"ERROR:".$e->getMessage();
}
}

?>
