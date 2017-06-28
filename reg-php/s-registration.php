<?php
require('../connect.php');
if(isset($_POST['staff'])){
	$staff_id=$_POST['staff_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$department=$_POST['department'];

	$query = mysqli_query($con, "INSERT INTO `staff`(`staff_id`,`fname`,`lname`,`contact`,`email`,`address`,`department`)VALUES('$staff_id','$fname','$lname','$contact','$email','$address','$department')");
	if($query){
		echo "<script>window.open('../adm/manage-staff.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>