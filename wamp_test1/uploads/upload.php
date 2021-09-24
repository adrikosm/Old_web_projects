<!DOCTYPE html>
<html>
<style>

</style>

<title>Uploads</title>
<body style="background-color:powderblue;">
<head>
<h1 style="text-align:center; color:red;"> Upload images</h1>
</head>
<hr>
 <form action="upload.php" method="post"
 enctype="multipart/form-data">
 select image to upload:
 <input type="file" name="fileToUpload" id="fileToUpload">
 <input type="submit" value="Upload Image"
 name="submit">
 </form>
 
 
<?php
//image upload
$target_dir="uploads/";
$target_file=$target_dir;
basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//check for image
if(isset($_POST["submit"])){
	$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !==false){
		echo"<br>";
		echo "file is an image -".
		$check["mime"].".";
		$uploadOk=1;
	}else{
		echo"<br>";
		echo"file is not an image";
		$uploadOk=0;
	}
}
if($_FILES["fileToUpload"]["size"]>500000){
	echo"<br>";
	echo"sorry,your file is to large.";
	$uploadOk=0;
}

// check for upload ok
if($uploadOk ==0){
	echo"<br>";
echo "Sorry file will not upload";	
}else{
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
	$target_file)){
		echo "<br>";
	echo "The File ". basename($_FILES["fileToUpload"]["name"]).
	" has been uploaded";
	
}else{
	echo"<br>";
	echo "Sorry there was an error uploading your file";
	
}
}


?>
<br>
<a href="uploads" target="_blank">click here to view image
</a>
<br>
</body>
</html>
