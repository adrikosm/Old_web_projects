<!DOCTYPE html>
<html>

<style>
body{
background-color:#eee;
}
</style>

<title>TEST4</title>

<head>
<h1 style="text-align:center; color:green;" > Simple form </h1>
</head>

<body>
<p id="demo"></p>
<button typpe="button" onclick="alert(document.getElementById('demo').innerHTML = Date())">
press here for the time</button>
<form action="#" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
<input type="range" id="a" name="a" value="0">
100+
<input type="number" id="b" name ="b" value="0">
=
<output name="x" for="a b"></output>
<input type ="submit">
</form>
<i>Give credencials:</i>
<form action="#" autocomplete="on">
First name:<input type="text" name="autoname"><br>
Last name:<input type ="text" name ="autolastname"><br>
Email:<input type="email" name="autoemail" autocomplete="off"><br>
<input type ="submit">
</form>
<form action="#" >
<p>Write anything about yourself</p>
<textarea style="background-color:powderblue;" name="message" rows="10" cols="30"></textarea>
<br>
<input type="submit"><br><br>
</form>
<form action="#">
<strong>Select images:<strong>
<input type="file" name="images" multiple>
<input type ="submit"><br><br>
</form>

<form action="#">
<i><b>Select your favourite color</b></i>
<input type="color" name="favcolor" value="#ff0000">
<input type ="submit">
</form>

<form action="#">
Enter a date before 2007-01-01:<br>
<input type="date" name="bday" max="2006-12-31"><br><br>
Enter a date after 2007-01-01:<br>
<input type="date" name="bday" min = "2007-01-02"><br><br>
<input type="submit">
</form>
</body>
<form action="#">
Enter birthday an time:
<input type="datetime-local" name="bdayt">
<input type="submit" value="send">
</form>


<form action="#">
Give your age:
<input type="number" name="age" min="1" max="110">
</form>
<?php 

echo"Welcome:" ;
echo $_POST["autoname"]; echo $_POST["autolastname"];
echo "<br>";












?>
</html>