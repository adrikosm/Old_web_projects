<!DOCTYPE html>
<html>
<style>
body{
background-color:rgb(113,107,107)
}
h1{
	text-align:center;
	color:rgb(242,242,242)
}
h3{
color:rgb(242,242,242)
}
</style>
<body>

<title>Sample text file</title>

<head><h1>My form data output</h1></head>


 <?php
 $name=$lastname=$email=$website=$comment=$gender="";
 
$name= $_GET["name"];
$lastname=$_GET["lastname"];
$email=$_GET["email"];
$website=$_GET["website"];
$comment=$_GET["comment"];
$gender=$_GET["gender"];
echo "<h3>";
echo "name: ";
echo $name;
echo "<br>";
echo "lastname:  ";
echo $lastname;
echo "<br>";
echo"email: ";
echo $email;
echo "<br>";
echo "website: ";
echo $website;
echo "<br>";
echo "comment:    ";
echo $comment;
echo "<br>";
echo" gender: ";
echo $gender;
echo "<br>";
echo  "</h3>";
 ?>
 



</body>
</html>