<!DOCTYPE html>
<html>
<style>
body{
background-color:#eee;
}

h1{
	text-align:center;
	color:green;
font-family:Impact;
}
div{
text-align:left;
font-family:Impact;
size :"1";
color:white;
}
</style>

<title>PHP parser</title>
<body>
<head><h1><i>PHP parser</i></h1>

<?php
/*
create show hint 
create array with the availble names
*/
?>
<script>
function showHint(str){
	if(str.lenght)==0){
		
		document_getElementById("txtHint").innerHTML="";
		retrun;
	}else{
		
		var xmlhttp=new XMLHttpsRequest();
xmlhttp.onreadystaechange=
function(){
if(this.radyState ==4  && this.status==200){

document_getElementById("txtHint").this.respokseTe	
	
}		
}
}

</script>

</head>
<p>Start typing a <strong>      Name    </strong>        in   the   inputfield below
<form>
First  name:<input  type="text"
onkeyup="showHint(this.valie)">
</form>
<p><b> Suggestion</b> <span id ="txtHint"></span></p>;
<?php

echo "<div>";
echo "Today is: " .date("d/m/Y");
echo"<br>";
echo "Today Is ".date("l");
echo "<br>";
echo "The time is ".date("h:i:s:a");
echo "<br>";
echo"</div>";


$myfile =
fopen("web.text","r") or die
("Unable to open file ");
echo"<br>";
while(!feof($myfile)){
	echo fgets($myfile)."<br>";
	
}
fclose($myfile); 
?>




</body>
</html>