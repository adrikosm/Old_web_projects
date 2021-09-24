<?php
include 'dbconfig.php' 
?>
<!--MY MODAL REGISTER-->
<div class="modal fade" id="mymodal" role="dialog">
<div class="modal-dialog">
<!--Modal panel-->
<div class="panel panel-primary">
<div class="panel-heading center_element">
<h4>Registry</h4>
</div>

<div class="center_element">
<div class="panel-body">
<?php 
// connect to the table
$sql=$conn->prepare("SELECT id,groups_description
FROM groups");
$sql->execute();
$result1=$sql->fetch(PDO::FETCH_ASSOC);

$panel_id=$result1["id"];
$panel_description=$result1["groups_description"];

$group_rows=$sql->rowCount();
$number_of_rows=0;
// print the description from the table and have as its value the id
echo "Groups"."<select id='groups_select_id'>";

while($number_of_rows<$group_rows){	

echo "<option value='$panel_id'>".$panel_description."</option>";


$result1=$sql->fetch(PDO::FETCH_ASSOC);
$panel_id=$result1["id"];
$panel_description=$result1["groups_description"];
$group_rows=$sql->rowCount();
$number_of_rows=$number_of_rows+1;
}
echo "</select>";
echo "<br>";
?>
<?php 
// connect to the table
$sbl=$conn->prepare("SELECT id,description
FROM sensortypes");

$sbl->execute();
$result2=$sbl->fetch(PDO::FETCH_ASSOC);

$panel_sensor_id=$result2["id"];
$panel_sensor_description=$result2["description"];

$sensor_rows=$sbl->rowCount();
$number_of_rows=0;
echo "Sensortypes"."<select id='sensortypes_select_id'>";
while($number_of_rows<$sensor_rows){	
// print the description from the table and have as its value the id
echo "<option value='$panel_sensor_id'>".$panel_sensor_description."</option>";

$result2=$sbl->fetch(PDO::FETCH_ASSOC);
$panel_sensor_id=$result2["id"];
$panel_sensor_description=$result2["description"];
$sensor_rows=$sbl->rowCount();
$number_of_rows=$number_of_rows+1;

}
echo "</select>";
echo "<br>";
?>
Description:<br><input type="text" id="form_description" autocomplete="off">

<br>
<br>

<button type="button" class="btn btn-danger pull-left" 
data-dismiss="modal">
<span class="glyphicon glyphicon-remove"> 
</span>Cancel</button>

<button type="button" class="btn btn-success pull-right"
id="register_buttonid" data-dismiss="modal"> 
<span class="glyphicon glyphicon-pencil"></span>Register</button>

</div>
</div>
</div>
</div>
</div>
<!------------------------------------->
<!-- MY MODAL EDIT 2-->
<div class="modal fade" id="mymodal_edit_final" role="dialog">
<div class="modal-dialog">
<!--Modal panel-->
<div class="panel panel-info center_element">
<div class="panel-heading ">
<h4>Final edit</h4>
</div>
<div class="panel-body center_element" >
<input id="hidden_edit_id" type="hidden">
Groups old id:<br><input type="text" id="hidden_edit_group_id" disabled>
<br>
Sensortypes old id<br><input type="text" id="hidden_edit_type_id" disabled>
<br>
Old Description<br><input type="text" id="hidden_edit_description" disabled>
<br>
<?php 
// set a new connection to the table
$sql=$conn->prepare("SELECT id,groups_description
FROM groups");
$sql->execute();
$result1=$sql->fetch(PDO::FETCH_ASSOC);

$panel_id=$result1["id"];
$panel_description=$result1["groups_description"];

$group_rows=$sql->rowCount();
$number_of_rows=0;
// print the description from the table and have as its value the id
echo "New Groups"."<select id='groups_edit_id'>";
while($number_of_rows<$group_rows){	

echo "<option value='$panel_id'>".$panel_description."</option>";

$result1=$sql->fetch(PDO::FETCH_ASSOC);
$panel_id=$result1["id"];
$panel_description=$result1["groups_description"];
$group_rows=$sql->rowCount();
$number_of_rows=$number_of_rows+1;
}
echo "</select>";
echo "<br>";
?>
<?php 
// connect to the table
$sbl=$conn->prepare("SELECT id,description
FROM sensortypes");

$sbl->execute();
$result2=$sbl->fetch(PDO::FETCH_ASSOC);

$panel_sensor_id=$result2["id"];
$panel_sensor_description=$result2["description"];

$sensor_rows=$sbl->rowCount();
$number_of_rows=0;
echo "New Sensortypes:"."<select id='sensortypes_edit_id'>";
while($number_of_rows<$sensor_rows){	
// print the description from the table and have as its value the id
echo "<option value='$panel_sensor_id'>".$panel_sensor_description."</option>";

$result2=$sbl->fetch(PDO::FETCH_ASSOC);
$panel_sensor_id=$result2["id"];
$panel_sensor_description=$result2["description"];
$sensor_rows=$sbl->rowCount();
$number_of_rows=$number_of_rows+1;

}
echo "</select>";
echo "<br>";
?>

New description:<input type ="text" id="sensor_edit_description">
<br>
<button type="button" class="btn btn-danger pull-left"
data-dismiss="modal">
<span class="glyphicon glyphicon-remove"> </span>Cancel</button>

<button type="button" id="edit_everything" class="btn btn-success pull-right" 
data-dismiss="modal">
<span class="glyphicon glyphicon-ok"></span>Submit</button>

</div>
</div>
</div>
</div>
<!------------------------------------------>
<!--MY modal edit--->

<div class="modal fade" id="mymodal_edit" role="dialog">
<div class="modal-dialog">
<!--Modal panel-->
<div class="panel panel-warning">
<div class="panel-heading center_element">
<h4>Danger!</h4>
</div>
<div class="panel-body">
<p><b>Are you sure you want to edit </b></p>
<button type="button" class="btn btn-danger pull-left"
data-dismiss="modal">
<span class="glyphicon glyphicon-remove"> </span>Cancel</button>

<button type="submit" class="btn btn-success pull-right"
data-target="#mymodal_edit_final" data-toggle="modal"
data-dismiss="modal" 
>
<span class="glyphicon glyphicon-ok">
</span>Continue</button> 

</div>
</div>
</div>
</div>
<!----------------------------------------------------->

<!--MY modal remove--->
<div class="modal fade" id="mymodal_remove" role="dialog">
<div class="modal-dialog">
<!--Modal panel-->
<div class="panel panel-danger">
<div class="panel-heading">
<h4>Danger!</h4>
</div>

<div class="panel-body center_element">
<input id="hidden_remove_id" type="hidden">

Old Description<br><input type="text" id="hidden_remove_description" disabled>
<br>
<p><b>Are you sure you want to delete </b></p>
<button type="button" class="btn btn-danger pull-left"
data-dismiss="modal">

<span class="glyphicon glyphicon-remove"> 
</span>Cancel</button>

<button type="button" class="btn btn-success pull-right" 
data-dismiss="modal" id="delete_eveything">
<span class="glyphicon glyphicon-ok">
</span>Continue</button>
</div>
</div>
</div>
</div>
<!----------------------------------------->