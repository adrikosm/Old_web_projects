<!DOCTYPE html>
<html>
<style>
body{
	background-color:#4EB1BA;
}
h1{
text-align:center;
color:#E9E9E9;
}
h3{
color:#E9E9E9;
}

</style>

<body>

<title>MY form</title>
<head><h1>Form output</h1></head>

<?php
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$phonenumber=$_POST["phonenumber"];
$bio=$_POST["bio"];


/*
connect to my sqli
*/

$servername="localhost";
$username="root";
$password="";
$dbname="test_database_1";



/*$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection error");
}
echo "Connection Successfull";
echo "<br>";
$bio = mysql_real_escape_string($bio);

$sql="INSERT INTO user_form_table(Name,LastName,PhoneNumber,Bio) 
VALUES ('$name','$lastname','$phonenumber','$bio')";

echo "<br>";
$result=$conn->query($sql);
if($result){
	echo "New record created successfully";
	echo "<br>";
}else{
	echo"ERROR!";
	echo "<br>";
}
$conn->close();
*/
try{
	$conn = new PDO("mysql:host=$servername;dbname=test_database_1",
	$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	echo"Connected successfully";
	echo"<h1>";
	echo "results:";
	echo"<h1>";
	echo"<h3>";
echo "Name: ".$name."<br>";
echo "LastName: ".$lastname."<br>";
echo "PhoneNumber: ".$phonenumber."<br>";
echo  "BIO: "."<br>".$bio."<br>";
echo"</h3>";

}
catch(PDOExeption $e){
	
	echo"Connection failed:".$e->getMessage();
}
?>





</body>

</html>