<!DOCTYPE html>
<html>

<style>
body{
	background-color:rgb(197,204,193);
}
h1{
	text-align:center;
color:rgb(209,10,10)
}
h3{
color:rgb(242,242,242)
}
</style>
<body>
<title>MY POST FORM</title>

<head><h1>Form Output </h1></head>
<?php 
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$website=$_POST["website"];
$comment=$_POST["comment"];
$gender=$_POST["gender"];
echo "<h3>";
echo "Name: ".$name."<br>";
echo "Lastname ".$lastname."<br>";
echo "Email: ".$email."<br>";
echo" Website: ".$website."<br>";
echo "Comment: ".$comment."<br>";
echo "Gender: ".$gender."<br>";
echo"</h3>";

$servername="localhost";
$username="root";
$password="";
$dbname="test_database_1";


$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Conecction error");
}
echo"Connected successfuly";
echo "<br>";
$sql="INSERT INTO  test_table (name,description)
VALUES('Bob','bob has a restaurant')";
echo "<br>";
$result=$conn->query($sql);

if($result){
	echo "New record created successfuly";
	echo "<br>";
}else{
echo "Error!";
echo "<br>";
}

$conn->close();






?>

</body>

</html>