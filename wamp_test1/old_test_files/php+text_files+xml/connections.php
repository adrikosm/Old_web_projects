<!DOCTYPE html>
<html>
<style>
body{
background-color:#eee;
}
h1{
text-align:center;
color:green;
}
table ,th,td{
	border:1px solid black;
border-collapse:collapse	
}
</style>
<title>Connections</title>
<body>
<head><h1>SQLI connection</h1></head>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test_database_1";
//connect
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
die("connection failed: ".$conn->connect_error);		
}
echo "connected successfully";

$sql="SELECT id,name ,description  FROM  test_table";
$result=$conn->query($sql);

if($result->num_rows > 0){
	echo "<table><tr><th>id</th><th>name</th><th>description
	</th></tr>";
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["id"]."</td>"."<td>"
		.$row["name"]."</td>"."<td>".$row["description"]
		."</td></tr>";
	}
	echo "</table>";
}else{
	echo "No results matching your query";
}


$conn->close();

?>
</body>
</html>