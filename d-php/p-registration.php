<?php
require('../connect.php');
if(isset($_POST['delete'])){
	$patient_id=$_POST['patient_id'];
	

	$delete=mysqli_query($con, "DELETE FROM `patient` WHERE `patient_id`='$patient_id'");
	if($delete){
		echo "<script>window.open('../adm/manage-patients.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>