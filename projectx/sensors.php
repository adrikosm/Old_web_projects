<?php
session_start();
if(!isset($_SESSION["userid"])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<!--BOOSTRAP-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link 
  rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
 <link 
  href="https://fonts.googleapis.com/css?family=Lato" 
  rel="stylesheet" type="text/css">
 <link 
  href="https://fonts.googleapis.com/css?family=Montserrat"
  rel="stylesheet" type="text/css">
 <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script 
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!------------------------------------------------------------>
<link rel="stylesheet" 
type="text/css"
 media="screen" 
href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
 
 <style>
    .center_element{
	text-align:center;
	margin:0 auto;
}
 
 </style>
 <script>
 //TRIGGER REGISTRATION
 $(document).ready(function(){
	 $("#register_buttonid").click(function(){
		 var data_group_id =$("#groups_select_id").val();
		 var data_type_id=$("#sensortypes_select_id").val();
		 var data_description=$("#form_description").val();
		 console.log(data_group_id);
		 console.log(data_type_id);
		 console.log(data_description);
		 $.ajax({
			 type  : "POST",
             data  : "data_group_id="+$("#groups_select_id").val()+
			 "&data_type_id="+$("#sensortypes_select_id").val()+
			 "&data_description="+$("#form_description").val(),
             url   : "sensors_add.php",
           	 cache : "false",
            success: function(data){
				console.log(data);
				if(data=="OK"){
					location.reload();
				}
				else{
					alert( "ERROR");
				}
			}});
	 });
 });
 </script>
 <script>
 //TRIGGER EDIT
 $(document).ready(function(){
	 $("#edit_everything").click(function(){
		 var sensors_id=$("#hidden_edit_id").val();
		 var groups_id=$("#groups_edit_id").val();
		 var sensortypes_id=$("#sensortypes_edit_id").val();
		 var description_id=$("#sensor_edit_description").val();
		 
		 console.log(hidden_edit_id);
		 console.log(sensors_id);
		 console.log(groups_id);
		 console.log(sensortypes_id);
		 console.log(description_id);
		 
		 $.ajax({
			 type    :   "POST",
			 data    :   "groups_id="+$("#groups_edit_id").val()+
			 "&sensortypes_id="+$("#sensortypes_edit_id").val()+
			 "&description_id="+$("#sensor_edit_description").val()+
			 "&sensors_id="+$("#hidden_edit_id").val(),
			 url     :   "sensors_edit.php",
			 cache   :   "false",
			 success :   function(data){
				 console.log(data);
				 if(data=="OK"){
					location.reload();
				 }else{
					 alert("ERROR");
				 }			 	 
			 }});
	 });
 });
 </script>
 <script>
 //TRIGGER DELETE

 $(document).ready(function(){
	 $("#delete_eveything").click(function(){
		 var sensors_delete=$("#hidden_remove_id").val();
		console.log(sensors_delete);
		$.ajax({
			type    :  "POST",
			data    :  "sensors_delete="+$("#hidden_remove_id").val(),
			url     :  "sensors_delete.php",
			cache   :  "false",
			success :   function(data){
				console.log(data);
					if(data=="OK"){
						location.reload();
					}else{
						alert("ERROR");
					}
		
			}});
	     });
       });
 </script>
 <script>
 //script used to get editing value for table
 function getvalue_edit(edit_id,edit_group_id,edit_type_id,edit_description){
	console.log(edit_id);	
	console.log(edit_group_id);	
	console.log(edit_type_id);	
	console.log(edit_description);	
	 $("#hidden_edit_id").val(edit_id);
	 $("#hidden_edit_group_id").val(edit_group_id);
	 $("#hidden_edit_type_id").val(edit_type_id);
	 $("#hidden_edit_description").val(edit_description);
 }
 </script>
  <script>
  //script used to get removable value for table
 function getvalue_remove(remove_id,remove_group_id,remove_type_id,remove_description){
	console.log(remove_id);	
	console.log(remove_group_id);	
	console.log(remove_type_id);	
	console.log(remove_description);	
	 $("#hidden_remove_id").val(remove_id);
	 $("#hidden_remove_group_id").val(remove_group_id);
	 $("#hidden_remove_type_id").val(remove_type_id);
	 $("#hidden_remove_description").val(remove_description);
 }
 </script>
 
 </head>
 <body>
 <!--NAVBAR PHP-->
 <?php
include 'navbar.php';
 ?>
 <?php 
 include 'sensors_panels.php';
 ?>
 <!-- START OF PAGE-->
 <h1 class="center_element">SENORS PHP</h1>
 <?php
 //REGISTER BUTTON
 if($_SESSION["useradmin"]!=0){
  echo "<div class='container'>";
  
echo " <ul class='list-group'>";
 echo "<li class='list-group-item center_element'>";
	
echo "<button type='button'
class='btn btn-default btn-lg'
data-target='#mymodal' data-toggle='modal'>"."REGISTER"."</button>";



echo "</li>";
 echo "</ul>";
 echo "</div>";
 }
 ?>
 <!--TABLE-->
 <div class="container">
<table id="data_table"
class="table table-bordered table-hover table-responsive">
<caption class="center_element">Test table</caption>
<thead>
<tr>
<th>ID</th>
<th>Group </th>
<th>Type</th>
<th>Description</th>
<?php
 if($_SESSION["useradmin"]!=0){
 echo"<th>"."Edit"."</th>";
 echo"<th>"."Delete"."</th>";
}
?>
</tr>
</thead>
 <tbody>
 <?php 
 // connect to the server via pdo
 include 'dbconfig.php';
 $sth=$conn->prepare("SELECT id,group_id,type_id,description
FROM sensor");
$sth->execute();
// fetch all the variables
$result=$sth->fetch(PDO::FETCH_ASSOC);
$uid=$result["id"];
$ugroup_id=$result["group_id"];
$utype_id=$result["type_id"];
$udescription=$result["description"];
 $numrows=$sth->rowCount();
$number_rows=0;
//INNER JOIN


$sql=$conn->prepare("SELECT sensor.id,sensor.description,sensor.group_id,groups.groups_description
	,sensor.type_id,sensortypes.description
	FROM((sensor
	INNER JOIN groups ON sensor.group_id=groups.id)
	INNER JOIN sensortypes ON sensor.type_id=sensortypes.id)");
	
	$sql->execute();
	$result2=$sql->fetch(PDO::FETCH_ASSOC);
 $group_id=$result2["groups_description"];
 $type_id=$result2["description"];


// check if table is full
// and post variables
while($number_rows<$numrows){
	
		echo "<tr>";
 echo "<td>" . $uid . "</td>";
 echo "<td>" . $group_id . "</td>";
 echo "<td>" . $type_id . "</td>";
 echo "<td>" . $udescription . "</td>";
	  // GIVE EACH BUTTON UNIQUE ID GROUP ID  TYPE ID AND DESCRIPTION
 // TO BE EXTRACTED FROM THE REGISTER DELETE AND EDIT PHPS
 if($_SESSION["useradmin"]!=0){
 echo "<td>"."<button type='button' class='btn btn-default 
 btn-info '
 onclick='getvalue_edit($uid,".'"'.$ugroup_id.'"'.",".'"'.$utype_id.'"'.",".'"'.$udescription.'"'.");'
 data-target='#mymodal_edit' data-toggle='modal'>".
"<span class='glyphicon glyphicon-pencil'>"."</span>"."</button>"."</td>";

 echo "<td>"."<button type='button' class='btn btn-default 
 btn-danger ' 
 onclick='getvalue_remove($uid,".'"'.$ugroup_id.'"'.",".'"'.$utype_id.'"'.",".'"'.$udescription.'"'.");'
 data-target='#mymodal_remove' data-toggle='modal'>".
"<span class='glyphicon glyphicon-remove'>"."</span>"."</button>"."</td>";
}
echo "</tr>";

$result=$sth->fetch(PDO::FETCH_ASSOC);
$uid=$result["id"];
$ugroup_id=$result["group_id"];
$utype_id=$result["type_id"];
$udescription=$result["description"];
 $numrows=$sth->rowCount();
$number_rows=$number_rows+1;

	$result2=$sql->fetch(PDO::FETCH_ASSOC);
 $group_id=$result2["groups_description"];
 $type_id=$result2["description"];



}
 ?>
 <tbody>
 </table>
 </div>
 <!-- DATA TABLE-->
 <script
src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
</script>

<script
type="text/javascript"
src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js">
</script>
  <!-- DATA TABLE SCRIPT-->
 <script>
$(document).ready(function() {
    $('#data_table').DataTable({
		    "sPaginationType": "full_numbers",
			// dont show pagination if page variables dislayed is smaller or equal to the  total variables
			"fnDrawCallback": function(oSettings) {
        if (oSettings._iDisplayLength > oSettings.fnRecordsDisplay()) {
            $(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
       }else{
		$(oSettings.nTableWrapper).find('.dataTables_paginate').show();
	    }
	  }
	 });
   });
  </script>
 <!--FOOTER PHP-->
 <?php
include 'footer.php';
?>
<!--END-->
 </body>
 </html>