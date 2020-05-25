<?php include "db.php"; ?>
<?php
	// print_r($_POST);
	$id=$_POST['id'];
	$delete = mysql_query("delete from testing where id='$id' ");
	if($delete){
		echo "Data Deleted";
	}
?>