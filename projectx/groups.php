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
.p-footer{
	text-decoration:none;
	background-color:transparent;
}
.glyphicon{
	font-size:25px;
}
 </style>
 
 
 
 
 </head>


<body>

<?php
include 'navbar.php';
 ?>
<?php
include 'panels.php';
?>
<div class="container">
<ul class="list-group">
<li class="list-group-item center_element"><button type="button"
class="btn btn-default btn-lg"
data-target="#mymodal" data-toggle="modal">REGISTER</button>
</li>
</ul>
</div>

<div class="container">
<table class="table table-bordered table-hover table-responsive">
<caption class="center_element">Test table</caption>
<thead>
      <tr>
        <th>Description</th>
          <th>Edit</th>
            <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
     
      </tr>
      <tr>
	  <td></td>
       <td>
	  <button type="button"
class="btn btn-default btn-lg s btn-info"
data-target="#mymodal_edit" data-toggle="modal"> <span class="glyphicon glyphicon-pencil">
	  </span></button>
         </td>
   <td>
	  <button type="button"
class="btn btn-default btn-lg btn-danger"
data-target="#mymodal_remove" data-toggle="modal"><span class="glyphicon glyphicon-remove">
	   </span>
	   </td>    
      </tr>
      <tr>
	     
      </tr>
    </tbody>
  </table>
</div>



<?php
include 'footer.php';
?>
</body>
</html>