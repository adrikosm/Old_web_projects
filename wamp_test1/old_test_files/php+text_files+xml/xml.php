<!DOCTYPE html>
<html>
<style>
body{
background-color:powderblue;
font-family:Arial;
}
h1{
text-align:center;
color:grey;
}
div{
	text-align:center;	
}
</style>
<body>

<title>XML Parser</title>

<head><h1>XML<h1></head>

<?php

libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?> 
<document> 
  <user>John Doe</user> 
  <email>john@example.com</wrongemailemail> 
</document>"; 

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    print_r($xml);
}
?>
<?php
echo"<br>";
echo"<br>";

$myXMLData="<?xml  version='1.0'
encoding='UTF-8'?>

<note>
<to>Tove </to>

<from> Jani </from>
<heading>reminder</heading>
<body> dont forget me</body>
</note>
";
echo"<br>";
echo"<br>";
$xml=simplexml_load_string($myXMLData)
or die("error : canntot create obj");
echo"<br>";
print_r($xml);
echo"<br>";echo"<br>";
echo"<br>";
$xml =simplexml_load_file("note.xml")
or die("Error: Cannot create object");
echo $xml->to."<br>";
echo $xml->from."<br>";
echo $xml ->heading ."<br>";
echo $xml ->body;
echo"<br>";
echo"<br>";
?>
<?php
echo "<h1>Availabe titles:</h1>";
echo "<br>";
echo "<div>";
$xml=simplexml_load_file("books.xml")
or die("Error cannot load file");
echo $xml->book[0]->title."<br>";
echo $xml->book[1]->title."<br>";
echo $xml->book[2]->title."<br>";
echo $xml->book[3]->title."<br>";
echo "<br>";
echo "<br>";
echo "</div>";
echo "<h1>Book details:</h1>";
echo "<br>";

foreach($xml->children() as $books) { 
echo " language: ";
	echo $books->title['lang'];
	echo " , ";
	echo " Book category: ";
    echo $books->category;
	echo " , ";
	echo $books->title.",&#174 ";
	echo $books->author. ", ";
	echo $books->year .",";
	echo $books->price ." &#8364";
	echo "<br>";
	echo "<br>";
}

?>

<?php 
$parser=xml_parser_create();

function start($parser,$element_name,$element_attrs){
	switch($element_name){
		case "NOTE":
		echo"---NOTE--- <br>";
		break;
		case "TO":
		echo "to:                     ";
		break;
		case"FROM":
		echo"FROM: ";
		break;
		case"HEADING" :
		echo "Heading        v";
		break;
		case "BODY":
        echo "Message:         ";

	}	
}
function stop($parser,$element_name){
 echo "<br>";
	
}
function char($parser,$data) {
    echo $data;
}

xml_set_element_handler($parser,"start","stop");


xml_set_character_data_handler($parser,"char");

$fp=fopen("note.xml","r");


while ($data=fread($fp,4096)) {
    xml_parse($parser,$data,feof($fp)) or 
    die (sprintf("XML Error: %s at line %d", 
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
}


xml_parser_free($parser);

?>

</html>