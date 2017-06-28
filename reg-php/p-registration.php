<?php
require('../connect.php');
if(isset($_POST['patient'])){
	$patient_id=$_POST['patient_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$course=$_POST['course'];

	$query = mysqli_query($con, "INSERT INTO `patient`(`patient_id`,`fname`,`lname`,`contact`,`email`,`address`,`course`)
		VALUES('$patient_id','$fname','$lname','$contact','$email','$address','$course')");
	if($query){
		echo "<script>window.open('../adm/manage-patients.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>