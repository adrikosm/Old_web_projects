<!DOCTYPE html>
<html>
<style>
title{	
	color:red
}
body{	
	background-color:#eee;
}
.error{color:rgb(255,0,0)
}

</style>

<title>PHP example test </title>

<head>
<h1 style="text-align:center; color:green;"><b> <i>First php page</i></b> </h1>
</head>
<body>
<?php

echo "Today is: " .date("d/m/Y");
echo"<br>";
echo "Today is: ".date("l");
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER['REQUEST_METHOD']=="POST"){
	if(empty($_POST['name'])){
		$nameErr="name is required";
	
	}
	}else{
$name=
	test_input($_POST['name']);
	if(!preg_match("/^[a-zA_Z]*$/",$name)){
		$nameErr="Only letters and space allowed";
	}
	}
if(empty($_POST['email'])){
	$emailErr="E-mail is required";
}
else{
	$email=
	test_input($_POST['email']);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$emailErr="invalid email format";
}
	}
if(empty($_POST['website'])){
$website="website is required";

}else{

$website=
	test_input($_POST['website']);
	if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i"
	,$website)){
		$websiteErr="invalid URL";
	}
}
if(empty($_POST['comment'])){
$comment="";
}else{
$comment=
	test_input($_POST['comment']);
}
if(empty($_POST['gender'])){
$genderErr="gender is required";
}else{
$gender=
	test_input($_POST['gender']);
}
function test_input($data){
	$data =trim($data);
	$data=stripslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}


?>
<h1><b>YOUR FORM</b></h1>
<p><span class="error"><i> *required field</i></span></p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
name: <input type="text" name ="name"><span class="error">*
<?php echo $nameErr ;?></span><br>
E-mail<input type="email" name="email"><span class="error">*
<?php echo $emailErr; ?></span><br>
website<input type="text" name ="website"><span class ="error">*
<?php echo $websiteErr; ?></span><br>

<p>Comments: </p>
<textarea name="comment" rows="5" cols="30"></textarea><br>
Gender:<input type="radio" name="gender" value ="male">male
<input type="radio" name="gender" value ="female">female
<span class="error">*<?php $genderErr ?></span><br>
<input type ="submit" name="submit" value="submit">
</form>
<br><br>


<?php



echo "<h2>Your input:</h2>";
echo "<b>Name: </b>";
echo $name;
echo "<br>";
echo "<b>Email: </b>";
echo $email;
echo "<br>";
echo "<b>Website: </b>";
echo $website;
echo "<br>";
echo "<b>Comments: </b>";
echo $comment;
echo "<br>";
echo "<b>Gender: </b>";
echo $gender;

echo "<br>";
echo "<br>";

define("greetings","Hello wolrd");

	echo greetings;
	echo"<br>";
?>


<?php
echo "<br>";
echo "<br>";

$favcolor ="red";
switch($favcolor){
	case "red":
	echo "red color";
		echo"<br>";
	break;
	case "blue":
	echo" blue color";
		echo"<br>";
	break;
	case "green";
	echo"green color";
		echo"<br>";
	break;
	defautlt:
	echo "no favourite color";
		echo"<br>";
}
$x=1;

while($x<= 5){
	echo "the numer is $x <br>>";
	$x++;
}

$colors = array("red","green","blue");

foreach($colors as $value){
echo "value <br>";	
	
}
function sum_of_two($x,$y){
	$z=$x+$y;
	return $z;
}
echo"<br>";
echo "5+10=".sum_of_two(5,10)."<br>";
echo "3+14=".sum_of_two(3,14)."<br>";
echo "51+10=".sum_of_two(51,10)."<br>";
echo"<br>";
$cars =array("volvo","BMW","totoyota");
$array_lenght=count($cars);
echo" <b>cars array:</b><br>";
foreach($cars as $value){
	echo "$value <br>";	
}
echo"<br>";
sort($cars);
echo "<b>sorted cars array:</b><br>";
foreach($cars as $value){
	echo "$value <br>";	
}
echo"<br>";
rsort($cars);
echo "<b>sorted cars array in descending order:</b><br>";
foreach($cars as $value){
	echo "$value <br>";	
}

echo"<br>";
echo $_SERVER['PHP_SELF'];
echo"<br>";
echo $_SERVER['SERVER_NAME'];
echo"<br>";
echo $_SERVER['HTTP_HOST'];
echo"<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo"<br>";
echo $_SERVER['SCRIPT_NAME'];
echo"<br>";
echo"<br>";

?>


</body>

</html>