<?php include "db.php"; ?>
<?php
	// print_r($_POST);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	$id=$_POST['id'];

	$insert = mysql_query("update testing set name='$name',email='$email',phone='$number',Address='$address' where id='$id' ");
	$inser_id = mysql_insert_id();
	if($insert){
		echo "Data Updated";
	}

?>