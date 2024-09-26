<html>
<head>
<title></title>
</head>
<body>

<!-- img upload / resume upload / file upload-->
<!-- first add ti form tag enctype="multipart/form-data" -->

<form action="" method="post" enctype="multipart/form-data">      <?  // make form with action on $_GET function?>
	<p>Name: <input type="text" name="username"/></p>
	<p>File: <input type="file" name="file1"/></p>

	<p><input type="submit" name="submit" value="Click"/></p>
</form>
<?php
if(isset($_POST['submit']))
{
	echo $username=$_POST['username']."<br>";
	echo $img=$_FILES['file1']['name'];
	
	// image upload
	$path="img/upload/".$img;
	$tmp_img=$_FILES['file1']['tmp_name'];
	move_uploaded_file($tmp_img,$path);
	
	
	// view 
	if($_FILES['file1']['size']>0)
	{
	?>
		<img src='img/upload/<?php echo $img?>'>
	<?php
	}
}

?>




</body>
</html>
