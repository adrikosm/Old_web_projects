
<!--MY MODAL-->
<div class="modal fade" id="mymodal" role="dialog">
<div class="modal-dialog">
<!--Modal panel-->
<div class="panel panel-primary">
<div class="panel-heading center_element">
<h4>Registry</h4>
</div>

<div class="center_element">
<div class="panel-body">

<!--Modal form register-->
<form action="#" method="post" autocomplete="off">
Sensor description<br><input type="text" id="form_descriptionid" name="form_description" autocomplete="off" 
required>
<br>
Sensor measurements<br><input type="text" id="form_measurementsid" name="form_mesurements" autocomplete="off" 
required>

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
<!--------------------------------------->
<!--MY modal remove--->

<div class="modal fade" id="mymodal_remove" role="dialog">
<div class="modal-dialog">
<!--Modal panel-->
<div class="panel panel-danger">
<div class="panel-heading">
<h4>Danger!</h4>
</div>
<div class="center_element">
<input id="hidden_id" type="hidden">
description  <br><input type="text"  id="hidden_description" disabled>
<br>
measurements <br><input type="text"  id="hidden_measurements" disabled>
</div>
<div class="panel-body center_element">
<p><b>Are you sure you want to delete </b></p>


<p id="print_getvalue_remove"></p>
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
<!---MY MODAL EDIT 2----->
<div class="modal fade" id="mymodal_edit_final" role="dialog">
<div class="modal-dialog">
<!--Modal panel-->
<div class="panel panel-info">
<div class="panel-heading ">
<h4>Final edit</h4>
</div>

<div class="panel-body" >
<div class="center_element">
<p><b>Old decription </b></p><br>
<input id="hidden_edit_id" type="hidden">
Old description<br><input type="text"  id="hidden_edit_description" disabled>
<br>
Old measurements<br><input type="text"  id="hidden_edit_measurements" disabled>
<p><b>Enter new description</b></p>
<input type="text" id="new_description" required>
<p><b>Enter new measurments</b></p>
<input type="text" id="new_measurments" required>
<hr>
<br>
<br>
</div>
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