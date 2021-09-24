<?php
session_start();
if(isset($_SESSION["userid"])) {
	//header('Location: main.php');
	echo$_SESSION["userid"];
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link 
  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link 
  href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link 
  href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.center_element{
	text-align:center;
	margin:0 auto;
}
</style>
</head>

<body>
<!--JUMBOTRON HEADER-->
<div class="container">
<div class="jumbotron">
<div class="center_element">
<h1> PROJECT X</h1>
<h2> ΕΦΑΡΜΟΓΗ ΔΙΑΧΕΙΡΗΣΗΣ</h2>
</div>
</div>
</div>
<!--START OF FORM--->
<!--LOGIN FORM-->
<!-- COLUMN 1 AND 3 EMPPTY COLUMN 2 LOGIN FORM-->
<div class="container-fluid">
<div class="row">
<div class="col-md-4"><!--COLUMN 1 :EMPTY-->
</div>
<div class="col-md-4"><!--COLUMN 2 LOGIN FORM-->
<!--LOGIN FORM-
only user and pass both required-->
<!--PRIMARY PANEL FOR FORM-->
<div class="panel panel-primary">
<div class="panel-heading">Login Form</div>
<div class="panel-body">
<!--START OF FORM-->
<form action="login.php" method="post">
<!--USERNAME-->

<div class="form-group">
<label for="username">Username:</label>
<div class="input-group">
<input type="text" class="form-control" id="username"
placeholder="Enter username" name="username" autocomplete="off" required>

</div>
</div>
<!--PASSWORD-->
<div class="form-group">
<label for="password">Password:</label>
<div class="input-group">

<input type="password" class="form-control" id="password"
placeholder="Enter password" name="password"  required>

</div>
</div>
<!--ΕΙΣΟΔΟΣ=SUMBIT BUTTON -->

<button type="submit" class="btn btn-default">ENTER</button>

</form>

</div>
</div>
<!--END OF PANEL-->
<!--END OF FORM-->
</div>
<div class="col-md-4"><!--COLUMN 3: EMPTY-->
</div>

</div>
</div>
<!------------------->

<?php 
include 'footer.php';

?>

</body>
</html>