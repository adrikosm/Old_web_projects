<!DOCTYPE html>
<html>
<style>
body{
background-color:powderblue;
}
h1{
font-family:courier;
}
</style>

<body>

<title > Multidimensional arrays </title>
<h1 style="text-align:center; color red; 
text-decoration:underline"><b><i>PHP ARRAYS </i> <b></h1> 
<?php
 
echo"the time is: ",date("h:i:sa"); 
echo" <br>";
echo "Today is: ".date("l ") .date("d/m/Y");
echo"<br>";

echo"<br>";
$d1 =strtotime("July 13");
$d2=ceil(($d1-time()) /60/60/24);
echo "there are ".$d2." days until 13th of july";
$cars = array(

array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);


for($row =0;$row<4;$row++){
echo"<p><b>Row Numer $row</b></p>";
echo "<ul>";
for($col=0;$col<3;$col++){
echo "<li>".$cars[$row][$col]."</li>";
}
echo"</ul>";
}

echo $cars[0][0].":In stock:".$cars[0][1].
". sold:".$cars[0][2]."<br>";
echo $cars[1][0].":In stock:".$cars[1][1].
". sold:".$cars[1][2]."<br>";
echo $cars[2][0].":In stock:".$cars[2][1].
". sold:".$cars[2][2]."<br>";
echo $cars[3][0].":In stock:".$cars[3][1].
". sold:".$cars[3][2]."<br>";


echo readfile("web.text");
echo "<br>";
echo"<br>";

$myfile = 
fopen("file.txt","r") or die ("unable to open file");
echo"<br>";
//outputs the whole file
//echo fread($myfile,filesize("file.txt"));
// outputs one line
//echo fgets($myfile);

/* outputs the whole file line by line
while(!feof($myfile)){
	echo fgets($myfile);
}
*/
/* outputs the whole file one character at at time
until end of file
while("feof($myfile)"){
	echo fgetc($myfile);	
}
*/
echo "<hr>";

while(!feof($myfile)){
	echo fgets($myfile);
}
fclose($myfile);

echo"<hr>";
$myfile=
fopen("file.txt","r") or die ("Unable to open file");
// write to the text file
$text=" Jane Doe\n";
fwrite($myfile,$text);
$text="John Smith\n";
fwrite($myfile,$text);

echo fread($myfile,filesize("file.txt"));

fclose($myfile);


?>


</body>

</html>