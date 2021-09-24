<?php


$servername="localhost";
$username="root";
$password="";
$dbname="projectx";

try{
		$conn = new PDO("mysql:host=$servername;dbname=projectx",
	$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOExeption $e){
	
	echo"Connection failed:".$e->getMessage();
}






?>