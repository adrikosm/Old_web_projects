<?php 
session_start();
?>
<!DOCTYPE html>
<?php

$cookie_name="user";
$cookie_value="John Smith";
setcookie($cookie_name,$cookie_value,time() + (86400*1),"/");
?>
<html>
<style>
table,th,td{
	border:1px solid black;
	border-collapse:collapse;
	
}
th,td{
padding: 5px;	
}
body{
background-color:#eee;
}

h1{
	text-align:center;
	color:green;
}
b{
	text-align:center;
}
h2{
	text-align:center;
	color:red;
}
</style>

<title>Cookies </title>
<body>

<head><h1><b>php cookies </b></h1></head>


<?php 
if(count($_COOKIE)>0){
	echo "Cookies are enabled ";
	echo "<br>";
}else{
echo"cookies are disabled ";
echo "<br>";	
}
if (!isset($_COOKIE[$cookie_name])){
echo "Cookie named: ".$cookie_name." is not set";
echo"<br>";
}else{
	echo "Cookie named: ".$cookie_name. " is set with the value ".
$_COOKIE[$cookie_name];	
echo"<br>";
}
echo "<br>";
$int=12;
$min=1;
$max=200;
if(filter_var($int ,FILTER_VALIDATE_INT,
array("options"=> 
array("min_range"=>$min
,"max_range"=>$max))) 
=== false){
	echo"Variable value is not within the legal range";
echo "<br>";
	}else{
	echo "Variable value is withing legal range";	
echo "<br>";
	}
	
echo"<br>";
echo "<hr>";
echo "<h2><b>Before sanitizing:</b></h2> ";
$str ="<h1>H♂el♂lo╨╨WÅorÅld Å</h1>";
echo $str;
$newstr=filter_var($str,FILTER_SANITIZE_STRING,
FILTER_FLAG_STRIP_HIGH);
echo"<br>";

echo "<h2><b>After sanitizing:</b></h2> ";
echo"<br>";
echo  $newstr;
echo "<hr>";
echo "<br>";
?>


<table>
<tr>
<td>Filter Name</td>
<td>Filter ID</td>
</tr>
<?php
echo "<br>";
foreach(filter_list() as $id=>$filter){
	
echo '<tr><td>'
. $filter . '</td><td>' . 
filter_id($filter) . 
'</td></tr>';	
}
?>
<?php
//error handling function
function customERROR($errno,$errstr){
echo "<b>Error: </b> [$errno] $errstr <br>";
echo "Ending script";
die();
}
set_error_handler("customERROR",E_USER_WARNING);

$test=0;
if($test>=1){
	trigger_error("Value must be 1 or below<br>"
	,E_USER_WARNING);
}
?>
</table>

<?php
setcookie($cookie_name,$cookie_value,time()-3600);
session_unset();
session_destroy();
?>

</body>
</html>