<!DOCTYPE html>
<html>
<style>
body{
background-color:lightgrey;
}
h1{
text-align:center;
color:rgb(163,32,32);
font-family:arial;
}
h2{
	text-align:center;
	color:rgb(90,109,173);
}
</style>

<body>

<title>Files</title>
<head><h1>File handling</h1></head>

<!-- send to sample_text.php/ -->



<h2>My Form</h2>
<form method="get" action="sample_text.php">
Name:  <br>  <input type="text"  name="name" autocomplete="off">
<br>
LastName:<br><input type="text"  name="lastname"autocomplete="off">
<br>
Email:  <br> <input type="email" name="email"autocomplete="off">
<br>
Website:<br> <input type="text" name="website"autocomplete="off">
 <br>
 <p>Comments</p>
 <hr>
 <textarea name="comment" rows="5" cols="30">
 </textarea>
 <br>
 
 Gender:<input type="radio" name="gender" value="male">Male
 <input type="radio"  name="gender" value="female">Female
 <br>
<input type="submit" name="submit" value="submit">

 </form>
 <br>

 
</body>

</html>