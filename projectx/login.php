<?php
session_start();
$user=$_POST["username"];
$pass=$_POST["password"];


/*included file checks connection*/
include 'dbconfig.php';
// check username and pass on the database

$sth =$conn->prepare('SELECT id,isadmin
FROM user
WHERE username=:user AND password=:pass' );

$sth->bindParam(':user',$user);
$sth->bindParam(':pass',$pass);
$sth->execute();
echo $sth->rowCount();


$numrows=$sth->rowCount();
$result = $sth->fetch(PDO::FETCH_ASSOC);
$uid=$result["id"];
$uadmin=$result["isadmin"];

if($numrows==1){
	echo"<br>";
	// start session and set session Variables
$_SESSION["userid"]=$uid;
$_SESSION["useradmin"]=$uadmin;

   header('Location: main.php');
}else{
	//if username and password dont exist go to unauthorized page
	header('Location: unauthorized.php');
}


?>