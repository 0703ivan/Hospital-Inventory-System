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

	$query = mysqli_query($con, "UPDATE `staff` SET `fname`='$fname',`lname`='$lname',`contact`='$contact',`email`='$email',`address`='$address',`department`='$department' WHERE `staff_id`='$staff_id'");
	if($query){
		echo "<script>window.open('../adm/manage-staff.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>