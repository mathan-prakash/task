<?php include "db.php"; ?>
<?php
	// print_r($_POST);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	if (($name!="") && (3 <= strlen($name)) && (strlen($name) <= 12)){
		if ($email!="") {
	    	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      		if(($number!="") && (strlen($number)==10)){
	      			if($address!=""){
	      				$insert = mysql_query("insert into testing (name,email,phone,Address,status,created_datetime) values ('$name','$email','$number','$address','1',NOW()) ");
						$inser_id = mysql_insert_id();
	      			}
	      			else{
	      				$emailErr = "Enter the Address";
	      			}
	      		}
	      		else{
	      			$emailErr = "Enter the Phone No or Phone No is must be at 10 Characters";
	      		}
	    	}
	    	else{
	    		$emailErr = "Email is Invalide";
	    	}
	    }
	    else{
	    	$emailErr = "Enter the Email Id";
	    }
	}
	else {
	    $emailErr = "Enter the Name or Name must be at 3 to 12 characters";
	}
	
	if($insert){
		echo 'Data Added';
	}
	echo $emailErr;

?>