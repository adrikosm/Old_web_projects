<?php
session_start();
if(!isset($_SESSION["userid"])){
	header('Location: index.php');
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
<?php 
include 'navbar.php';




include 'footer.php';
?>
<img src="images/node.png" width="800" height="600" align="middle">







</body>
</html>