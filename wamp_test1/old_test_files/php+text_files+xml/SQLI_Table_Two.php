<!DOCTYPE html>
<html>
<style>

body{
background-color:lightgrey;
font-family:Times New Roman;
}
h1{
text-align:center;
color:red;
}

table ,th, td{
border-collapse:collapse;
border: 1px solid black;
}
div{
	font-family:Impact;
 text-align:center;
color:black;!important;	
}
h4{
	text-align:center;
	color:lightblack;
}
</style>
<body>

<title>SQLI table two</title>

<head><h1>SQLI table two</h1><head>



<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test_database_1";


$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	echo"<div>";
	die("Connection Error".$conn->connect_error);
	}
	echo"<h4>";
echo "Connected  successfuly";
echo"</h4>";
echo"</div>";
	echo"<div>";
$sql="SELECT id,name,lastname FROM table_two";
$result=$conn->query($sql);
if($result->num_rows>0){

	echo"<table><tr><th>id</th><th>name</th>
	<th>Lastname</th></tr>";
	while($row=$result->fetch_assoc()){
		echo  "<tr><td>".$row["id"]."</td><td>".
		$row["name"]."</td><td>".$row["lastname"]."</td></tr>";
		
		
	}
	echo"</table>";
	echo"</div>";
	}else{
		echo "No result matching your query";	
	}

$conn->close();
?>

</body>



</html>